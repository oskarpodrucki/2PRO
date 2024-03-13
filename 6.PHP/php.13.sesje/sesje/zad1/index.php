<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php

    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";

    echo $_SESSION['favcolor'] . "<br>";
    echo $_SESSION['favanimal'] . "<br>";
    echo "Session variables are set.";
    
    ?>

    <hr>

    <form action="" method="POST">

        <input type="text" name="color" placeholder="ustaw kolor">
        <input type="text" name="animal" placeholder="ustaw zwierzę">
        <input type="submit" value="zmien sesje">

    </form>

    <hr>

    <?php

    if (isset($_POST['color']) && isset($_POST['animal'])) {

        $_SESSION["favcolor"] = $_POST['color'];
        $_SESSION["favanimal"] = $_POST['animal'];

        echo "<h1>Zmienione sesje: </h1> <br>";
        echo $_SESSION['favcolor'] . "<br>";
        echo $_SESSION['favanimal'] . "<br>";

    } else {
        echo "";
    }

    ?>

</body>

</html>