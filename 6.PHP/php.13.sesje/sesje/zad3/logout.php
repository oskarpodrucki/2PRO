<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strona testowa</title>
    <style>
        body {
            background-color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "#666666" : "whitesmoke"; ?>;
            color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "white" : "black"; ?>;
        }
    </style>
</head>

<body>
    <?php
    include "menu.php";

    $_SESSION['zalogowano'] = false;
    $_SESSION['login'] = "";
    $_SESSION['upr'] = "";
    echo "ZOSTAŁEŚ WYLOGOWANY";


    header("Location: ./index.php");
    sleep(3);
    ?>
</body>

</html>