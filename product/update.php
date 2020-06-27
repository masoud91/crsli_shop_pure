<?php

require_once "../modules/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM product where id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$catSql = "SELECT id, name FROM category";
$catResult = mysqli_query($conn, $catSql);

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
                <?php while ($cartRow = mysqli_fetch_assoc($catResult)) : ?>
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