<?php
/* 
Type:         	TOOL SCRIPT
Filename:       linkVariationsChecker.php
Sub-Type:     	N/A
TITLE:        	TOOL: Link Variations Checker
Author:       	Eric Hepperle
Date Created: 	2024-12-27

PURPOSE: 

Dyamically generate variations of links including http, https, all text-cases,
 and optional trailing slash. Used to help test SSL/TLS certs.

USAGE:

- Enter the domain
- Enter the subdomain (optional)
- Click "Submit" button
- Variations of links will be generated
- Hold down "CTRL" and click each link to see if any break

REQUIREMENTS & DEPENDENCIES:
- ELSM Astra Child v. >= 6.01

TAGS:

Tools, PHP, Link Testing, Broken Link Checker, SEO

REFERENCES:
- 

*/

$cpt_array = [
  'events', 'guests'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Link Variation Checker</title>

  <style>
body { 
  max-width: 1300px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
h1,h2,h3,h4,h5,h6 {
  margin: .2rem 0;
  padding: 0;
}
article {
  margin: .8rem 0;
}
input:not([type="submit"]) {
  background: lightblue;
  display: block;
  margin-bottom: .4rem;
  padding: .4rem;
}

#results {
  color: #333;
  border: brown solid 2px;
  border-radius: .4rem;
  padding: .4rem;
  margin: 1rem auto;
}
.data-item {
  color: brown;
  padding-left: .8rem;
}
.sec-subdomain {
  border: solid 2px goldenrod;
  border-radius: 0px 0px 10px 10px;
  min-height: 3rem;
  margin: 2rem;
  padding: 0;

}
.sec-subdomain h4 {
  background: goldenrod;
  color: white;
  margin: 0;
  margin-bottom: .6rem;
  padding: .2rem .8rem;
}
  </style>
</head>
<h3>

<h1>Link Variation Checker</h1>

<p>Enter the domain to use:</p>

<form action="" method="get">
  <input type="text" name="domain" id="domain" value="<?php echo isset($_GET['domain']) ? htmlspecialchars($_GET['domain']) : ''; ?>">
  <input type="text" name="subdomain" id="subdomain" value="<?php echo isset($_GET['subdomain']) ? htmlspecialchars($_GET['subdomain']) : ''; ?>">
  <input type="submit" name="submit" value="Submit">
</form>

<section id="results">
<?php
$domain = !isset($_GET['domain']) ||  "" === $_GET['domain'] ? '' : htmlspecialchars($_GET['domain']);
$subdomain = !isset($_GET['subdomain']) ||  "" === $_GET['subdomain'] ? '' : htmlspecialchars($_GET['subdomain']);
?>

<h4>Domain: <span class="data-item"><?php echo $domain; ?></span></h4>
<h4>Subdomain: <span class="data-item"><?php echo $subdomain; ?></span></h4>

<hr>

<?php
$base_variations = <<<BVAR
<u>
<li><a href="http://$domain" target="_blank">http://$domain</a></li>
<li><a href="https://$domain" target="_blank">https://$domain</a></li>
<li><a href="http://www.$domain" target="_blank">http://www.$domain</a></li>
<li><a href="https://www.$domain" target="_blank">https://www.$domain</a></li>
</ul>
BVAR;




function buildLinks($domain, $arch='') {


  $case_vars = [
    "uc" => strtoupper($arch),
    "lc" => strtolower($arch),
  ];

$html = <<<HTML
<ul>
<!-- Regular versions -->
<li>Uppercase: <a href="http://$domain/{$case_vars['uc']}" target="_blank">http://$domain/{$case_vars['uc']}</a></li>
<li>Uppercase + trailing slash: <a href="http://$domain/{$case_vars['uc']}/" target="_blank">http://$domain/{$case_vars['uc']}/</a></li>
<li>Lowercase: <a href="http://$domain/{$case_vars['lc']}" target="_blank">http://$domain/{$case_vars['lc']}</a></li>
<li>Lowercase + trailing slash: <a href="http://$domain/{$case_vars['lc']}/" target="_blank">http://$domain/{$case_vars['lc']}/</a></li>
</ul>

<!-- Secure versions -->
<ul>
<li>Secure Uppercase: <a href="https://$domain/{$case_vars['uc']}" target="_blank">https://$domain/{$case_vars['uc']}</a></li>
<li>Secure Uppercase + trailing slash: <a href="https://$domain/{$case_vars['uc']}/" target="_blank">https://$domain/{$case_vars['uc']}/</a></li>
<li>Secure Lowercase: <a href="https://$domain/{$case_vars['lc']}" target="_blank">https://$domain/{$case_vars['lc']}</a></li>
<li>Secure Lowercase + trailing slash: <a href="https://$domain/{$case_vars['lc']}/" target="_blank">https://$domain/{$case_vars['lc']}/</a></li>
</ul>
HTML;
  return $html;
}

function buildSubdomainLinks($domain, $subdomain, $arch='') {

  $subdomain = "" === $subdomain ? "www" : $subdomain;

  $case_vars = [
    "uc" => strtoupper($arch),
    "lc" => strtolower($arch),
  ];

$subdomainLinks = <<<SUBDL
<!-- Regular versions -->
<ul>
<li>[Subdomain] Uppercase: <a href="http://$subdomain.$domain/{$case_vars['uc']}" target="_blank">http://$subdomain.$domain/{$case_vars['uc']}</a></li>
<li>[Subdomain] Uppercase + trailing slash: <a href="http://$subdomain.$domain/{$case_vars['uc']}/" target="_blank">http://$subdomain.$domain/{$case_vars['uc']}/</a></li>
<li>[Subdomain] Lowercase: <a href="http://$subdomain.$domain/{$case_vars['lc']}" target="_blank">http://$subdomain.$domain/{$case_vars['lc']}</a></li>
<li>[Subdomain] Lowercase + trailing slash: <a href="http://$subdomain.$domain/{$case_vars['lc']}/" target="_blank">http://$subdomain.$domain/{$case_vars['lc']}/</a></li>
</ul>

<!-- Secure versions -->
<ul>
<li>Secure [Subdomain] Uppercase: <a href="https://$subdomain.$domain/{$case_vars['uc']}" target="_blank">https://$subdomain.$domain/{$case_vars['uc']}</a></li>
<li>Secure [Subdomain] Uppercase + trailing slash: <a href="https://$subdomain.$domain/{$case_vars['uc']}/" target="_blank">https://$subdomain.$domain/{$case_vars['uc']}/</a></li>
<li>Secure [Subdomain] Lowercase: <a href="https://$subdomain.$domain/{$case_vars['lc']}" target="_blank">https://$subdomain.$domain/{$case_vars['lc']}</a></li>
<li>Secure [Subdomain] Lowercase + trailing slash: <a href="https://$subdomain.$domain/{$case_vars['lc']}/" target="_blank">https://$subdomain.$domain/{$case_vars['lc']}/</a></li>
</ul>
SUBDL;
  return $subdomainLinks;
}



// Print the plain URL links without any stubs
echo "<article>";
echo "<h3>BASE URL VARIATIONS</h3>";
echo $base_variations;
echo "</article>";

// Print the archive URLS
foreach ( $cpt_array as $arch_slug) {


  // echo "<li>$domain/" . $arch_slug . "</li>";
  echo "<article>";
  echo "<h3>///// ".strtoupper($arch_slug). " VARIATIONS /////</h3>";
  echo buildLinks($domain, $arch_slug);

  // Handle subdomain if present
  if ("" !== $subdomain) {
    echo "<footer class='sec-subdomain'>";
    echo "<h4>Subdomain: <span class='data-item'>$subdomain</span></h4>";
    echo buildSubdomainLinks($domain, $subdomain, $arch_slug);

    echo "</footer>";
  }
  echo "</article>";
}

?>

</section>

</body>
</html>
