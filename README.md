[README.md](https://github.com/user-attachments/files/34576925/README.md)
# John Lloyd Aldaya | Portfolio

A personal portfolio website for an Information Technology student and freelancer. It is a single PHP page that renders every section (skills, certificates, websites, learning, interests, contact) from simple data arrays at the top of the file, so updating content never requires touching the HTML.

## Live Site

🌐 **[johnlloydaldaya.gt.tc](https://johnlloydaldaya.gt.tc)**

## Features

- **Data-driven content**: all text, images, and links live in PHP arrays at the top of `portfolio.php`
- **Sections**: Introduction, Skills, Certificates, Websites, Currently Learning, Interests & Activities, Contact
- **Light / dark theme toggle**: follows the visitor's system preference by default, and remembers their choice via `localStorage`
- **Responsive layout**: viewport meta tag plus a separate `style.css`
- **Video cards**: each interest has an embedded video (`preload="none"` so pages load fast)
- **Safe output**: every value is escaped with an `e()` helper (`htmlspecialchars`)
- **Click-to-call link**: the local `09XXXXXXXXX` phone number is automatically converted to `+639XXXXXXXXX` for the `tel:` link
- **Auto-updating footer year**

## Tech Stack

- PHP (templating only, no framework or database)
- HTML5
- CSS (`style.css`, Flexbox / Grid)
- Vanilla JavaScript (theme toggle)
- Google Fonts: Archivo and Newsreader

## Project Structure

```
.
├── portfolio.php      # Page template + site data
├── style.css          # Styles (required, linked from the page)
├── image/             # Thumbnails, certificates, portrait, icons
│   ├── hahaha.png     # Hero portrait
│   ├── fblogo.png     # Contact icon
│   ├── gmail.png      # Contact icon
│   └── ...            # Skill, cert, website, and interest images
└── videos/            # MP4 clips for the Interests section
    ├── valorant.mp4
    ├── getyou.mp4
    ├── adobo.mp4
    ├── interstellar.mp4
    └── basketball.mp4
```

## Requirements

- PHP 7.4 or newer (the page uses `<?= ?>` short echo tags, which are always available from PHP 5.4)
- Any web server that runs PHP (Apache, Nginx + PHP-FPM, XAMPP, Laragon, etc.), or PHP's built-in server for local use

## Running Locally

1. Put `portfolio.php`, `style.css`, and the `image/` and `videos/` folders in the same directory.
2. Start PHP's built-in server from that directory:

   ```bash
   php -S localhost:8000
   ```

3. Open <http://localhost:8000/portfolio.php>.

> Tip: rename `portfolio.php` to `index.php` if you want it to load at the site root without typing the filename.

## Running with XAMPP

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org) if you don't have it yet. Only the **Apache** module is needed (MySQL is not used).
2. **Copy the project into `htdocs`.** Create a folder for the site and put all the files inside it:

   | OS      | `htdocs` location               |
   |---------|---------------------------------|
   | Windows | `C:\xampp\htdocs\`              |
   | macOS   | `/Applications/XAMPP/htdocs/`   |
   | Linux   | `/opt/lampp/htdocs/`            |

   For example, on Windows:

   ```
   C:\xampp\htdocs\portfolio\
   ├── portfolio.php
   ├── style.css
   ├── image\
   └── videos\
   ```

3. **Start Apache.** Open the XAMPP Control Panel and click **Start** next to **Apache**. The module name turns green when it's running.
4. **Open the site** in your browser:

   ```
   http://localhost/portfolio/portfolio.php
   ```

   If you rename `portfolio.php` to `index.php`, you can just use `http://localhost/portfolio/`.

### XAMPP troubleshooting

- **Apache won't start / port 80 is in use**: another program (Skype, IIS, or another web server) is using the port. Either close that program, or in the Control Panel click **Config → httpd.conf** and change `Listen 80` to `Listen 8080`, then restart Apache and visit `http://localhost:8080/portfolio/portfolio.php`.
- **The page downloads or shows raw PHP code**: you opened the file directly (`file:///...`) instead of through `localhost`. PHP only runs when served by Apache.
- **404 Not Found**: check that the folder name in the URL matches the folder inside `htdocs`.
- **Images or videos don't show**: make sure the `image/` and `videos/` folders sit next to `portfolio.php`, and that the filenames match the ones in the data arrays.
- **Changes don't appear**: refresh with `Ctrl + F5` to bypass the browser cache.

## Customizing the Content

Everything editable is in the **"Site data"** block at the top of `portfolio.php`.

| Variable    | What it controls                                              |
|-------------|---------------------------------------------------------------|
| `$name`     | Name shown in the hero heading                                |
| `$full`     | Full name used in the contact link and footer                 |
| `$roles`    | Role labels shown under the name, joined with ` \| `          |
| `$email`    | Email address for the `mailto:` link                          |
| `$phone`    | Phone number in `09XXXXXXXXX` format                          |
| `$fb`       | Facebook profile URL                                          |
| `$intro`    | Introduction paragraph                                        |
| `$skills`   | Skill cards                                                   |
| `$certs`    | Certificate entries                                           |
| `$sites`    | Website projects (each has a `link`)                          |
| `$learning` | "Currently learning" cards                                    |
| `$likes`    | Interest cards (each has a `video`)                           |

### Adding an item

Add a new row to the relevant array. For example, a new skill:

```php
['img'=>'php.png','alt'=>'PHP','title'=>'PHP','text'=>'Building dynamic pages with PHP.'],
```

- `img` is a filename inside `image/`
- `video` (interests only) is a filename inside `videos/`
- `link` (websites only) is the URL opened by "Visit website" and by clicking the image

## Notes

- All three entries in `$sites` currently point to the same URL. Update each `link` to the correct project address.
- Two certificate entries share the title "Networking". Consider making the titles more specific (for example, "Networking Fundamentals" and "Network Cabling").
- Image paths are relative (`image/...`, `videos/...`). If an image fails to load, the hero portrait falls back to an empty state, but other images will show as broken, so check filenames and case sensitivity on Linux hosts.
- Videos must be MP4 files.

## Deployment

This portfolio is deployed at [johnlloydaldaya.gt.tc](https://johnlloydaldaya.gt.tc). To deploy your own copy, upload the files to any PHP-capable host, keeping the folder structure intact. Note that static-only hosts such as Netlify or GitHub Pages will **not** run PHP, so the page needs a PHP server (or you can save the rendered HTML output and host that instead).

## Author

**John Lloyd Acha Aldaya**: Student (IT Course) and Freelancer.

- Portfolio: [johnlloydaldaya.gt.tc](https://johnlloydaldaya.gt.tc)
- Other contact details are in the portfolio's Contact section.

## License

Personal portfolio. All content and media belong to the author. Add a license here if you plan to make the code reusable.
