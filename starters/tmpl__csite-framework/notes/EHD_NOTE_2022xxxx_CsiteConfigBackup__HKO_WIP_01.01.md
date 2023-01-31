<link rel="stylesheet" href="style.css">

# <span class="file site">WEBSITE ARCHITECTURE, SETUP, & CONFIG NOTES:</span>

| Site Creator: | Eric Hepperle                             |
| ------------- | ----------------------------------------- |
| Domain:       | **OrganicHarvest.min**                    |
| Client:       | SELF                                      |
| Staging:      | https://erichepperle.com/wp/ohm/20220828/ |
| Site Version: | **0.0.01**                                |
| ISP:          | 50Webs.com                                |

### Backup Info:

| Item:             | Value:                                              |
| ----------------- | --------------------------------------------------- |
| Backup Software:  | Duplicator Free (Ver N.N)                           |
| Backup Type:      | Two Part (database and files downloaded separately) |
| Site Backup Date: | ***2021-10-10***                                    |

### Archive Info:

| Item:         | Value:                                                                            |
| ------------- | --------------------------------------------------------------------------------- |
| Archive Name: | EHDSITE_20211010__EHW.zip                                                         |
| Site Title:   | **Organic Harvest Ministries**                                                    |
| Tagline:      | A Creative Professional Hungrily Pursues the Kingdom of God and His Righteousness |



**This File:** <span class="file icon">EHD_NOTE_20220203_CsiteConfigBackup__WIP_01.01.md</span>

--- 
### TAGS, KEYWORDS, TOPICS:

`Back-End Programming`, `God`, `Jesus`, `WordPress`, `Web Design`, `Prophecy`, `Marijuana`, `Felony`, `Supernatural`, `JavaScript`, `PHP`

---

## TABLE OF CONTENTS:

[toc]

### WEBSITE PURPOSE:

~~~
Organic Harvest Ministries main site. Will have favorite books page,
sermon notes, prophcies, prophetic words, word of faith teachings, etc.
~~~

## NOTES:

- Create WordPress quickly in 50Webs

WordPress Administration Panel
Website URL:
http://erichepperle.com/wp/ohm/20220828/
FTP Path:
/www/erichepperle.com/wp/ohm/20220828/
Installed:
2022-08-28 18:50:06.463604+00
Database Name / Username:
ehtech09_ei7
Admin URL:
http://erichepperle.com/wp/ohm/20220828/wp-login.php
Admin Email:
support@erichepperle.com
Admin Username:
ehtech09
Admin Password:
c0de.w1zard

---

- Update https://erichepperle.com/dir/ with ohm/20220828/ entry
- Add UnderConstruction plugin - Under Construction theme (free)
- Add Astra theme
- Add Elementor plugin
- Add Starter Templates plugin
- Add unlimited elements plugin
- Select template by clickin "See Library" > Mountain

---

### [Duplicator Backup and Restore steps](../tools/DuplicatorBkpRestore.md)







### FOLDER CONTENTS:

![image-20211108084837822](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108084837822.png)

| Name                                                  | Type   | Description                                                                                                                                                                                                                                                                                                                |
| ----------------------------------------------------- | ------ | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| _rest                                                 | Folder | All files and folders copied directly from website backend *except **wp-content** and **wp-config.php***.                                                                                                                                                                                                                  |
| wordpress-5.8.1                                       | Folder | WordPress version 5.8.1                                                                                                                                                                                                                                                                                                    |
| ehtech09_ehw7.sql                                     | File   | MySQL backup from Duplicator                                                                                                                                                                                                                                                                                               |
| google84c2...html                                     | File   | Proves to Google that you are the website owner; Used for Google SEO tracking                                                                                                                                                                                                                                              |
| wp-config.php                                         | File   | Modified for local backup; contains local password and user info                                                                                                                                                                                                                                                           |
| wp-content.zip                                        | File   | Zipped wp-content folder; Includes all images and downloadable files managed by WordPress, themes, plugins, etc.; This is the largest folder in a large website usually and it is what make it hard for Duplicator (free) to do a quick backup (*ostensibly Duplicator Pro will quickly backup websites larger than 2 GB*) |
| EH_CODE_20211010_Notes&Updates_EHW_V13.00_0511_WIP.md | File   | THIS MARKDOWN FILE (pdf file generated from markdown file)                                                                                                                                                                                                                                                                 |

### Folder Tree for: _rest

- Build with: https://tree.nathanfriend.io/

~~~
.
├── academic
├── extra
│   ├── docs
│   ├── img
│   │   └── wds
│   └── pages
├── portfolio.old
├── portfolio
│   └── pix
│       └── ehd
├── professional
├── projects
│   ├── display-animal-grid
│   ├── ehw-site-design-gallery
│   │   ├── images
│   │   └── js    
│   ├── reaper-search
│   └── skeleton-file-builder
└── tuts
    ├── alanstines
    ├── codingtrain
    ├── googledevs
    ├── headfirst
    │   └── php-mysql
    │       └── p203-make-me-elvis
    ├── learnwebcode
    │   └── json-ajax
    ├── stackoverflow
    └── traversy
        └── googleMapsAPI
~~~

## SITE BRIEF DESCRIPTION:

### Above Fold:

Various shades of spruce and mint green; Eric smiling wearing purple shirt; Clear top menu; Date provided; latest post scrolling vertical ticker; search bar; aliceblue buttons with software, design, and IT/tech role names (not clickable); Recent Blog Posts header (scroll down to see list); sidebar with email subscription, search, weather, and heading for popular topics (scroll down to see topics); the other colors are white and dark slate gray.

## LOOK & FEEL:

### Main Color Scheme

- **Dark Spruce Green:** \#2b9b9b	 <span style="background-color: #2b9b9b; min-height:1em;min-width: 1em; border: solid 1px #333;">     </span>
- **White Smoke:** #f5f5f5	 <span style="background-color: #f5f5f5; min-height:1em;min-width: 1em; border: solid 1px #333;">     </span>
- **Dark Slate Gray:** \#303440	 <span style="background-color: #303440; min-height:1em;min-width: 1em; border: solid 1px #333;">     </span>
- **Alice Blue:** \#f0f8ff	 <span style="background-color: #f0f8ff; min-height:1em;min-width: 1em;  border: solid 1px #333;">     </span>
- **Light Gray:** \#aaaaaa	 <span style="background-color: #aaaaaa; min-height:1em;min-width: 1em;  border: solid 1px #333;">     </span>
- **Medium Gray:** \#777777	 <span style="background-color: #777777; min-height:1em;min-width: 1em;  border: solid 1px #333;">     </span>

---

## MENUS:

### MAIN NAV MENU: TOP

HOME | ABOUT | BLOG | CONTACT | ERIC'S PROJECTS | Search Box |

| Page Name:      | Description      | Type |
| --------------- | ---------------- | ---- |
| Home            | Self Explanatory |      |
| About           |                  |      |
| Blog            | Self Explanatory |      |
| Contact         |                  |      |
| Eric's Projects |                  |      |

#### ABOUT:

##### Portfolio: https://erichepperle.com/portfolio/

- Portfolio is currently pointing to here:

![image-20211108044425310](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108044425310.png)

- Needs to point to a page or link

##### Privacy Policy: https://erichepperle.com/privacy-policy/

#### CONTACT:

![image-20211108044702691](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108044702691.png)

#### ERIC'S PROJECTS:

![image-20211108044755811](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108044755811.png)

##### [Submenu]:

![image-20211108040516390](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108040516390.png)

| Page Name                     | Description                                                                                                                                                                                        | Type          | Location                                                                                              |
| ----------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------- | ----------------------------------------------------------------------------------------------------- |
| **Freedom Signpost:**         | A collection of links and info for patriotic Americans and Holy Sprit-filled Christian believers; Links to Sid Roth, Victory Channel, Mr. Reagan, Robin D. Bullock, Amanda Grace, Clay Clark, etc. | Page link     | [freedom/](https://erichepperle.com/freedom/)                                                         |
| **Hepperle Manor:**           | An Oregon couple homesteading with 11 cats on 2.5 acres in south Alabama.                                                                                                                          | Category link | [category/hepperle-manor/](https://erichepperle.com/category/hepperle-manor/)                         |
| **Ministry:**                 | Christianity, Bible, Jesus, Yeshuah, Savior, Holy Spirit, God, Church Folk, etc.                                                                                                                   | Category link | [category/organic-harvest-ministries/](https://erichepperle.com/category/organic-harvest-ministries/) |
| **Prophecy:**                 | Bible-based prophecy and modern prophetic words from God.                                                                                                                                          | Category link | [category/prophecy/](https://erichepperle.com/category/prophecy/)                                     |
| **TAG Dropout:**              | My first memoir of my art and writings of childhood. Book website.                                                                                                                                 | Category link | [category/tag-dropout/](https://erichepperle.com/category/tag-dropout/)                               |
| **Automotive:**               | All posts dealing with auto repair, parts, performance, etc.                                                                                                                                       | Page link     | [automotive/](https://erichepperle.com/automotive/)                                                   |
| *Printer & Laptop Repair: \** | All posts covering printer repair, laptop repair, HP as a company, and my experience working as an HP field service technician.                                                                    |               |                                                                                                       |

** Doesn't exist yet; future improvements.*

##### Automotive:![image-20211108043409612](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108043409612.png)

## MAIN PAGES:

### FRONT PAGE: *[Home](https://erichepperle.com/)*

- https://erichepperle.com/

#### ABOVE FOLD Main:

![EHD_SITE_20211101_EHW_Theme_dup2pt20211012_Screenshot_01_Home_01](C:\Users\Eric\Downloads\EHD_SITE_20211101_EHW_Theme_dup2pt20211012_Screenshot_01_Home_01.png)

~~~
[HEADSHOT floated left]
Welcome to EricHepperle.com
Home of Eric Hepperle Designs (Geneva, Alabama).
Why Are You Here?
Hi. I’m Eric Hepperle and I’ve been an IT professional for over 10 years. You may have landed on this website by searching for any of the following:
~~~

##### Past Job Titles:

~~~
[Non-clickable buttons. Confusing because seems like you should be able to click. Purpose was for SEO and for potential employers to see my skillset up front.]
~~~

|                  |                   |                      |
| ---------------- | ----------------- | -------------------- |
| Graphic Designer | Desktop Publisher | Writer/Journalist    |
| Website Designer | Printer Repair    | WordPress Developer  |
| Web Developer    | Laptop Repair     | Remote Web Developer |
| IT Technician    | Graphic Design    | Front End Developer  |
| Computer Repair  | Software Engineer | Full Stack Developer |

#### BELOW FOLD Main:

##### Recent Blog Posts

~~~
[Top six posts of each category; WP Category plugin]
~~~

- Eric’s Graphic Designs
- Eric’s Published Writings
- WordPress Tutorials
- Programming Projects

##### Eric Photo for SEO

~~~
[Large heading says "Eric Hepperle, Geneva Graphic Design expert"]
[Large photo has caption:]
One of the best local graphic designers, Eric Hepperle is a multi-talented graphic artist, writer and actor. Here he is seen seen in a professional actor headshot taken by Todd Siechen Photography in 2016.
~~~

Photo uses [schema microdata](https://moz.com/learn/seo/schema-structured-data)  (also called *[structured data](https://neilpatel.com/blog/get-started-using-schema/)* ) from Schema.org somehow. Connects to [this website](https://erichepperleal.files.wordpress.com/) setup by schema expert and acquaintance of mine.

---

### BLOG PAGE: *Blog*

---

### SHOP PAGE: N/A

## SIDEBAR DETAILS:

#### ABOVE FOLD Sidebar:

- Location: Right

##### Newsletter Subscribe Form: MailChimp

~~~
Subscribe to get our blog updates in your email!
* indicates required
Email Address *
First Name
Last Name
~~~

##### Site Search Bar

##### Weather Widget: AccuWeather (via API)

#### BELOW FOLD Sidebar:

##### Popular Topics | Recent Posts | Recent Comments | Calendar | Tags | Archives | Categories

![image-20211108045621686](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108045621686.png)![image-20211108045751388](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108045751388.png)![image-20211108045802744](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108045802744.png)

![image-20211108045909928](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108045909928.png)![image-20211108050020005](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108050020005.png)![image-20211108050138967](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108050138967.png)

## FOOTER:

![image-20211108050330201](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211108050330201.png)

- Copyright; Privacy Policy link; search box; ORCID link; return to top arrow

## SCREENSHOTS:

### DESKTOP:

#### 1290 x 853

![EHD_SITE_20211101_EHW_Theme_dup2pt20211012_Screenshot_01_Home_01](C:\Users\Eric\Downloads\EHD_SITE_20211101_EHW_Theme_dup2pt20211012_Screenshot_01_Home_01.png)

#### 1920 x 975

![EHD_SITE_20211101_EHW_01_Home_(1920X975)](C:\Users\Eric\Downloads\EHD_SITE_20211101_EHW_01_Home_(1920X975).jpg)

### MOBILE:

#### Mobile portrait (320x480)

- Note: *From **Web Developer** Chrome extension*

![image-20211107060215521](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211107060215521.png)

#### Mobile landscape (480x320)

- Note: *From **Web Developer** Chrome extension*

![image-20211107060353064](C:\Users\Eric\AppData\Roaming\Typora\typora-user-images\image-20211107060353064.png)

## USERS:

| Username                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Name          | Email                                                                                                         | Role          | Posts                                                                           | 2FA Status  | Last Login               |
| :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------- | ------------------------------------------------------------------------------------------------------------- | ------------- | ------------------------------------------------------------------------------- | ----------- | ------------------------ |
| ![img](https://secure.gravatar.com/avatar/81abb2192a0e323a275e34a918b2a7ee?s=32&d=monsterid&r=g)**[EH-EXPORTER](https://erichepperle.com/wp-admin/user-edit.php?user_id=7&wp_http_referer=%2Fwp-admin%2Fusers.php)** [Edit](https://erichepperle.com/wp-admin/user-edit.php?user_id=7&wp_http_referer=%2Fwp-admin%2Fusers.php) \| [Delete](https://erichepperle.com/wp-admin/users.php?action=delete&user=7&_wpnonce=1643f1f447) \| [View](https://erichepperle.com/author/eh-exporter/) \| [Send password reset](https://erichepperle.com/wp-admin/users.php?action=resetpassword&users=7&_wpnonce=1643f1f447) | EH Exporter   | [ehepp.devmail+erichepperle.com-exporter@gmail.com](mailto:ehepp.devmail+erichepperle.com-exporter@gmail.com) | Author        | 0                                                                               | Not Allowed | -                        |
| ![img](https://secure.gravatar.com/avatar/69bb8b724fd38a2e9c7c4e1ed7924331?s=32&d=monsterid&r=g)**[ericlhepperle](https://erichepperle.com/wp-admin/profile.php?wp_http_referer=%2Fwp-admin%2Fusers.php)** [Edit](https://erichepperle.com/wp-admin/profile.php?wp_http_referer=%2Fwp-admin%2Fusers.php) \| [View](https://erichepperle.com/author/ericlhepperle/) \| [2FA](https://erichepperle.com/wp-admin/admin.php?page=WFLS&user=8)                                                                                                                                                                       | Eric Hepperle | [erichepperle@erichepperle.com](mailto:erichepperle@erichepperle.com)                                         | Administrator | [332 posts by this author](https://erichepperle.com/wp-admin/edit.php?author=8) | Inactive    | November 7, 2021 4:57 AM |

## META TAGS:

- Generated by ***Web Developer*** Chrome extension.

| Meta Tag Name         | Content                                                                                                                                                                                                                                                                                                                                                         |
| :-------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| article:modified_time | 2021-04-19T19:15:02+00:00                                                                                                                                                                                                                                                                                                                                       |
| charset               | UTF-8                                                                                                                                                                                                                                                                                                                                                           |
| description           | Eric Hepperle Geneva Web Design serving the Geneva County, Alabama area helping local businesses gain exposure and growth for nearly 2 years. Need a WordPress eCommerce store or blog? Contact us today for the best prices in Alabama!                                                                                                                        |
| fb:admins             | 100001072022579                                                                                                                                                                                                                                                                                                                                                 |
| generator             | WordPress 5.8.1                                                                                                                                                                                                                                                                                                                                                 |
| og:description        | Eric Hepperle Geneva Web Design serving the Geneva County, Alabama area helping local businesses gain exposure and growth for nearly 2 years. Need a WordPress eCommerce store or blog? Contact us today for the best prices in Alabama!                                                                                                                        |
| og:description        | Welcome to EricHepperle.com Home of Eric Hepperle Designs (Geneva, Alabama). Why Are You Here? Hi. I’m Eric Hepperle and I’ve been an IT professional for over 10 years. You may have landed on this website by searching for any of the following: Graphic Designer Website Designer Web Developer IT Technician Computer Repair Desktop Publisher Printer […] |
| og:image              | https://erichepperle.com/wp-content/uploads/2018/01/EH_DESIGN_2018.01.23_Logo_EricHepperle.com_02_300px.png                                                                                                                                                                                                                                                     |
| og:image              | https://erichepperle.com/wp-content/uploads/2018/08/eric-hepperle-executive-director-geneva-chamber-of-commerce-300x300.jpg                                                                                                                                                                                                                                     |
| og:locale             | en_US                                                                                                                                                                                                                                                                                                                                                           |
| og:site_name          | EricHepperle.com                                                                                                                                                                                                                                                                                                                                                |
| og:title              | Eric Hepperle Geneva Web Design \| EricHepperle.com                                                                                                                                                                                                                                                                                                             |
| og:title              | Homepage                                                                                                                                                                                                                                                                                                                                                        |
| og:type               | article                                                                                                                                                                                                                                                                                                                                                         |
| og:type               | website                                                                                                                                                                                                                                                                                                                                                         |
| og:url                | https://erichepperle.com/                                                                                                                                                                                                                                                                                                                                       |
| og:url                | https://erichepperle.com/                                                                                                                                                                                                                                                                                                                                       |
| robots                | index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1                                                                                                                                                                                                                                                                                    |
| twitter:card          | summary                                                                                                                                                                                                                                                                                                                                                         |
| twitter:data1         | 1 minute                                                                                                                                                                                                                                                                                                                                                        |
| twitter:label1        | Est. reading time                                                                                                                                                                                                                                                                                                                                               |
| twitter:site          | @rawlifewizard                                                                                                                                                                                                                                                                                                                                                  |
| viewport              | width=device-width, initial-scale=1                                                                                                                                                                                                                                                                                                                             |

### BACKEND: Extensions, Plugins, Etc.

#### WordPress Theme Detector and Plugins Detector results:

[![Alt description](https://erichepperle.com/wp-content/themes/newspaper-lite/screenshot.png)](https://themecentury.com/downloads/newspaper-lite-free-wordpress-theme/)

[Newspaper Lite](https://themecentury.com/downloads/newspaper-lite-free-wordpress-theme/)

**by** [themecentury](https://themecentury.com/)

**Theme Version:**

1.0.7

**WP Version:**

5.8.1

**IP:**

162.210.96.123

**Location:**

United States

**Hosted by:** [Steadfast](https://www.steadfast.net/)

Newspaper Lite is a responsive news portal style Free WordPress theme and this theme is mainly applicable for online magazines, newspaper, publishing, personal blogs and any kind of news sites. Widget base home page, multiple widget area, header layout, footer layout, Multiple layout of widget and many more. Please check demo on https://demo.themecentury.com/wpthemes/newspaper-lite/ and check https://docs.themecentury.com/products/newspaper-lite/ for docs.

Detected Plugins:

| Plugin Name                                                                                                                        | Description                                                                                                                                                                                                                                                                              | Image                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| [Contact Form 7](http://wordpress.org/plugins/contact-form-7/)                                                                     | Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup. The form supports Ajax-powered submitting, CAPTCHA, Akismet spam filtering and so on.                                                               | ![img](https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427)                   |
| [Enlighter – Customizable Syntax Highlighter](http://wordpress.org/plugins/enlighter/)                                             | Enlighter is a free, easy-to-use, syntax highlighting tool for WordPress. Highlighting is powered by the EnlighterJS javascript library to provide a beautiful code-appearance.                                                                                                          | ![img](https://ps.w.org/enlighter/assets/banner-772x250.png?rev=1396006)                       |
| [EU Cookie Law for GDPR/CCPA](http://wordpress.org/plugins/eu-cookie-law/)                                                         | EU Cookie Law is a light, elegant and powerful solution to comply with European cookie law, GDPR and CCPA, with popup and options to lock scripts before acceptance.                                                                                                                     | ![img](https://ps.w.org/eu-cookie-law/assets/banner-772x250.jpg?rev=1200969)                   |
| [Google Analytics Dashboard Plugin for WordPress by MonsterInsights](http://wordpress.org/plugins/google-analytics-for-wordpress/) | We believe that it’s easy to double your traffic and sales when you know exactly how people find and use your website. MonsterInsights shows you the stats that matter, so you can grow your business with confidence.                                                                   | [![img](https://ps.w.org/google-analytics-for-wordpress/assets/banner-772x250.png?rev=2159532) |
| [Photo Gallery by 10Web – Mobile-Friendly Image Gallery](http://wordpress.org/plugins/photo-gallery/)                              | Photo Gallery is the leading plugin for building beautiful mobile-friendly galleries in a few minutes.                                                                                                                                                                                   | ![img](https://ps.w.org/photo-gallery/assets/banner-772x250.png?rev=2068745)                   |
| [Orbit Fox by ThemeIsle](http://wordpress.org/plugins/themeisle-companion/)                                                        | Extend your theme functionality with Orbit Fox with various modules like Social Media Share Buttons & Icons, Uptime Monitoring, Google Analytics, custom menu-icons, one click import page templates, page builder addons and free stock featured images.                                | ![img](https://ps.w.org/themeisle-companion/assets/banner-772x250.png?rev=2237655)             |
| [Comments – wpDiscuz](http://wordpress.org/plugins/wpdiscuz/)                                                                      | AJAX realtime comment system with custom comment form and fields. Designed to supercharge WordPress native comments. Super fast and responsive with dozens of features. This is the best alternative to Disqus and Jetpack Comments, if you want to keep your comments in your database. | ![img](https://ps.w.org/wpdiscuz/assets/banner-772x250.png?rev=1767022)                        |

#### Plugins List From WordPress Dashboard:

| Plugin Name                                       | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| :------------------------------------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Akismet Anti-Spam                                 | Used by millions, Akismet is quite possibly the best way in the world to **protect your blog from spam**. Your site is fully configured and being protected, even while you sleep.Version 4.2.1 \| By [Automattic](https://automattic.com/wordpress-plugins/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=akismet&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| Century ToolKit                                   | Century ToolKit is specially developed for themecentury themes. This plugin help to import demo content and related settings.Version 1.2.1 \| By [themecentury](https://themecentury.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=century-toolkit&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| Classic Editor                                    | Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.Version 1.6.2 \| By [WordPress Contributors](https://github.com/WordPress/classic-editor/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=classic-editor&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| Classic Widgets                                   | Enables the classic widgets settings screens in Appearance - Widgets and the Customizer. Disables the block editor from managing widgets.Version 0.2 \| By [WordPress Contributors](https://github.com/WordPress/classic-widgets/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=classic-widgets&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| Configurable Tag Cloud                            | A tag cloud plugin for WordPress to give you more flexibility with the styling of your tag cloud.Version 5.2 \| By [Keith Solomon](http://keithsolomon.net/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=configurable-tag-cloud-widget&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| Contact Form 7                                    | Just another contact form plugin. Simple but flexible.Version 5.5.1 \| By [Takayuki Miyoshi](https://ideasilo.wordpress.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=contact-form-7&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| Duplicator                                        | Migrate and backup a copy of your WordPress files and database. Duplicate and move a site from one location to another quickly.Version 1.4.3 \| By [Snap Creek](http://www.snapcreek.com/duplicator/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=duplicator&TB_iframe=true&width=600&height=550) \| [Manage](https://erichepperle.com/wp-admin/admin.php?page=duplicator)                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| Enlighter - Customizable Syntax Highlighter       | all-in-one syntax highlighting solutionVersion 4.4.2 \| By [Andi Dittrich](https://andidittrich.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=enlighter&TB_iframe=true&width=600&height=550) \| [News & Updates](https://twitter.com/andidittrich) \| [Report Bugs](https://github.com/EnlighterJS/Plugin.WordPress/issues) \| [EnlighterJS Website](https://enlighterjs.org/)                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| EU Cookie Law                                     | EU Cookie Law informs users that your site uses cookies, with option to lock scripts before consent. Light + Customizable style.Version 3.1.6 \| By [Alex Moss, Marco Milesi](https://wordpress.org/plugins/eu-cookie-law/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=eu-cookie-law&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| Google Analytics for WordPress by MonsterInsights | The best Google Analytics plugin for WordPress. See how visitors find and use your website, so you can keep them coming back.Version 8.1.0 \| By [MonsterInsights](https://www.monsterinsights.com/?utm_source=liteplugin&utm_medium=pluginheader&utm_campaign=authoruri&utm_content=7.0.0) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=google-analytics-for-wordpress&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| Google XML Sitemaps                               | This plugin improves SEO using sitemaps for best indexation by search engines like Google, Bing, Yahoo and others.Version 4.1.1 \| By [Auctollo](http://www.arnebrachhold.de/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=google-sitemap-generator&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| List category posts                               | List Category Posts allows you to list posts by category in a post/page using the [catlist] shortcode. This shortcode accepts a category name or id, the order in which you want the posts to display, the number of posts to display and many more parameters. You can use [catlist] as many times as needed with different arguments. Usage: [catlist argument1=value1 argument2=value2].Version 0.85.1 \| By [Fernando Briano](http://fernandobriano.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=list-category-posts&TB_iframe=true&width=600&height=550) \| [How to use](http://wordpress.org/extend/plugins/list-category-posts/other_notes/) \| [Donate](http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/#support) \| [Fork on Github](https://github.com/picandocodigo/List-Category-Posts) |
| Orbit Fox Companion                               | This swiss-knife plugin comes with a quality template library, menu/sharing icons modules, Gutenberg blocks, and newly added Elementor/BeaverBuilder page builder widgets on each release.Version 2.10.8 \| By [Themeisle](https://orbitfox.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=themeisle-companion&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| Page Visit Counter                                | This plugin will count the total visits of the pages of your site.Version 6.0.8 \| By [theDotstore](https://www.thedotstore.com/) \| [Visit plugin site](https://www.thedotstore.com/page-visit-counter/)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| Photo Gallery                                     | This plugin is a fully responsive gallery plugin with advanced functionality. It allows having different image galleries for your posts and pages. You can create unlimited number of galleries, combine them into albums, and provide descriptions and tags.Version 1.5.84 \| By [Photo Gallery Team](https://10web.io/plugins/?utm_source=photo_gallery&utm_medium=free_plugin) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=photo-gallery&TB_iframe=true&width=600&height=550) \| [Ask a question](https://wordpress.org/support/plugin/photo-gallery/#new-post) \|                                                                                                                                                                                                                                                                                 |
| Really Simple SSL                                 | Lightweight plugin without any setup to make your site SSL proofVersion 5.1.2 \| By [Really Simple Plugins](https://really-simple-plugins.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=really-simple-ssl&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| Shareaholic - Grow and Engage Your Audience       | Shareaholic’s official WordPress plugin allows you to add Award-Winning Social Share Buttons, Related Posts, Content Analytics, Ad Monetization, and more to your website.Version 9.7.1 \| By [Shareaholic](https://www.shareaholic.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=shareaholic&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| Widget Logic                                      | Control widgets with WP's conditional tags is_home etcVersion 5.10.4 \| By [WPChef](https://wpchef.org/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=widget-logic&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| Wordfence Security                                | Wordfence Security - Anti-virus, Firewall and Malware ScanVersion 7.5.6 \| By [Wordfence](http://www.wordfence.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=wordfence&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| WP-Optimize - Clean, Compress, Cache              | WP-Optimize makes your site fast and efficient. It cleans the database, compresses images and caches pages. Fast sites attract more traffic and users.Version 3.1.12 \| By [David Anderson, Ruhani Rabin, Team Updraft](https://updraftplus.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=wp-optimize&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| wpDiscuz                                          | #1 WordPress Comment Plugin. Innovative, modern and feature-rich comment system to supercharge your website comment section.Version 7.3.4 \| By [gVectors Team](https://gvectors.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=wpdiscuz&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| WPForms Lite                                      | Beginner friendly WordPress contact form plugin. Use our Drag & Drop form builder to create your WordPress forms.Version 1.7.0 \| By [WPForms](https://wpforms.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=wpforms-lite&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| Yoast Duplicate Post                              | The go-to tool for cloning posts and pages, including the powerful Rewrite & Republish feature.Version 4.1.2 \| By [Enrico Battocchi & Team Yoast](https://yoast.com/) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=duplicate-post&TB_iframe=true&width=600&height=550) \| [Documentation](https://yoast.com/wordpress/plugins/duplicate-post)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| Yoast SEO                                         | The first true all-in-one SEO solution for WordPress, including on-page content analysis, XML sitemaps and much more.Version 17.4 \| By [Team Yoast](https://yoa.st/1uk) \| [View details](https://erichepperle.com/wp-admin/plugin-install.php?tab=plugin-information&plugin=wordpress-seo&TB_iframe=true&width=600&height=550)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

## Other Info: 

| Original Date Published: | 2021-11-08 |     |
| ------------------------ | ---------- | --- |

#### Robots.txt:

~~~
User-agent: *
Disallow: /wp-admin/
Disallow: /in-progress/
Disallow: /_old/
Disallow: /portfolio/academic/hands-on-practice/
Allow: /wp-admin/admin-ajax.php
~~~

#### Favicon:

<section style="align-items: left;"><img src="C:\!ehw\EHDSITE_20211010_50Webs_EHW\_rest\favicon.ico" style=""/></section>

#### .htaccess:

~~~xml
# This file was updated by Duplicator on 2018-01-09 13:05:04. See .htaccess.orig for the original .htaccess file.
# Please note that other plugins and resources write to this file. If the time-stamp above is different
# than the current time-stamp on the file system then another resource has updated this file.
# Duplicator only writes to this file once during the install process while running the installer.php file.
# BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress
# BEGIN WP-Optimize Gzip compression
<IfModule mod_filter.c>
	<IfModule mod_deflate.c>
# Compress HTML, CSS, JavaScript, Text, XML and fonts
		AddType application/vnd.ms-fontobject .eot
		AddType font/ttf .ttf
		AddType font/otf .otf
		AddType font/x-woff .woff
		AddType image/svg+xml .svg
		
		AddOutputFilterByType DEFLATE application/javascript
		AddOutputFilterByType DEFLATE application/rss+xml
		AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
		AddOutputFilterByType DEFLATE application/x-font
		AddOutputFilterByType DEFLATE application/x-font-opentype
		AddOutputFilterByType DEFLATE application/x-font-otf
		AddOutputFilterByType DEFLATE application/x-font-truetype
		AddOutputFilterByType DEFLATE application/x-font-ttf
		AddOutputFilterByType DEFLATE application/x-font-woff
		AddOutputFilterByType DEFLATE application/x-javascript
		AddOutputFilterByType DEFLATE application/xhtml+xml
		AddOutputFilterByType DEFLATE application/xml
		AddOutputFilterByType DEFLATE font/opentype
		AddOutputFilterByType DEFLATE font/otf
		AddOutputFilterByType DEFLATE font/ttf
		AddOutputFilterByType DEFLATE font/woff
		AddOutputFilterByType DEFLATE image/svg+xml
		AddOutputFilterByType DEFLATE image/x-icon
		AddOutputFilterByType DEFLATE text/css
		AddOutputFilterByType DEFLATE text/html
		AddOutputFilterByType DEFLATE text/javascript
		AddOutputFilterByType DEFLATE text/plain
		AddOutputFilterByType DEFLATE text/xml
		
# Remove browser bugs (only needed for really old browsers)
		BrowserMatch ^Mozilla/4 gzip-only-text/html
		BrowserMatch ^Mozilla/4\.0[678] no-gzip
		BrowserMatch \bMSIE !no-gzip !gzip-only-text/html
		Header append Vary User-Agent
	</IfModule>
</IfModule>
# END WP-Optimize Gzip compression
~~~

#### httpd-vhosts.conf

~~~xml
# Virtual Hosts
#

<VirtualHost *:80>
	ServerName localhost
	DocumentRoot c:/wamp64/www
	<Directory  "c:/wamp64/www/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

#
# <VirtualHost *:80>
	# ServerName humescores.test
	# DocumentRoot "C:/wamp64/www/tuts/lyndalinkedin/wp"
	# <Directory  "C:/wamp64/www/tuts/lyndalinkedin/wp">
		# Options +Indexes +Includes +FollowSymLinks +MultiViews
		# AllowOverride All
		# Require local
	# </Directory>
# </VirtualHost>

#
# <VirtualHost *:80>
	# ServerName sealworks-20190328.ehw
	# DocumentRoot "c:/wamp64/www/in-progress/sealworks/20190328"
	# <Directory  "c:/wamp64/www/in-progress/sealworks/20190328/">
		# Options +Indexes +Includes +FollowSymLinks +MultiViews
		# AllowOverride All
		# Require local
	# </Directory>
# </VirtualHost>

#
# <VirtualHost *:80>
	# ServerName nayarwp.local
	# DocumentRoot "c:/wamp64/www/tuts/nayyar-shaikh/1"
	# <Directory  "c:/wamp64/www/tuts/nayyar-shaikh/1/">
		# Options +Indexes +Includes +FollowSymLinks +MultiViews
		# AllowOverride All
		# Require local
	# </Directory>
# </VirtualHost>

#
<VirtualHost *:80>
	ServerName hepperlepedia2
	DocumentRoot "c:/wamp64/www/hepperlepedia2"
	<Directory  "c:/wamp64/www/hepperlepedia2/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

#
<VirtualHost *:80>
	ServerName tutorials
	DocumentRoot "c:/wamp64/www/tuts"
	<Directory  "c:/wamp64/www/tuts/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

#
<VirtualHost *:80>
	ServerName ehw-20211012
	DocumentRoot "c:/wamp64/www/in-progress/ehw/dup-2pt-20211012"
	<Directory  "c:/wamp64/www/in-progress/ehw/dup-2pt-20211012/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

#
<VirtualHost *:80>
	ServerName ehw-dir
	DocumentRoot "c:/wamp64/www/ehw_dir"
	<Directory  "c:/wamp64/www/ehw_dir/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
~~~



## TOOLS USAGE:

### Snap Creek Duplicator Plugin 2-Part Install:

[Reload](https://snapcreek.com/duplicator/docs/quick-start/?1636380531396#quick-060-q)

The following procedure was developed for use tightly restricted hosts that prevent a zip archive from getting created. Note that this operation is valid for both Duplicator and Duplicator Pro but is usually not needed in Pro due to its support of the "DupArchive" format. DupArchive was specifically designed to get around limitations imposed by hosts related to zip.

#### PART 1: Manually copy WordPress files

These steps show how to manually copy from source site to destination.

**cPanel (Faster)**

1. Login to the source site's cPanel, click "File Manager" and enter the site's directory*
2. Select all files, right click, select "Compress", choose zip and set name to mysite.zip.
3. Download mysite.zip to your local computer
4. Upload mysite.zip to the new location*
5. [Extract mysite.zip](https://www.youtube.com/watch?v=iOFbAyp1s4U) and remove the mysite.zip file

**FTP**

1. Login to an [FTP Client](https://codex.wordpress.org/FTP_Clients)
2. Copy the files from the source site to your computer*
3. Copy files from your computer up to the destination site*

*Website directories will likely be public_html, or public_html/sitename. If unsure about where site files are located talk to your host support.

#### PART 2: Copy the database with Duplicator

After you have all the files uploaded correctly to your new location you will then run all these steps to copy over the database.

**1. Create New DB Only Package**

1. Goto Duplicator ❯ Packages ❯ click "Create New" button
2. On Step 1 Setup ❯ Archive ❯ check "Archive Only the Database"
3. Build package then download installer and archive files

**2. Transfer installer and archive to target location**

1. Login to target location via FTP, cPanel or your host's control panel tools.
2. Transfer installer and archive to target location
3. If a wp-config.php file exists in this location remove or rename it.
4. Open web browser and browse to http://yoursite.com/installer.php

**3. Run Installer**

1. Installer should have 'Database Only Mode' in upper right corner.

2. On Step 1 ❯ Click the next button

3. On Step 2 ❯ Enter database setup info ❯ test connection ❯ click next

   For the database setup enter in information on an empty database. You can easily [create a new one](https://www.youtube.com/watch?v=CHwxXGPnw48) or simply contact your hosting provider to have them set it up for you and have them give you the setup info. Some hosting providers have specific instructions for connecting to their databases, so be sure ask them what to use.

4. On Step 3 ❯ Click the next button

5. On Step 4 ❯ Login remove installer files

6. Only the database will be updated

After all steps are complete your site should be fully migrated. These two parts together allow you to move your WordPress site in a two stage process.

> Also see:
>  [Recommended hosting providers for Duplicator?](https://snapcreek.com/wordpress-hosting/)

[Source:](javascript:void(0)) 