<?php

session_start();

if( isset($_SESSION['error']) && $_SESSION['error'] === true ) {
    echo "<h3>{$_SESSION['error_msg']}</h3>";
    $_SESSION['error'] = false;
//    session_destroy();
}

require_once "../modules/db.php";

$sql = "SELECT id, name FROM category";
$result = mysqli_query($conn, $sql);

?>

<form method="post" action="create_perform.php">
    <p>
        <label>
            Name <br>
            <input name="name">
        </label>
    </p>

    <p>
        <label>
            Price <br>
            <input name="price">
        </label>
    </p>

    <p>
        <label>
            Remain <br>
            <input name="remain" type="number" min="0">
        </label>
    </p>

    <p>
        <label>
            Category <br>
            <select name="category_id">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php endwhile; ?>
            </select>
        </label>
    </p>

    <p>
        <label>
            <input type="submit">
        </label>
    </p>

</form>