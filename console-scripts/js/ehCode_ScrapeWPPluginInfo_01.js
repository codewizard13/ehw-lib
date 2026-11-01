/* ==========================================================================
    Program Name:   WordPress Plugin Info Grabber (Vanilla JS)
    File Name:      ehCode_ScrapeWPPluginInfo_01.js
    Snippet Type:   Browser-console snippet

    Programmer:     Eric Hepperle
    Date Created:   2026-11-01
    Date Modified:  --

    Version:        1.00

    Status:         Full Working - 11/01/26

    Known Issues:   Depends on the WordPress Plugins page markup; assigned
                    variables are not declared.

    Purpose:
    Scrapes active and inactive plugin names and version/author details
    from the WordPress Plugins page and prints them to the browser console.

    Usage:
    Cut and paste into the browser's developer console (F12) while viewing
    the WordPress admin Plugins page. Outputs active and inactive plugins
    as plugin-name and version/author-detail pairs.

    Sample Results:

        ********* DISABLED WP PLUGINS **************
        Plugin Name | Version details
        WPForms Lite | Version 2.0.3.1 | By WPForms | View details 
        Yoast SEO | Version 28.8 | By Team Yoast | View details
        ...
        ********* ACTIVE WP PLUGINS **************
        Better Search Replace | Version 1.4.11 | By WP Engine | View details
        Classic Editor | Version 1.7.0 | By WordPress Contributors | View details 
        Duplicator | Version 5.1.0 | By Duplicator | View details | Help         
        ...

    Requires:
        * A browser tab open to the WordPress admin Plugins page.
        * Browser support for optional chaining and nullish coalescing.

    Demonstrates:
        * Vanilla JavaScript
        * DOM selection and iteration
        * Optional chaining and nullish coalescing
        * WordPress plugin-list markup
   ========================================================================== */

rows_inactive = document.querySelectorAll('#the-list > tr.inactive');

console.log('********* DISABLED WP PLUGINS **************')

rows_inactive.forEach((row) => {

    pluginTitle = row.querySelector('th.plugin-title > strong')?.innerText ?? ''
    pluginVer = row.querySelector('.plugin-version-author-uri')?.innerText ?? ''
    console.log(`${pluginTitle} | ${pluginVer} `)
    
})

rows_active = document.querySelectorAll('#the-list > tr.active');

console.log('********* ACTIVE WP PLUGINS **************')

rows_active.forEach((row) => {

    pluginTitle = row.querySelector('th.plugin-title > strong')?.innerText ?? ''
    pluginVer = row.querySelector('.plugin-version-author-uri')?.innerText ?? ''
    console.log(`${pluginTitle} | ${pluginVer} `)
    
})