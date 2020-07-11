<?php

require_once "../modules/db_oo.php";

$name = $_POST['name'];
$price = $_POST['price'];
$remain = $_POST['remain'];
$category = $_POST['category_id'];

if (empty($name) || empty($price) ) {
//    header("Location: create.php?error=1&message=Name and Price are required");
    session_start();
    $_SESSION['error'] = true;
    $_SESSION['error_msg'] = 'Name and Price are required';
    header("Location: create.php");
    die();
}

$sql = "INSERT INTO product (name, price, remain, category_id) VALUES ('$name', '$price', '$remain' , '$category')";

if ($conn->query($sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

