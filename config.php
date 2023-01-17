<?php

$user = 'root';
$password = ''; 
$db = 'yusufcoskun2021502000'; 
$port = 3306;
$database = new mysqli('127.0.0.1', $user, $password, $db, $port);

if ($database->connect_error) {
    die('Connect Error (' . $database->connect_errno . ') '
            . $database->connect_error);
}

?>
