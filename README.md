| INFO PROPERTY | VALUE                                  |
| ------------- | -------------------------------------- |
| Folder Name  | **ehw-lib** |
| File Name     | README.md                              |
| Date Created  | 09/22/23                               |
| Date Modified | --                               |
| Version       | 0.0.1                                  |
| Programmer    | **Eric Hepperle**                      |

### TECHNOLOGIES

<img align="left" alt="Markdown" title="Markdown" width="26px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/markdown/markdown-original.svg" style="padding-right:10px;" />

<img align="left" alt="WordPress" title="WordPress" width="26px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" style="padding-right:10px;" />

<img align="left" alt="JavaScript" title="JavaScript" width="26px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" style="padding-right:10px;" />

<img align="left" alt="Git" title="Git" width="26px" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" style="padding-right:10px;" />

<img align="left" alt="GitHub" title="GitHub" width="26px" src="https://user-images.githubusercontent.com/3369400/139448065-39a229ba-4b06-434b-bc67-616e2ed80c8f.png" style="padding-right:10px;" />

<br>

## TAGS

`Library` `Snippets` `Code Snippets` `Site Starters` `Custom Frameworks` `CMS` `Markdown` `WordPress` `JavaScript` `ES6`

## Purpose

Repository to house **Eric Heppperle's code library**. Contains code snippets, website starter frameworks, etc. Contains a variety of starter files and packages to save time and encourage consistency in design.

![OneTab logo](img/logoPic-onetab.png)

~~~batch
ehw-lib/
  ├── ico/
  ├── site_starters/
  │   └── tmpl__csite-framework/
  │       ├── arch-pages/
  │       ├── assets/
  │       │   ├── plugins/
  │       │   └── themes/
  │       ├── bkp/
  │       ├── colors/
  │       ├── dummy/
  │       ├── ehd/
  │       ├── ico/
  │       ├── img/
  │       ├── notes/
  │       ├── sb/
  │       ├── screens/
  │       ├── tools/
  │       ├── ux/
  │       │   └── mockups/
  │       ├── _inpro/
  │       ├── _snaps/
  │       └── _uns/
  └── snippets/
      ├── sb/
      └── wp/
~~~
[_created with: nathanfriend.io ASCII tree generator_]

## Usage

1. Open OneTab page in a browser and copy-paste the code in `scraper.js` into the console and run it (press Enter).
2. To save/archive the links results use code inspector in browser to grab the "body" tag and contents, then paste that into a new document and save it.

## Requires

* Browser opened to a YouTube video with developer console exposed.

## NOTES & CAVEATS

* **_This README is in-progress and under construction._**

## Troubleshooting

### Q: Custom folder icon not showing up?

**A:** In PowerShell cd to the parent folder and set the "system file" attribute on the target child folder like this:

```powershell
attrib +s folder_name
```

#### CAVEATS:

- Make sure you are in the parent folder and that the folder_name doesn't have any relative pathing artifacts (`.\`, `..\`, etc)

## FUTURE

Future plans include:

- [ ] Make searchable via JavaScript `match()` or `RegExp()`
- [ ] Consider pros/cons of async/await
- [ ] Write results to .htm file and auto execute in new browser tab
- [ ] Save file as CSV
- [ ] Make remote (Puppeteer? Cheerio?) so copy-paste not required
    
### Materials/References

#### Online:

- https://www.youtube.com/watch?v=lgyszZhAZOI
- https://www.youtube.com/watch?v=S67gyqnYHmI

#### Local Files:

- ehCode_2016.05.25_javascript_csvFromAllLinksOnPage_02.js.txt
- [ref/](./ref/)