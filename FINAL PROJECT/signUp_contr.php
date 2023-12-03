<?php

declare(strict_types=1);

function is_input_empty($username, $user_password, $email){
    if (empty($username) || empty($user_password) || empty($email)){
    return true;
} else{
    return false;
}
}
function is_email_invalid($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
} else{
    return false;
}
}
function is_username_taken(object $pdo, $username)
{
    if (get_username($pdo, $username)){
    return true;
} else{
    return false;
}
}

