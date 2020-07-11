<?php

if( !file_exists("../config/local.php") ) {
    die('please create config/local.php and set your db config');
} else {
    $config = require_once "../config/local.php";
}

$db = $config['db'];

// Create connection
$conn = new PDO("mysql:host={$db['server']};dbname={$db['database']}", $db['user'], $db['password']);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
