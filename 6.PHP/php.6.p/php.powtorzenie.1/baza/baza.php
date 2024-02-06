<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baza</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="baner">
        <h1>Uczniowie</h1>
    </div>

    <div id="uczniowie">

        <!-- wyświetlanie uczniów -->
        <?php

        $serwer = "localhost";
        $user = "root";
        $pass = "";
        $db = "uczniowie";

        $conn = mysqli_connect($serwer, $user, $pass, $db);

        if (!$conn) {
            die("Nie udało się połączyć z bazą, ERROR: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `uczniowie`;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='uczen " . ($row['wiek'] >= 18 ? 'red' : '') . "'>";
                echo "<p class='lewy'>Imie: " . $row['imie'] . " </p> <p class='lewy'> Nazwisko: " . $row['nazwisko'] . "</p> <p class='prawy'>Wiek: " . $row['wiek'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 rezultatów";
        }

        mysqli_close($conn);

        ?>

    </div>

    <br>

    <div id="stopka">

        <h3>Dodaj ucznia:</h3>
        <form action="baza.php" method="POST">
            <input type="text" placeholder="imie" name="name">
            <input type="text" placeholder="nazwisko" name="surname">
            <input type="text" placeholder="wiek" name="age">
            <input type="submit">
        </form>

        <!-- dodawanie -->
        <?php

        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $age = $_POST['age'];

            $serwer = "localhost";
            $user = "root";
            $pass = "";
            $db = "uczniowie";

            $conn = mysqli_connect($serwer, $user, $pass, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO `uczniowie`(`imie`, `nazwisko`, `wiek`) VALUES ('$name','$surname','$age');";

            if ($conn->query($sql) === TRUE) {
                echo "";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "";
        }

        ?>

        <br> <br> <br>

        <form action="baza.php" method="POST">
            <label for="uczniowie"> Uczniowie w bazie: </label>
            <select name="uczniowie">

                <!-- wyświetlanie selecta dla usuwania -->
                <?php

                $serwer = "localhost";
                $user = "root";
                $pass = "";
                $db = "uczniowie";

                $conn = mysqli_connect($serwer, $user, $pass, $db);

                if (!$conn) {
                    die("Nie udało się połączyć z bazą, ERROR: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM `uczniowie`;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=" . $row['id'] . ">" . $row['imie'] . " " . $row['nazwisko'] . " " . $row['wiek'] . "</option>";
                    }
                } else {
                    echo "0 rezultatów";
                }

                mysqli_close($conn);

                ?>

            </select>
            <input type="submit" value="usuń">
        </form>

        <!-- Usuwanie -->
        <?php

        if (isset($_POST['uczniowie'])) {

            $student = $_POST['uczniowie'];

            $serwer = "localhost";
            $user = "root";
            $pass = "";
            $db = "uczniowie";

            $conn = mysqli_connect($serwer, $user, $pass, $db);

            if (!$conn) {
                die("Nie udało się połączyć z bazą, ERROR: " . mysqli_connect_error());
            }

            $sqlDel = "DELETE FROM `uczniowie` WHERE `id` = $student";

            if ($conn->query($sqlDel) === TRUE) {
                echo "";
            } else {
                echo "Error: " . $sqlDel . "<br>" . $conn->error;
            }

            mysqli_close($conn);
        }

        ?>


        <br> <br> <br>

        <form action="edit.php" method="POST">
            <label for="edit"> Uczeń do edytowania: </label>
            <select name="edit">

                <!-- wyświetlanie selecta dla edytowania -->
                <?php

                $serwer = "localhost";
                $user = "root";
                $pass = "";
                $db = "uczniowie";

                $conn = mysqli_connect($serwer, $user, $pass, $db);

                if (!$conn) {
                    die("Nie udało się połączyć z bazą, ERROR: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM `uczniowie`;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=" . $row['id'] . ">" . $row['imie'] . " " . $row['nazwisko'] . " " . $row['wiek'] . "</option>";
                    }
                } else {
                    echo "0 rezultatów";
                }

                mysqli_close($conn);

                ?>

            </select>
            <input type="submit" value="edytuj">
        </form>

    </div>

</body>

</html>