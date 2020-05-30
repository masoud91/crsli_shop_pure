<?php

require_once "../modules/db.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_REQUEST['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$remain = $_POST['remain'];

$sql = "UPDATE product set name = '$name', price = '$price', remain = '$remain' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

