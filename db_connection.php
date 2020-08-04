<?php

function connectDB() {
    $db_user = 'root';
    $db_pass = '';
    $db_host = 'localhost';
    $db_name = 'home_budget_under_control';
    
    $result = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if (!$result) {
        throw new Exception('Connection with database was failed');
    } else {
        return $result;
    }
}

?>