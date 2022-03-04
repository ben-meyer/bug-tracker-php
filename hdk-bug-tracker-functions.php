<!-- Ability to submit bug by user:

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
        datetime submitted -->

<?php

class submittedBug {
   wp_get_current_user();

}

// function user_submits_bug() {
//     new Bug
// }