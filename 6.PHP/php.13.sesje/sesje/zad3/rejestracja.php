<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rejestracja</title>
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
    ?>

    <form action="" method="POST">

        <input type="text" name='login' placeholder="LOGIN">
        <input type="password" name='password' placeholder="HASŁO">
        <input type="submit" placeholder="ZAREJESTRUJ SIĘ">

    </form>


    <?php
    if (isset($_POST['login']) && isset($_POST['password'])) {

        $login = $_POST['login'];
        $password = $_POST['password'];

        function szyfrujHasło($password){
            return md5($password);
        }

        $hashedPassword = szyfrujHasło($password); 

        $host = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $database = "phpsesjeop";

        $conn = mysqli_connect($host, $dbuser, $dbpass, $database);

        if (!$conn) {
            die("błąd połączenia" . mysqli_connect_errno());
        }

        $sql = "INSERT INTO `users`(`login`, `pass`, `upr`) VALUES ('$login','$hashedPassword','user')";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "dodano użytkownika";
        } else {
            echo "błąd nwm";
        }

        mysqli_close($conn);
    } else {
        echo "";
    }
    ?>
</body>

</html>