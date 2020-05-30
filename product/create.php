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
            <input type="submit">
        </label>
    </p>

</form>