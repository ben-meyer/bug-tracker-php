
<div class="plugin-wrap">
    <h1 class="bug-tracker-title">Welcome to Bug Tracker!</h1>

    <div class="user-list">
        <?php
        $blogusers = get_users();



        // Array of WP_User objects.
        foreach ( $blogusers as $user ) {
            echo '<span>' . esc_html( $user->display_name ) . '</span>';
           
            var_dump (wp_get_current_user());
        };
        ?>

<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
?>

</div>