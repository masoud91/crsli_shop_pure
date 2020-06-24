<?php

require_once "../modules/db.php";

$id = $_REQUEST['id'];

$sql = "DELETE FROM category WHERE id = $id";

if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

