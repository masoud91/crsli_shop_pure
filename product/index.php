<?php

require_once "../modules/db.php";

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

?>

<a style="display: inline-block; padding: 10px" href="create.php">Create</a>
<a style="display: inline-block; padding: 10px" href="delete.php">Delete</a>

<?php
/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<table border="1" cellpadding="10">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>remain</th>
                <th>CDT</th>
                <th colspan="3">actions</th>
            </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['remain']}</td>
                <td>{$row['cdt']}</td>
                <td><a href='view.php?id={$row['id']}'>View</a></td>
                <td><a href='update.php?id={$row['id']}'>Update</a></td>
                <td><a href='delete_perform.php?id={$row['id']}'>Delete</a></td>
             </tr>";
    }
    echo '</table>';
} else {
    echo "0 results";
}*/
?>

<?php if (mysqli_num_rows($result) > 0) : ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>remain</th>
            <th>category</th>
            <th>CDT</th>
            <th colspan="3">actions</th>
        </tr>
        
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['remain'] ?></td>
            <td><?= $row['category_id'] ?></td>
            <td><?= $row['cdt'] ?></td>
            <td><a href='view.php?id=<?= $row['id'] ?>'>View</a></td>
            <td><a href='update.php?id=<?= $row['id'] ?>'>Update</a></td>
            <td><a href='delete_perform.php?id=<?= $row['id'] ?>'>Delete</a></td>
         </tr>
    <?php endwhile; ?>

    </table>

<?php else : ?>
    <h2>0 results</h2>
<?php endif; ?>

<?php
mysqli_close($conn);

