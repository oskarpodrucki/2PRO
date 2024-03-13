<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strona główna</title>
    <style>
        body {
            background-color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "#666666" : "whitesmoke"; ?>;
            color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "whitesmoke" : "black"; ?>;
        }
    </style>
</head>

<body>
    <?php
    include "menu.php";
    ?>

    <form action="" method="POST">
        <button type="submit" name="bgColor" value="ciemny">Ciemny</button>
        <button type="submit" name="bgColor" value="jasny">Jasny</button>
    </form>

    <?php
    if (isset($_POST["bgColor"])) {
        $_SESSION["bgColorAll"] = $_POST["bgColor"];
        echo $_SESSION["bgColorAll"];
    }
    ?>
</body>

</html>