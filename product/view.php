<?php

require_once "../modules/db_oo.php";

$id = $_GET['id'];

$sql = "SELECT * FROM product where id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$catSql = "SELECT name FROM category where id = {$row['category_id']}";
$catResult = $conn->query($catSql);
$category = $catResult->fetch_assoc();

?>

<a style="display: inline-block; padding: 10px" href="update.php?id=<?= $id ?>">Update</a>
<a style="display: inline-block; padding: 10px" href="delete_perform.php?id=<?= $id ?>">Delete</a>

<?php if( $result->num_rows > 0 ) : ?>
    <h3>ID: <?= $row['id'] ?></h3>
    <h3>Name: <?= $row['name'] ?></h3>
    <h3>Price: <?= $row['price'] ?></h3>
    <h3>Remain: <?= $row['remain'] ?></h3>
    <h3>Category: <?= $category['name'] ?></h3>
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
$conn->close();

