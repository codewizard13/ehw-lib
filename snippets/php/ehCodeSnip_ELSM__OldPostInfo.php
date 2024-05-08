<?php
/*
/* 
Type:         	WordPress Code Snippet
Sub-Type:     	N/A
TITLE:        	EPISODES: Template for Formatting Old Descriptions
Author:       	Eric Hepperle
Date Created: 	2024-05-08

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
    - Contains founer signoff

REQUIREMENTS & DEPENDENCIES:
- ELSM Astra Child v. >= 6.01

TAGS:

Code Snippet, Blurbs

REFERENCES:
- 

*/



?>

<!-- SECTION: START -->
<section class="steve-intro-sec">
  <img class="steve-pic" src="https://elijahstreams.com/wp-content/uploads/2023/02/Steve_Shultz2_2016Aug_500px.jpg" alt="Steve Shultz blue shirt by tree" >
  
  <!-- STEVE INTRO HEADER -->
  <header>
  <!-- This stuff is variable -->
    <h3 class="es-intro">
      <em>ELIJAHStreams TV presents…</em>
    </h3>
    <p class="es-title">Playing the TRUMP CARD</p>
  </header>


  <!-- INTRO CONTENT -->
  <!-- Wrap all paragraphs in a P TAG -->
  <?php echo $info_content; ?>

  <!-- DONATE BUTTON -->
  <button class="mcnButton">
    <a title="CLICK HERE TO DONATE" href="https://secure.qgiv.com/for/elijahst/" target="_blank" rel="noopener">DONATE</a>
  </button>
  
  <!-- FOUNDERS SIGNOFF -->
  <footer>
    <p>Blessings,</p>        
    <span class="founders-line">Steve and Derene Shultz, Founders</span>
    <p>ELIJAH LIST MINISTRIES</p>
  </footer>
  
</section>