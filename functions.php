<?php

require_once('db_connection.php');

function completed($formVars) {
    foreach ($formVars as $key => $value) {
        if ((!isset($key)) || ($value == '')) {
            return false;
        }
    }
    return true;
}

function correctEmail($email) {
    if (!preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email)) {
        return false;
    } else {
        return true;
    }
}

function register($name, $surname, $email, $password) {
    $connection = connectDB();

    $result = $connection->query("select * from users where user_email='".$email."'");
    if (!$result) {
        throw new Exception('Error with query!');
    }

    if ($result->num_rows>0) {
        throw new Exception('There is already user with same email adress!');
    }

    $result = $connection->query("insert into users values
                                ('0', '".$name."', '".$surname."', '".$email."', sha1('".$password."'))");
    
    if (!$result) {
        throw new Exception('Registration in database is impossible!');
    }

    return true;
}

?>