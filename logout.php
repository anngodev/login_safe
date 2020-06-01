<?php
    // Did the user's browser send a cookie for the session?
    if( isset( $_COOKIE[ session_name() ] ) ) {
        
        // Empty the cookie
        // one day for cookie to be active; "/" = entire site
        setcookie( session_name(), "", time()-86400, "/" );
    }
    // clear all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "You've been logged out. See you next time!<br>";

    //print_r($_SESSION);

    echo "<p><a href='login.php'>Log back in</a></p>";
?>