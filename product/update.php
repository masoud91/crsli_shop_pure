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