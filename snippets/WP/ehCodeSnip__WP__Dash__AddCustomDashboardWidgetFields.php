<?php

/* 
Type: WordPress Code Snippet
Purpose: ADD custom Dashboard Widget to Wordpress Dashboard
Author: Eric Hepperle
Date Created: 2023-07-10

Inspired by: How to add WordPress Dashboard Widget with Custom Options / Fields - WP Dashboard API
URL: https://www.youtube.com/watch?v=Vhf4qU9yKCw
Channel: Raddy

Code Snippets Plugin Settings:
- Only run in admin area

*/

function custom_dashboard_widget_contact_details() {

  if (current_user_can('manage_options')) {

    wp_add_dashboard_widget('custom_contact_widget', 'Contact Details', 'custom_dashboard_contact');

  }

}
add_action('wp_dashboard_setup', 'custom_dashboard_widget_contact_details');

// Display Form

if (!function_exists('custom_dashboard_contact')) {

  function custom_dashboard_contact() { ?>

    <div class="wrap">

      <form action="options.php" method="post">
        <?php wp_nonce_field('update-options'); ?>

        <table>
          <tr>
            <th scope="row" width="120" align="left" valign="top">Phone Number:</th>
            <td>
              <input type="text" name="phone_number" size="255"
                value="<?php echo htmlentities(get_option('phone_number')); ?>" style="width:100%">
            </td>
          </tr>
          <tr>
            <th scope="row" width="120" align="left" valign="top">Email Address:</th>
            <td>
              <input type="text" name="email_address" size="255"
                value="<?php echo htmlentities(get_option('email_address')); ?>" style="width:100%">
            </td>
          </tr>
        </table>

        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="phone_number, email_address" />
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>">
        </p>

      </form>
    </div>


  <?php }

}