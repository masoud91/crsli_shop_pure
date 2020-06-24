<?php

require_once "../modules/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM category where id = $id";
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
            Priority <br>
            <input name="priority" type="number" min="1" value="<?= $row['priority'] ?>">
        </label>
    </p>

    <p>
        <label>
            Status <br>
            <select name="status">
                <option value="1" <?php if($row['status'] == 1) {echo "selected";} ?>>Active</option>
                <option value="0" <?php if($row['status'] == 0) {echo "selected";} ?>>Idle</option>
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