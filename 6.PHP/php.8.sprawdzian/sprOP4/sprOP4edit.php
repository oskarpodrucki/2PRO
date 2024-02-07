<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprOP</title>
</head>

<body>
    <form action="sprOP4edit.php" method="POST">
        <?php

        if (isset($_POST['idEdit'])) {

            $idEdit = $_POST['idEdit'];

            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "sprop";


            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Błąd połączenia");
            }


            $sql = "SELECT `id`, `nazwa`, `cena` FROM `produkty` WHERE id = $idEdit";
            $results = mysqli_query($conn, $sql);


            if (mysqli_fetch_assoc($results) > 0) {
                while ($row = mysqli_fetch_row($results)) {
                    echo "<input name=idEdit type='hidden' value=$idEdit>";
                    echo "<input type='text' name='nazwaEdit' placeholder='nazwa' value=" . $row['nazwa'] . "> <input type='number' name='cenaEdit' placeholder='cena' value=" . $row['cena'] . "> <input type='submit' value='Prześlij'>";
                }
            }
        }

        ?>
    </form>

    <br>
    <hr>
    <br>

    <?php

    if (isset($_POST['idEdit']) && isset($_POST['nazwaEdit']) && isset($_POST['cenaEdit'])) {

        $id = $_POST['idEdit'];
        $name = $_POST['nazwaEdit'];
        $price = $_POST['cenaEdit'];

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "sprop";


        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("błąd połączenia");
        }


        $sql = "UPDATE `produkty` SET `nazwa`='$name',`cena`='$price' WHERE id = $id";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "dodano rekord";
        } else {
            echo "błąd";
        }
    } else {
        echo "edytuj rekord do bazy";
    }

    ?>

</body>

</html>