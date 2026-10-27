<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Play Games | DotOne Break Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Take a quick break at the DotOne Break Room: play Memory Match, Higher or Lower, Blackjack and Tic-Tac-Toe right in your browser.">
    <link rel="canonical" href="https://dotone.in/games">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DotOne">
    <meta property="og:title" content="Play Games | DotOne Break Room">
    <meta property="og:description" content="Quick browser games: Memory Match, Higher or Lower, Blackjack and Tic-Tac-Toe.">
    <meta property="og:url" content="https://dotone.in/games">
    <meta property="og:image" content="https://dotone.in/assets/og-image.jpg?v=2">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Play Games | DotOne Break Room">
    <meta name="twitter:description" content="Quick browser games: Memory Match, Higher or Lower, Blackjack and Tic-Tac-Toe.">
    <meta name="twitter:image" content="https://dotone.in/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261019">
    <script src="/js/header-nav.js?v=20261019" defer></script>
    <style>
        .gm-wrap{max-width:1100px;margin:0 auto;padding:48px 16px 72px;font-family:Poppins,sans-serif}
        .gm-hero{text-align:center;margin-bottom:32px}
        .gm-hero h1{font-size:clamp(2rem,4vw,2.75rem);font-weight:700;color:#0f172a;margin:0 0 8px}
        .gm-hero p{color:#475569;margin:0}
        .gm-tabs{display:flex;flex-wrap:wrap;gap:8px;justify-content:center;margin-bottom:24px}
        .gm-tab{border:1px solid #cbd5e1;background:#fff;color:#0f172a;padding:10px 18px;border-radius:999px;font-weight:600;cursor:pointer;font-family:inherit}
        .gm-tab.active{background:#0096EE;border-color:#0096EE;color:#fff}
        .gm-panel{display:none;background:#fff;border:1px solid #e2e8f0;border-radius:20px;padding:24px;box-shadow:0 10px 30px rgba(15,23,42,.06)}
        .gm-panel.active{display:block}
        .gm-panel h2{font-size:1.4rem;font-weight:700;margin:0 0 4px;color:#0f172a}
        .gm-sub{color:#64748b;margin:0 0 16px;font-size:.95rem}
        .gm-bar{display:flex;flex-wrap:wrap;gap:12px;align-items:center;justify-content:space-between;margin-bottom:16px}
        .gm-stat{font-weight:600;color:#0f172a}
        .gm-btn{background:#0096EE;color:#fff;border:0;padding:10px 18px;border-radius:10px;font-weight:600;cursor:pointer;font-family:inherit}
        .gm-btn:disabled{opacity:.45;cursor:not-allowed}
        .gm-btn.alt{background:#0f172a}
        .gm-msg{min-height:1.5em;font-weight:600;color:#0096EE;margin:12px 0}
        /* playing cards */
        .pc{width:72px;height:104px;border-radius:10px;background:#fff;border:1px solid #cbd5e1;display:inline-flex;flex-direction:column;justify-content:space-between;padding:6px 8px;font-weight:700;box-shadow:0 2px 6px rgba(0,0,0,.08);font-size:1.1rem;user-select:none}
        .pc.red{color:#dc2626}.pc.black{color:#0f172a}
        .pc .mid{text-align:center;font-size:1.8rem}
        .pc .bot{text-align:right;transform:rotate(180deg)}
        .pc.back{background:repeating-linear-gradient(45deg,#0096EE,#0096EE 6px,#0b7fc9 6px,#0b7fc9 12px);border-color:#0b7fc9}
        .pc.back *{visibility:hidden}
        .hand{display:flex;flex-wrap:wrap;gap:8px;min-height:106px;margin:8px 0 16px}
        /* memory */
        .mem-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:10px;max-width:440px;margin:0 auto}
        .mem-card{aspect-ratio:1;border-radius:12px;border:0;font-size:2rem;cursor:pointer;background:#0096EE;color:transparent;transition:transform .2s,background .2s}
        .mem-card.open,.mem-card.done{background:#f1f5f9;color:#0f172a;transform:rotateY(180deg)}
        .mem-card.done{background:#dcfce7;cursor:default}
        /* tic tac toe */
        .ttt{display:grid;grid-template-columns:repeat(3,90px);gap:8px;justify-content:center;margin:0 auto}
        .ttt button{width:90px;height:90px;font-size:2.4rem;font-weight:700;border-radius:12px;border:1px solid #cbd5e1;background:#f8fafc;cursor:pointer;font-family:inherit}
        .ttt button.x{color:#0096EE}.ttt button.o{color:#dc2626}
        .center{text-align:center}
    </style>
</head>

<body class="bg-background">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<main class="gm-wrap">
    <div class="gm-hero">
        <h1>DotOne Break Room</h1>
        <p>Take five. Pick a game and play right here in your browser.</p>
    </div>

    <div class="gm-tabs" role="tablist">
        <button class="gm-tab active" data-tab="memory">🧠 Memory Match</button>
        <button class="gm-tab" data-tab="hilo">🃏 Higher or Lower</button>
        <button class="gm-tab" data-tab="bj">♠️ Blackjack</button>
        <button class="gm-tab" data-tab="ttt">❌ Tic-Tac-Toe</button>
    </div>

    <!-- MEMORY -->
    <section class="gm-panel active" id="memory">
        <h2>Memory Match</h2>
        <p class="gm-sub">Flip two cards at a time and find all 8 pairs in as few moves as you can.</p>
        <div class="gm-bar">
            <span class="gm-stat">Moves: <span id="memMoves">0</span> · Pairs: <span id="memPairs">0</span>/8</span>
            <button class="gm-btn" id="memNew">New Game</button>
        </div>
        <div class="mem-grid" id="memGrid"></div>
        <p class="gm-msg center" id="memMsg"></p>
    </section>

    <!-- HIGHER OR LOWER -->
    <section class="gm-panel" id="hilo">
        <h2>Higher or Lower</h2>
        <p class="gm-sub">Guess whether the next card is higher or lower. Aces are high; a tie counts as a loss.</p>
        <div class="gm-bar">
            <span class="gm-stat">Streak: <span id="hlStreak">0</span> · Best: <span id="hlBest">0</span></span>
            <button class="gm-btn alt" id="hlNew">Restart</button>
        </div>
        <div class="hand" id="hlCards"></div>
        <div style="display:flex;gap:8px">
            <button class="gm-btn" id="hlHigher">▲ Higher</button>
            <button class="gm-btn" id="hlLower">▼ Lower</button>
        </div>
        <p class="gm-msg" id="hlMsg"></p>
    </section>

    <!-- BLACKJACK -->
    <section class="gm-panel" id="bj">
        <h2>Blackjack</h2>
        <p class="gm-sub">Get closer to 21 than the dealer without going over. Dealer stands on 17.</p>
        <div class="gm-bar">
            <span class="gm-stat">Wins: <span id="bjW">0</span> · Losses: <span id="bjL">0</span> · Pushes: <span id="bjP">0</span></span>
            <button class="gm-btn alt" id="bjDeal">Deal</button>
        </div>
        <div class="gm-stat">Dealer <span id="bjDScore"></span></div>
        <div class="hand" id="bjDealer"></div>
        <div class="gm-stat">You <span id="bjPScore"></span></div>
        <div class="hand" id="bjPlayer"></div>
        <div style="display:flex;gap:8px">
            <button class="gm-btn" id="bjHit" disabled>Hit</button>
            <button class="gm-btn" id="bjStand" disabled>Stand</button>
        </div>
        <p class="gm-msg" id="bjMsg">Press Deal to start.</p>
    </section>

    <!-- TIC TAC TOE -->
    <section class="gm-panel" id="ttt">
        <h2>Tic-Tac-Toe</h2>
        <p class="gm-sub">You are X. Beat the computer, if you can.</p>
        <div class="gm-bar">
            <span class="gm-stat">You: <span id="tW">0</span> · Computer: <span id="tL">0</span> · Draws: <span id="tD">0</span></span>
            <button class="gm-btn alt" id="tNew">New Round</button>
        </div>
        <div class="ttt" id="tBoard"></div>
        <p class="gm-msg center" id="tMsg"></p>
    </section>
</main>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

<script>
(function () {
    const $ = id => document.getElementById(id);
    const shuffle = a => { for (let i = a.length - 1; i > 0; i--) { const j = Math.floor(Math.random() * (i + 1)); [a[i], a[j]] = [a[j], a[i]]; } return a; };

    // Tabs
    document.querySelectorAll('.gm-tab').forEach(t => t.addEventListener('click', () => {
        document.querySelectorAll('.gm-tab').forEach(x => x.classList.toggle('active', x === t));
        document.querySelectorAll('.gm-panel').forEach(p => p.classList.toggle('active', p.id === t.dataset.tab));
    }));

    // Shared card deck
    const SUITS = ['♠', '♥', '♦', '♣'], RANKS = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];
    const newDeck = () => shuffle(SUITS.flatMap(s => RANKS.map((r, i) => ({ s, r, v: i + 2 }))));
    const cardEl = (c, hidden) => {
        const d = document.createElement('div');
        d.className = 'pc ' + (c.s === '♥' || c.s === '♦' ? 'red' : 'black') + (hidden ? ' back' : '');
        d.innerHTML = `<span>${c.r}${c.s}</span><span class="mid">${c.s}</span><span class="bot">${c.r}${c.s}</span>`;
        return d;
    };

    // ---------- Memory Match ----------
    const ICONS = ['🍎','🚀','🎧','⚽','🌵','🐙','🎲','💎'];
    let mOpen = [], mMoves = 0, mPairs = 0, mLock = false;
    function memNew() {
        const grid = $('memGrid'); grid.innerHTML = '';
        mOpen = []; mMoves = 0; mPairs = 0; mLock = false;
        $('memMoves').textContent = 0; $('memPairs').textContent = 0; $('memMsg').textContent = '';
        shuffle([...ICONS, ...ICONS]).forEach(icon => {
            const b = document.createElement('button');
            b.className = 'mem-card'; b.textContent = icon; b.dataset.icon = icon;
            b.addEventListener('click', () => memFlip(b));
            grid.appendChild(b);
        });
    }
    function memFlip(b) {
        if (mLock || b.classList.contains('open') || b.classList.contains('done')) return;
        b.classList.add('open'); mOpen.push(b);
        if (mOpen.length < 2) return;
        $('memMoves').textContent = ++mMoves;
        const [a, c] = mOpen;
        if (a.dataset.icon === c.dataset.icon) {
            a.classList.replace('open', 'done'); c.classList.replace('open', 'done'); mOpen = [];
            $('memPairs').textContent = ++mPairs;
            if (mPairs === 8) $('memMsg').textContent = `🎉 Solved in ${mMoves} moves!`;
        } else {
            mLock = true;
            setTimeout(() => { a.classList.remove('open'); c.classList.remove('open'); mOpen = []; mLock = false; }, 800);
        }
    }
    $('memNew').addEventListener('click', memNew);
    memNew();

    // ---------- Higher or Lower ----------
    let hlDeck, hlCur, hlStreak = 0, hlBest = 0, hlOver = false;
    function hlNew() {
        hlDeck = newDeck(); hlCur = hlDeck.pop(); hlStreak = 0; hlOver = false;
        $('hlStreak').textContent = 0; $('hlMsg').textContent = 'Higher or lower?';
        $('hlCards').innerHTML = ''; $('hlCards').appendChild(cardEl(hlCur));
        $('hlHigher').disabled = $('hlLower').disabled = false;
    }
    function hlGuess(higher) {
        if (hlOver) return;
        if (!hlDeck.length) hlDeck = newDeck();
        const next = hlDeck.pop();
        const box = $('hlCards'); box.appendChild(cardEl(next));
        while (box.children.length > 6) box.removeChild(box.firstChild);
        const right = higher ? next.v > hlCur.v : next.v < hlCur.v;
        hlCur = next;
        if (right) {
            $('hlStreak').textContent = ++hlStreak;
            if (hlStreak > hlBest) $('hlBest').textContent = hlBest = hlStreak;
            $('hlMsg').textContent = '✅ Correct! Keep going.';
        } else {
            hlOver = true; $('hlHigher').disabled = $('hlLower').disabled = true;
            $('hlMsg').textContent = `❌ Wrong! Final streak: ${hlStreak}. Press Restart.`;
        }
    }
    $('hlHigher').addEventListener('click', () => hlGuess(true));
    $('hlLower').addEventListener('click', () => hlGuess(false));
    $('hlNew').addEventListener('click', hlNew);
    hlNew();

    // ---------- Blackjack ----------
    let bjDeck, bjP, bjD, bjLive = false; const bjScore = { W: 0, L: 0, P: 0 };
    const bjVal = h => {
        let t = 0, aces = 0;
        h.forEach(c => { if (c.r === 'A') { aces++; t += 11; } else t += c.v > 10 ? 10 : c.v; });
        while (t > 21 && aces--) t -= 10;
        return t;
    };
    function bjRender(reveal) {
        $('bjPlayer').innerHTML = ''; bjP.forEach(c => $('bjPlayer').appendChild(cardEl(c)));
        $('bjDealer').innerHTML = ''; bjD.forEach((c, i) => $('bjDealer').appendChild(cardEl(c, !reveal && i === 1)));
        $('bjPScore').textContent = `(${bjVal(bjP)})`;
        $('bjDScore').textContent = reveal ? `(${bjVal(bjD)})` : '';
    }
    function bjEnd(result, msg) {
        bjLive = false; bjRender(true);
        $('bjHit').disabled = $('bjStand').disabled = true;
        bjScore[result]++; $('bj' + result).textContent = bjScore[result];
        $('bjMsg').textContent = msg + ' Press Deal to play again.';
    }
    function bjDeal() {
        if (!bjDeck || bjDeck.length < 15) bjDeck = newDeck();
        bjP = [bjDeck.pop(), bjDeck.pop()]; bjD = [bjDeck.pop(), bjDeck.pop()]; bjLive = true;
        $('bjHit').disabled = $('bjStand').disabled = false; $('bjMsg').textContent = 'Hit or stand?';
        bjRender(false);
        const p = bjVal(bjP), d = bjVal(bjD);
        if (p === 21 || d === 21) {
            if (p === d) bjEnd('P', 'Both have Blackjack. Push.');
            else if (p === 21) bjEnd('W', '🎉 Blackjack! You win.');
            else bjEnd('L', 'Dealer has Blackjack.');
        }
    }
    $('bjDeal').addEventListener('click', bjDeal);
    $('bjHit').addEventListener('click', () => {
        if (!bjLive) return;
        bjP.push(bjDeck.pop()); bjRender(false);
        const p = bjVal(bjP);
        if (p > 21) bjEnd('L', `💥 Bust with ${p}.`);
        else if (p === 21) $('bjStand').click();
    });
    $('bjStand').addEventListener('click', () => {
        if (!bjLive) return;
        while (bjVal(bjD) < 17) bjD.push(bjDeck.pop());
        const p = bjVal(bjP), d = bjVal(bjD);
        if (d > 21) bjEnd('W', `🎉 Dealer busts with ${d}. You win!`);
        else if (p > d) bjEnd('W', `🎉 You win, ${p} to ${d}!`);
        else if (p < d) bjEnd('L', `Dealer wins, ${d} to ${p}.`);
        else bjEnd('P', `Push at ${p}.`);
    });

    // ---------- Tic-Tac-Toe ----------
    const LINES = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]];
    let tB, tOver; const tScore = { W: 0, L: 0, D: 0 };
    const tWinner = b => { for (const [a, c, d] of LINES) if (b[a] && b[a] === b[c] && b[a] === b[d]) return b[a]; return b.every(Boolean) ? 'D' : null; };
    function tAI() {
        const empty = tB.map((v, i) => v ? null : i).filter(i => i !== null);
        const tryFor = mark => empty.find(i => { tB[i] = mark; const w = tWinner(tB) === mark; tB[i] = null; return w; });
        let m = tryFor('O'); if (m === undefined) m = tryFor('X');
        if (m === undefined && !tB[4]) m = 4;
        if (m === undefined) m = Math.random() < 0.85 ? ([0,2,6,8].filter(i => !tB[i])[0] ?? empty[0]) : empty[Math.floor(Math.random() * empty.length)];
        return m;
    }
    function tRender() {
        $('tBoard').querySelectorAll('button').forEach((b, i) => { b.textContent = tB[i] || ''; b.className = tB[i] ? tB[i].toLowerCase() : ''; });
    }
    function tFinish(w) {
        tOver = true;
        const key = w === 'X' ? 'W' : w === 'O' ? 'L' : 'D';
        tScore[key]++; $('t' + key).textContent = tScore[key];
        $('tMsg').textContent = w === 'X' ? '🎉 You win!' : w === 'O' ? 'Computer wins.' : "It's a draw.";
    }
    function tNew() {
        tB = Array(9).fill(null); tOver = false; $('tMsg').textContent = 'Your move.';
        const board = $('tBoard'); board.innerHTML = '';
        for (let i = 0; i < 9; i++) {
            const b = document.createElement('button');
            b.addEventListener('click', () => {
                if (tOver || tB[i]) return;
                tB[i] = 'X'; let w = tWinner(tB);
                if (!w) { tB[tAI()] = 'O'; w = tWinner(tB); }
                tRender(); if (w) tFinish(w);
            });
            board.appendChild(b);
        }
        tRender();
    }
    $('tNew').addEventListener('click', tNew);
    tNew();
})();
</script>
</body>
</html>
