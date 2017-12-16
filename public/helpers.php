<?php

// require_once('../../wp-includes/class-phpass2.php');

// Die and dump function
function dd($args)
{
    echo '<pre>'; echo json_encode($args, JSON_PRETTY_PRINT); echo '</pre>';
    die();
}

function tt()
{
    echo "This is just a test";
    die();
}

function returnJson($response)
{
    echo json_encode($response);
    die();
}

function password_old_system($input, $saved)
{
    $wp_hasher = new PasswordHash( 8, TRUE );
    return $wp_hasher->CheckPassword($input, $saved);
}
