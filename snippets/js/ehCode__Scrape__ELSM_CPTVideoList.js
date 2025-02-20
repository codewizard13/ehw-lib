/**
 * Name: ehCode__Scrape__ELSM_CPTVideoList.js
 * 
 * Scrape WordPress EliahStreams CPT videos list
 * 
 * Author:        Eric Hepperle
 * Date Created:  06/20/24
 */

/* 
Type:         	Console Scraper: JavaScript
Sub-Type:     	N/A
TITLE:        	EPISODES: Template for Formatting Old Descriptions
Author:       	Eric Hepperle
Date Created: 	2024-06-20

DESCRIPTION:

How it works:

- The style is contained in the child theme
- This is the template layout that it looks for:

section.steve-intro-sec
  img.steve-pic

  header
    h3.es-intro
    p.es-title

  content
    $info_content - a placeholder that represents the main info section. Should be
      different each episode.

  button.mcnButton

  footer
    - Contains founder signoff

REQUIREMENTS & DEPENDENCIES:
- ELSM Astra Child v. >= 6.01

TAGS:

Code Snippet, Blurbs

REFERENCES:
- 

*/

//els = document.querySelectorAll('.type-videos .column-title')
let sel_rows = '.wp-list-table tr.type-videos'
let rows = document.querySelectorAll(sel_rows)


for (i=0; i < rows.length; i++ ) {

  let row = rows[i]
  let title = row.querySelector('.row-title').innerText
  let url = row.querySelector('.view > a').href
  let content = row.querySelector('.column-content').innerText

  //console.log(`${i+1}: ${title}\n\t\t${url}`)
    console.log(`${url} | ${title}`)

}