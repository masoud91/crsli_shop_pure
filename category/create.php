<?php

session_start();

if( isset($_SESSION['error']) && $_SESSION['error'] === true ) {
    echo "<h3>{$_SESSION['error_msg']}</h3>";
    $_SESSION['error'] = false;
//    session_destroy();
}

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
            priority <br>
            <input name="priority" type="number" min="1" value="1">
        </label>
    </p>

    <p>
        <label>
            Status <br>
            <select name="status">
                <option value="1">Active</option>
                <option value="0">Idle</option>
            </select>
        </label>
    </p>

    <p>
        <label>
            <input type="submit">
        </label>
    </p>

</form>