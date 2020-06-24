<?php

require_once "../modules/db.php";

$name = $_POST['name'];
$priority = $_POST['priority'];
$status = $_POST['status'];

if ( empty($name) ) {
//    header("Location: create.php?error=1&message=Name and Price are required");
    session_start();
    $_SESSION['error'] = true;
    $_SESSION['error_msg'] = 'Name is required';
    header("Location: create.php");
    die();
}

$sql = "INSERT INTO category (name, priority, status) VALUES ('$name', '$priority', '$status')";

if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

