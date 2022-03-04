<?php
/**
 * Plugin Name:       Bug Tracker for WordPress
 * Plugin URI:        https://hdk_install.co.uk/plugins/hdk-bug-tracker/
 * Description:       This plugin installs a widget which allows users to submit bugs to a developer user to solve.
 * Version:           1
 * Requires PHP:      7.4
 * Author:            Ben Meyer for Twickenham Choral
 * Author URI:        https://uk.linkedin.com/in/ben-meyer-4420b5181
 */

function bug_tracker_menu_page() {
    add_menu_page(
        __( 'Bug Tracker', 'textdomain' ),
        'Bug Tracker',
        'manage_options',
        'hdk-bug-tracker/hdk-bug-tracker-view.php',
        '',
        'dashicons-warning',
        72
    );
}
add_action( 'admin_menu', 'bug_tracker_menu_page' );

/**
 * Include CSS file for bug-tracker.
 */
function bug_tracker_scripts() {
    wp_register_style( 'bug-tracker-styles',  plugin_dir_url( __FILE__) . 'assets/style.css' );
    wp_enqueue_style( 'bug-tracker-styles' );
}
add_action( 'admin_init', 'bug_tracker_scripts' );
// Used admin init not wp_enqueue - see https://stackoverflow.com/questions/3760222/how-to-include-css-and-jquery-in-my-wordpress-plugin

?>

<!-- Front end editor 

Make widget appear in preview or view mode when logged in 

Ability to submit bug by user:

    Bug class requires this info as attributes:
        Get user id
        Get user email
        Page / Post id of currently viewed page
        Title of bug
        Bug description
        Page URL
        element, class, id or selector
        browser name
        browser version
        screen size
        operating system
        javascript enabled
        cookies enabled
        datetime submitted

Create bug object from bug class

Add bug object to user object

In view.php:
    Query all users with bug objects present
    Query all bug objects from those users
    Order by datetime submitted 
    View by completed / not completed

    Bug objects should be able to:
    Be submitted
    View all attributes in the object
    Be marked as resolved / not resolved = boolean -->

<?php