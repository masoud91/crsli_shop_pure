<?php

if( !file_exists("../config/local.php") ) {
    die('please create config/local.php and set your db config');
} else {
    $config = require_once "../config/local.php";
}

$db = $config['db'];

// Create connection
$conn = new mysqli($db['server'], $db['user'], $db['password'], $db['database']);

// Check connection
if ($conn->error) {
    die("Connection failed: " . $conn->error);
}

