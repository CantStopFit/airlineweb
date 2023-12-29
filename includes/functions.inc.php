<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (preg_match("/^[a-zA-Z0-9]*$/"), $username) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}