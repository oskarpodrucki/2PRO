<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprOP</title>
</head>

<body>
    <form action="sprOP2.php" method="POST">
        <input type="text" name="nazwa" placeholder="nazwa"> <input type="number" name="cena" placeholder="cena"> <input type="submit" value="Prześlij">
    </form>

    <br>
    <hr>
    <br>

    <?php

    if (isset($_POST['nazwa']) && isset($_POST['cena'])) {

        $name = $_POST['nazwa'];
        $price = $_POST['cena'];

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "sprop";


        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Błąd połączenia");
        }


        $sql = "INSERT INTO `produkty`(`id`, `nazwa`, `cena`) VALUES (NULL,'$name','$price')";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "dodano rekord";
        } else {
            echo "błąd";
        }
    } else {
        echo "prześlij rekordu do bazy";
    }

    ?>

</body>

</html>