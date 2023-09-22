<?php



function dump_server_vars()
{
  $serverVars = $_SERVER;

  echo "<pre>";
  var_dump($serverVars);
  echo "</pre>";
}
add_action('admin_notices', 'dump_server_vars');
