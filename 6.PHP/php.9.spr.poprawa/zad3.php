<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
</head>

<body>

    <h1>lista rekordów z bazy</h1>

    <hr>

    <ul>
        <?php

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'sprop';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT `id`, `nazwa`, `cena` FROM `produkty`";
        $results = mysqli_query($conn, $sql);


        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<li>";
                echo $row['nazwa'] . ", " . $row['cena'];
                echo "</li>";
            }
        }

        ?>
    </ul>

</body>

</html>