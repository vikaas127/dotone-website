# DotOne Playbook & Tracker on Hostinger (PHP)

Works on any Hostinger plan with PHP 7.4 or newer (Premium, Business, Cloud, or VPS with a panel). No database needed. All team members sign in and see the same Tracker projects.

## Files
- `index.php` sign-in page, then shows the playbook
- `api.php` saves and loads Tracker projects
- `dotone-sync.js` connects the Tracker to `api.php` (added to the page automatically)
- `config.php` team names and passwords. EDIT THIS.
- `common.php` shared code, do not edit
- `.htaccess` keeps private files private and forces HTTPS
- `data/` stores projects, daily backups and logins. Never delete it.
- `playbook.html` YOUR playbook file goes here (step 3)

## Setup (10 to 15 minutes)

1. **Create a subdomain.** hPanel > Domains > Subdomains > create `playbook` (gives playbook.yourdomain). Note the folder it creates, for example `public_html/playbook`.
2. **Turn on SSL.** hPanel > Security > SSL > install the free SSL for the subdomain. Wait until it shows Active.
3. **Upload.** hPanel > File Manager > open the subdomain folder > Upload the zip > right-click > Extract. Move the files out of the `dotone-playbook-php` folder so `index.php` sits directly in the subdomain folder. Then upload your playbook HTML file into the same folder and rename it to exactly `playbook.html`.
   Delete any `index.html` or `default.php` Hostinger put in that folder.
4. **Set passwords.** In File Manager, right-click `config.php` > Edit. Replace the sample names and passwords with your team's. Names are typed in lowercase at sign-in. Save.
5. **Open** https://playbook.yourdomain, sign in, go to Tracker. The line under the project list must say **"Shared with your team, saves automatically."**

If File Manager does not show `.htaccess` after extracting, turn on "Show hidden files" in File Manager settings. It must be there.

## Everyday use
- **Add or remove a person:** edit `config.php`. A removed person is signed out at once.
- **Sign out:** open https://playbook.yourdomain/?logout=1
- **Update playbook content:** upload the new file as `playbook.html` (replace). Tracker data is not touched.
- **Backups:** `data/backups/` keeps one copy per day for 30 days. Download `data/projects.php` now and then for an off-server copy.
- **Restore a backup:** copy a file from `data/backups/` over `data/projects.php` (same content format, just rename).

## Troubleshooting
- **Shows "Saved on this device only":** `dotone-sync.js` or `api.php` is missing from the folder, or the page was opened as a file.
- **"Cannot write to the data folder":** in File Manager set permissions of `data` to 755.
- **Sign-in page keeps coming back after signing in:** the browser blocked the cookie. Make sure you open the https:// address, not http://.
- **"Too many wrong passwords":** 10 wrong tries locks that internet connection for 15 minutes.

## Good to know
- Teammates' changes appear within about 4 seconds without reloading.
- If two people edit the same client project within the same few seconds, the later save wins for that project. Different projects never affect each other.
- Each project records who saved it last (`updatedBy`).
- People stay signed in for 30 days (change in `config.php`).
