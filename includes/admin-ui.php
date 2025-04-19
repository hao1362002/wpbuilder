<?php
add_action('admin_menu', function() {
    add_menu_page('WPBuilder', 'WPBuilder', 'manage_options', 'wpbuilder_dashboard', function() {
        echo '<div class="wrap"><h1>WPBuilder Dashboard</h1></div>';
    });
});