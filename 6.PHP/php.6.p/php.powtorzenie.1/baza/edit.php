<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baza - edit</title>
</head>

<body>

    <!-- wyświetlanie danych i tworzenie formularza -->
    <?php

    $studentid = isset($_POST['edit']) ? $_POST['edit'] : '';
    echo $studentid;

    echo "<p name='idEdit' value=$studentid></p>";

    $serwer = "localhost";
    $user = "root";
    $pass = "";
    $db = "uczniowie";

    $conn = mysqli_connect($serwer, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `uczniowie` WHERE id = $studentid";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h1>edycja ucznia</h1>";
            echo "<form action='baza.php' method='POST'>";
            echo "<input type='text' placeholder='imie' value='" . $row['imie'] . "' name='nameEdit'>";
            echo "<input type='text' placeholder='nazwisko' value='" . $row['nazwisko'] . "' name='surnameEdit'>";
            echo "<input type='text' placeholder='wiek' value='" . $row['wiek'] . "' name='ageEdit'>";
            echo "<input type='submit'>";
            echo "</form>";
        }
    } else {
        echo "";
    }

    $conn->close();
    ?>

</body>

</html>