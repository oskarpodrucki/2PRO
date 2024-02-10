<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprOP</title>
</head>

<body>

    <br>
    <hr>
    <br>

    <form action="sprOP4edit.php" method="POST">
        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "sprop";


        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Błąd połączenia");
        }


        $sql = "SELECT `id`, `nazwa`, `cena` FROM `produkty`";
        $results = mysqli_query($conn, $sql);

        echo "<h1>edycja przy pomocy listy</h1>";

        echo "<select name='idEdit'>";

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<option value=" . $row['id'] . "> nazwa: " . $row['nazwa'] . ", cena: " . $row['cena'] . "   ";
            }
        } else {
            echo "brak rekordów";
        }

        echo "</select> <input type='submit' value='edytuj'> </option> ";


        ?>
    </form>

    <br> <br>
    <hr>
    <br>


</body>

</html>