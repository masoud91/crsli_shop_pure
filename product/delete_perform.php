<?php

$servername = "localhost";
$username = "test";
$password = "123456";
$dbname = "crsli_shop_pure";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_REQUEST['id'];

$sql = "DELETE FROM product WHERE id = $id";

if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

