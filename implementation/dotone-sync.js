/*
 * DotOne Playbook - server sync (PHP version)
 * Gives the playbook page the same "db" it gets inside Claude, backed by api.php.
 * Checks for teammates' changes every 4 seconds (15 when the tab is hidden).
 */
(function () {
  if (window.claude && typeof window.claude.use === "function") return;
  if (location.protocol === "file:") return;

  var API = new URL("api.php", document.baseURI).href;

  function call(method, action, id, body) {
    var url = API + "?action=" + action + (id ? "&id=" + encodeURIComponent(id) : "") + (method === "GET" ? "&_=" + Date.now() : "");
    var headers = { "X-Dotone": "1" };
    if (body !== undefined) headers["Content-Type"] = "application/json";
    return fetch(url, { method: method, credentials: "same-origin", cache: "no-store", headers: headers,
      body: body !== undefined ? JSON.stringify(body) : undefined
    }).then(function (r) {
      if (r.status >= 500 || r.status === 429 || r.status === 503) { var e = new Error("Server busy"); e.code = "unavailable"; throw e; }
      if (r.status === 401) throw new Error("You were signed out. Reload the page and sign in again");
      if (!r.ok) throw new Error("Server refused the change (" + r.status + ")");
      return r.json();
    }, function () { var e = new Error("No connection to the server"); e.code = "unavailable"; throw e; });
  }
  function msg(t) { if (typeof window.setStoreMsg === "function") window.setStoreMsg(t); }

  var db = {
    doc: function (p) {
      var id = String(p).split("/").pop();
      return {
        set: function (data) { return call("POST", "save", id, data); },
        delete: function () { return call("POST", "delete", id); }
      };
    },
    collection: function () {
      return { onSnapshot: function (cb) {
        var last = null, stopped = false, offline = false, timer = null;
        function tick() {
          if (stopped) return;
          call("GET", "list").then(function (res) {
            if (offline) { offline = false; msg("Back online. Shared with your team, saves automatically."); }
            if (res.version !== last) {
              last = res.version;
              var pr = res.projects || {};
              cb({ docs: Object.keys(pr).map(function (id) { var d = pr[id]; return { id: id, exists: true, data: function () { return d; } }; }) });
            }
          }).catch(function (e) {
            if (!offline) { offline = true; msg(/signed out/.test(e.message) ? e.message + "." : "Cannot reach the server. Retrying. Keep this tab open; edits are kept on screen."); }
          }).then(function () { timer = setTimeout(tick, document.hidden ? 15000 : 4000); });
        }
        document.addEventListener("visibilitychange", function () { if (!document.hidden && !stopped) { clearTimeout(timer); tick(); } });
        tick();
        return function () { stopped = true; clearTimeout(timer); };
      } };
    }
  };

  var ready = fetch(API + "?action=health&_=" + Date.now(), { credentials: "same-origin", cache: "no-store" })
    .then(function (r) { return r.ok; }, function () { return false; });

  window.claude = { use: function (name) { return name === "db" ? ready.then(function (ok) { return ok ? db : null; }) : Promise.resolve(null); } };
})();
