<?php

require_once "../modules/db_oo.php";

$id = $_REQUEST['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$remain = $_POST['remain'];

$sql = "UPDATE product set name = '$name', price = '$price', remain = '$remain' WHERE id = $id";

if ($conn->query($sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

