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

    if (isset($_POST['edit'])) {

        $studentid =  $_POST['edit'];
        echo $studentid;

        $serwer = "localhost";
        $user = "root";
        $pass = "";
        $db = "uczniowie";

        $conn = mysqli_connect($serwer, $user, $pass, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `uczniowie` WHERE id = $studentid";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h1>edycja ucznia</h1>";
                echo "<form action='edit.php' method='POST'>";
                echo "<input type='hidden' name='idEdit' value='$studentid'></input>";
                echo "<input type='text' placeholder='imie' value='" . $row['imie'] . "' name='nameEdit'>";
                echo "<input type='text' placeholder='nazwisko' value='" . $row['nazwisko'] . "' name='surnameEdit'>";
                echo "<input type='text' placeholder='wiek' value='" . $row['wiek'] . "' name='ageEdit'>";
                echo "<input type='submit'>";
                echo "</form>";
            }

            mysqli_close($conn);
        } else {
            echo "Brak danych do wyświetlenia.";
        }
    }


    ?>


    <!-- edytowanie -->
    <?php

    if (isset($_POST['idEdit'])) {

        $studentid = $_POST['idEdit'];

        $editName = $_POST['nameEdit'];
        $editSurname = $_POST['surnameEdit'];
        $editAge = $_POST['ageEdit'];

        $serwer = "localhost";
        $user = "root";
        $pass = "";
        $db = "uczniowie";

        $conn = mysqli_connect($serwer, $user, $pass, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sqlEdit = "UPDATE `uczniowie` SET `imie`='$editName', `nazwisko`='$editSurname', `wiek`='$editAge' WHERE id = $studentid";

        if (mysqli_query($conn, $sqlEdit)) {
            echo "Zaktualizowano rekord.";
        } else {
            echo "Error: " . $sqlEdit . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    ?>
</body>

</html>