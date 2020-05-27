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

$id = $_GET['id'];

$sql = "SELECT * FROM product where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<a style="display: inline-block; padding: 10px" href="update.php?id=<?= $id ?>">Update</a>
<a style="display: inline-block; padding: 10px" href="delete.php?id=<?= $id ?>">Delete</a>

<?php if( mysqli_num_rows($result) > 0 ) : ?>
    <h3>ID: <?= $row['id'] ?></h3>
    <h3>Name: <?= $row['name'] ?></h3>
    <h3>Price: <?= $row['price'] ?></h3>
    <h3>Remain: <?= $row['remain'] ?></h3>
    <h3>CDT: <?= $row['cdt'] ?></h3>
<?php else: ?>
    <h4>Not Found</h4>
<?php endif; ?>

<?php /*
if( mysqli_num_rows($result) > 0 ) {
    echo "
        <h3>ID: {$row['id']} </h3>
        <h3>Name: {$row['name']} </h3>
        <h3>Price: {$row['price']} </h3>
        <h3>Remain: {$row['remain']} </h3>
        <h3>CDT: {$row['cdt']} </h3>
    ";
} else {
    echo '<h4>Not Found</h4>';
}
*/?>

<?php
mysqli_close($conn);

