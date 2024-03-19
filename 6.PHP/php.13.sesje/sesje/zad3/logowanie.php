<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie</title>
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

        <input type="text" name='loginF' placeholder="LOGIN">
        <input type="password" name='password' placeholder="HASŁO">
        <input type="submit" placeholder="ZAREJESTRUJ SIĘ">

    </form>


    <?php
    if (isset($_POST['loginF']) && isset($_POST['password'])) {

        $loginF = $_POST['loginF'];
        $password = $_POST['password'];

        function szyfrujHasło($password)
        {
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

        $sql = "SELECT * FROM `users` WHERE login='$loginF' AND pass='$hashedPassword'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            echo "zalogowano";

            $_SESSION['zalogowano'] = true;
            $_SESSION['login'] = $row['login'];
            $_SESSION['upr'] = $row['upr'];

            header("Location: ./index.php");
            sleep(3);
        } else {
            echo "błąd w logowaniu";

            $_SESSION['zalogowano'] = false;
            $_SESSION['login'] = "";
            $_SESSION['upr'] = "";
        }

        mysqli_close($conn);
    } else {
        echo "";

        $_SESSION['zalogowano'] = false;
        $_SESSION['login'] = "";
        $_SESSION['upr'] = "";
    }

    echo "<br>";

    echo $_SESSION['login'];

    echo "<br>";

    echo $_SESSION['upr'];

    echo "<br>";
    ?>
</body>

</html>