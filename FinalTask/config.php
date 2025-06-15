<?php
// session start
session_start();

// Constants and configuration settings
define('USERDATAFILE', 'users.json');
define('ADMINEMAIL', 'rkhatibi2003@gmail.com');

//this function reads the user data from the json file
function readUsers()
{
    if (file_exists(USERDATAFILE)) {
        $json = file_get_contents(USERDATAFILE);
        return json_decode($json, true) ?: [];
    }
    return [];
}
//this function saves the user data to the json file
function saveUsers($users)
{
    file_put_contents(USERDATAFILE, json_encode($users, JSON_PRETTY_PRINT));
}
//this function validates the registration inputs
function validateRegistration($name, $email, $password)
{
    $errors = [];
    if (empty($name)) {
        $errors[] = "Full name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    return $errors;
}
