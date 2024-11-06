[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/Easy-H2-Navigator.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/Easy-H2-Navigator/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/Easy-H2-Navigator.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/Easy-H2-Navigator/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/Easy-H2-Navigator.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/Easy-H2-Navigator/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/Easy-H2-Navigator.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/Easy-H2-Navigator/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]


# H2 Table of Contents Plugin

## Overview
The **H2 Table of Contents** plugin automatically generates a table of contents based on the `<h2>` tags on a page. The plugin enhances readability and allows users to quickly navigate between sections by clicking on the generated list items, which smoothly scroll to each `<h2>` header.

---

## Plugin Details
- **Plugin Name**: H2 Table of Contents
- **Version**: 1.0.0
- **Author**: hassan Ali Askari
- **Author URI**: [Telegram](https://t.me/hassan7303)
- **Plugin URI**: [GitHub](https://github.com/hassan7303)
- **License**: MIT
- **License URI**: [MIT License](https://opensource.org/licenses/MIT)
- **Email**: hassanali7303@gmail.com
- **Domain Path**: [hsnali.ir](https://hsnali.ir)

---

## Installation
1. Download the plugin or clone the repository from [GitHub](https://github.com/hassan7303).
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **Plugins** menu in WordPress.

---

## Features
- **Automatic Table of Contents**: The plugin scans for `<h2>` headers on single pages and creates a list of topics at the beginning of the content.
- **Smooth Scroll**: Each item in the table of contents scrolls smoothly to the respective `<h2>` section when clicked.
- **Icon Support**: Each list item is enhanced with a left-pointing arrow icon, giving the TOC a visual appeal.
- **Style Inheritance**: The table of contents inherits font weight and line height properties from the first `<h2>` element on the page.

---

## Code Breakdown
### Function: `h2_header_list_enqueue_scripts`
- **Purpose**: This function runs on single pages (`is_single()` check) and generates the table of contents.
- **Steps**:
  - Identifies all `<h2>` tags on the page.
  - Creates a `div` element to serve as a container for the TOC.
  - Adds list items (`<li>`) for each `<h2>` tag, setting up smooth scroll functionality on click.
  - Appends an icon (`fa-angle-double-left`) to each list item.

---

## Usage
After activation, navigate to any single post on your WordPress site that includes `<h2>` tags. A table of contents will appear at the top of the page.

---
