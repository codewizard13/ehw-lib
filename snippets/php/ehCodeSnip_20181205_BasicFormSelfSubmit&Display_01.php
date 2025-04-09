<!DOCTYPE html>

<!--
File Name: ehCode_2018.12.05_SnippetTemplate_BasicFormSelfSubmit&Display_01.php
Date Created: 12/05/18
Programmer: Eric Heppe/le

Tutorial Info:
- Title: PHP CRUD Tutorial with MySQL & Bootstrap 4 (Create, Read, Update, Delete)
- URL: https://www.youtube.com/watch?v=3xRMUDC74Cw
- Channel: Clever Techie

Requires:
* WAMP Server

Resources:
- Where to access json endpoint urls:
-- Fill Text: http://www.filltext.com/
- JavaScript Templating: handlebars.js
- Error Handling for AJAX?

-->

<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheets -->  
    <link rel="stylesheet" href="styles.css">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine|Open+Sans:400,300,700">

    <title>JSON and AJAX</title>
    
</head>

<body>

    <header>
        <h1>JSON and AJAX</h1>
        <button id="btn">Fetch Info for 3 New Animals</button>
    </header>
    
	<form action="site.php" method="get">
	
		Name: <input type="text" name="name">
		
		<input type="submit">
	
	</form>
	
	<br>
	
	<?php 
		echo $_GET["name"];
	?>
    
    <!-- JavaScripts -->

    <!-- NOTE: Scripts go at bottom before the closing body tag, listed in order of dependency. jquery.js is always first. -->

    <script src="https:/ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="main.js"></script>

</body>

</html>

<!--

NOTES:

	12/05/18 - Created file.
-->
















