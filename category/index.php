<?php

require_once "../modules/db_pdo.php";

$sql = "SELECT * FROM category";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<a style="display: inline-block; padding: 10px" href="create.php">Create</a>

<table border="1" cellpadding="10">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>priority</th>
        <th>status</th>
        <th>CDT</th>
        <th colspan="3">actions</th>
    </tr>

<?php foreach ($rows as $row) : ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['priority'] ?></td>
        <td><?= $row['status'] ?></td>
        <td><?= $row['cdt'] ?></td>
        <td><a href='view.php?id=<?= $row['id'] ?>'>View</a></td>
        <td><a href='update.php?id=<?= $row['id'] ?>'>Update</a></td>
        <td><a href='delete_perform.php?id=<?= $row['id'] ?>'>Delete</a></td>
     </tr>
<?php endforeach; ?>

</table>

<?php
$conn->close();
