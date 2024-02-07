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

    <?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sprop";


    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Błąd połączenia");
    }


    $sql = "SELECT `id`, `nazwa`, `cena` FROM `produkty` WHERE 1";
    $results = mysqli_query($conn, $sql);

    echo "<h1>Odczyt z bazy przy pomocy listy</h1>";
    
    echo "<ul>";

    if (mysqli_fetch_row($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<li>nazwa: " . $row['nazwa'] . ", cena: " . $row['cena'] . "</li>";
        }
    } else {
        echo "brak rekordów";
    }

    echo "</ul>";


    ?>

    <br> <br>
    <hr>
    <br>


</body>

</html>