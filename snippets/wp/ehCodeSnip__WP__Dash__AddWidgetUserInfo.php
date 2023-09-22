<?php

/* 
Type: WordPress Code Snippet
Purpose: ADD custom Dashboard Widget to Wordpress Dashboard to display USER INFO
Author: Eric Hepperle
Date Created: 2023-07-10

Code Snippets Plugin Settings:
- Only run in admin area

*/

function ehw_custom_dashboard_widget_user_info()
{
  wp_add_dashboard_widget('user_info_widget', 'User Details', 'custom_widget_user_details');
}
add_action('wp_dashboard_setup', 'ehw_custom_dashboard_widget_user_info');

// Display Form

if (!function_exists('custom_widget_user_details')) {

  function custom_widget_user_details()
  { ?>


    <style>
      #user_info_widget {
        background: aliceblue;
      }

      #user_info_widget h3 {
        font-weight: bold;
        color: brown;
        font-size: 1.4rem;
      }
    </style>

    <?php
    global $current_user;

    echo "<pre>";
    // 	var_dump($current_user);
    echo "</pre>";

    $users = array(3, 4, 5);
    $user_id = $current_user->ID;
    $username = $current_user->user_login;
    $role = $current_user->roles[0];

    echo "<div>";
    echo "<h3>$username</h3>";

    echo "<b>User ID:</b> $user_id<br>";
    echo "<b>User Role:</b> $role<br>";
    echo "</div>";
    ?>

<?php }
}
