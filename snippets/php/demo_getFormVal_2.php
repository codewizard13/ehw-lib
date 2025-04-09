<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEMO: Get simple form value</title>
</head>
<body>
  <h3>Enter the domain to use:</h3>

  <p>The following form should post to itself. If the submit button has been pushed the value should show below. It should only use the "GET" method.</p>

  <form action="" method="get">
    <input type="text" name="domain" id="domain">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>

<?php
echo $_SERVER['QUERY_STRING']; // Should display "domain=example.com"
?>
  <?php
  // Check if 'domain' is set in the GET array before using it
  if (isset($_GET['domain'])) {
    $domain = htmlspecialchars($_GET['domain']); // Sanitize the input
    echo "<h3>Entered Domain: $domain</h3>";
  }
  ?>

  <h3>Domain: 
  <?php 
  // Safely display the 'domain' value or provide a default message
  echo isset($_GET["domain"]) ? htmlspecialchars($_GET["domain"]) : "No domain entered yet."; 
  ?>
  </h3>
</body>
</html>
