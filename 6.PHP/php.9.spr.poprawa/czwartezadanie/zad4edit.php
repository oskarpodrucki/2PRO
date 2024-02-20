<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad4edit</title>
</head>

<body>

    <?php

    if (isset($_POST['idEdit'])) {

        $id = $_POST['idEdit'];
        echo $id;


        echo "<hr>";


        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'sprop';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sqlGet = "SELECT `id`, `nazwa`, `cena` FROM `produkty` WHERE `id` = $id;";
        $results = mysqli_query($conn, $sqlGet);


        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<form action='zad4edit.php' method='POST'>";
                echo "<input name='idEdit' type='hidden' value='" . $row['id'] . "'>";
                echo "<input value='" . $row['nazwa'] . "' name='name' type='text' placeholder='nazwa'> <input value='" . $row['cena'] . "' name='price' type='number' placeholder='cena'> <input type='submit' value='edytuj rekordzisko'>";
                echo "</form>";
            }
        }
    }

    echo "<hr>";

    if (isset($_POST['idEdit']) && isset($_POST['name']) && isset($_POST['price'])) {

        $id = $_POST['idEdit'];
        $nazwa = $_POST['name'];
        $cena = $_POST['price'];

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'sprop';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "UPDATE `produkty` SET `nazwa`='$nazwa',`cena`='$cena' WHERE `id` = $id";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "zedytowano rekordziszcze";
        } else {
            echo "jest problem byczq";
        }
    }

    ?>

</body>

</html>