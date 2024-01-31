<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baza - edit</title>
</head>

<body>
    <?php

    session_start();
    $student = $_SESSION['studentid'];

    //Dane do połączenia z bazą
    $serwer = "localhost";
    $user = "root";
    $pass = "";
    $db = "uczniowie";

    // Stwórz połączenie
    $conn = mysqli_connect($serwer, $user, $pass, $db);

    // Sprawdz połączenie
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `uczniowie` WHERE id = $student;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h1>edycja ucznia</h1>";
            echo "<form action='edit.php' method='post'>";
            echo "<input type='text' placeholder='imie' value=" . $row['imie'] . " name='name'>";
            echo "<input type='text' placeholder='nazwisko' value=" . $row['nazwisko'] . " name='surname'>";
            echo "<input type='text' placeholder='wiek' value=" . $row['wiek'] . " name='age'>";
            echo "<input type='submit'>";
            echo "</form>";
        }
    } else {
        echo "0 resultatów";
    }

    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])) {
        $editName = $_POST['name'];
        $editSurname = $_POST['surname'];
        $editAge = $_POST['age'];

        // Wyślij dane
        $sqlEdit = "UPDATE `uczniowie` SET `imie`='$editName',`nazwisko`='$editSurname',`wiek`='$editAge' WHERE id = $student";

        if ($conn->query($sqlEdit) === TRUE) {
            echo "zedytowano rekord";
        } else {
            echo "Error: " . $sqlEdit . "<br>" . $conn->error;
        }

        $conn->close();
    }



    ?>
</body>

</html>