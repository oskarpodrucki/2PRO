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

        <!-- //wyswietlanie -->
        <?php

        $serwer = "localhost";
        $user = "root";
        $pass = "";
        $db = "uczniowie";

        $conn = mysqli_connect($serwer, $user, $pass, $db);

        if (!$conn) {
            die("nie udało się połączyć z bazą, ERROR: " . mysqli_connect_error());
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
            echo "0 resultatów";
        }

        mysqli_close($conn);

        ?>

    </div>

    <div id="stopka">

        <form action="baza.php" method="GET">
            <input type="text" placeholder="imie" name="name">
            <input type="text" placeholder="nazwisko" name="surname">
            <input type="text" placeholder="wiek" name="age">
            <input type="submit">
        </form>

        <?php

        if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['age'])) {
            //Pobrane dane
            $name = $_GET['name'];
            $surname = $_GET['surname'];
            $age = $_GET['age'];


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

            // Wyślij dane
            $sql = "INSERT INTO `uczniowie`(`id`, `imie`, `nazwisko`, `wiek`) VALUES ( NULL,'$name','$surname','$age');";

            if ($conn->query($sql) === TRUE) {
                echo "Dodany nowy rekord";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $name = "";
            $surname = "";
            $age = "";

            $conn->close();
        } else {
            echo "";
        }



        ?>
    </div>

</body>

</html>