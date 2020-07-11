<?php

require_once "../modules/db_oo.php";

$id = $_GET['id'];

$sql = "SELECT * FROM product where id = $id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();;

$catSql = "SELECT id, name FROM category";
$catResult = $conn->query($sql);

?>
<!--<form method="post" action="update_perform.php?id=<?/*= $id */?>">-->
<form method="post" action="update_perform.php">

    <input name="id" type="hidden" value="<?= $row['id'] ?>">

    <p>
        <label>
            Name <br>
            <input name="name" value="<?= $row['name'] ?>">
        </label>
    </p>

    <p>
        <label>
            Price <br>
            <input name="price" value="<?= $row['price'] ?>">
        </label>
    </p>

    <p>
        <label>
            Remain <br>
            <input name="remain" type="number" min="0" value="<?= $row['remain'] ?>">
        </label>
    </p>

    <p>
        <label>
            Category <br>
            <select name="category_id">
                <?php while ($cartRow = $catResult->fetch_assoc()) : ?>
                    <option value="<?= $cartRow['id'] ?>" <?php if ($cartRow['id'] == $row['category_id']) echo 'selected' ?>>
                        <?= $cartRow['name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </label>
    </p>

    <p>
        <label>
            cdt <br>
            <input disabled value="<?= $row['cdt'] ?>">
        </label>
    </p>

    <p>
        <label>
            <input type="submit">
        </label>
    </p>

</form>

<?php
$conn->close();