<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send.php</title>
</head>

<body>

    <?php

    //Pobrane dane
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $class = $_POST['class'];


    //Dane do połączenia z bazą
    $servername = "192.168.15.18";
    $username = "root";
    $password = "zaq12wsx";
    $dbname = "uczniowie";


    // Stwórz połączenie
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdz połączenie
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Wyślij dane
    $sql = "INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `klasa`) VALUES (NULL, '$name', '$surname', '$class');";

    if ($conn->query($sql) === TRUE) {
        echo "Dodany nowy rekord";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

</body>

</html>