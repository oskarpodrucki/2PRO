<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Tworzenie tabeli</h1>
    <h3>Podaj wartości jakie zbudują tabelę</h3>

    <form action="table.php" method="GET">
        <input name="height" type="number" placeholder="wysokość"> <input name="width" type="number" placeholder="szerokość"> <input type="submit" value="stwórz tabelę"> <br>
        <input type="radio" name=radio value=1>Numerowanie kolumnowe</input> <input type="radio" name=radio value=2>Numerowanie wierszowe</input>
    </form>

    <table>
        <?php

        if (isset($_GET['height']) && isset($_GET['width']) && isset($_GET['radio'])) {

            $wysokosc = $_GET['height'];
            $szerokosc = $_GET['width'];
            $numbering = $_GET['radio'];

            $cellNumber = 1;

            if ($numbering == 2) {
                for ($i = 0; $i < $wysokosc; $i++) {
                    echo "<tr>";

                    for ($j = 0; $j < $szerokosc; $j++) {
                        echo "<td>" . $cellNumber . "</td>";
                        $cellNumber++;
                    }

                    echo "</tr>";
                }
            } elseif ($numbering == 1) {
                for ($i = 0; $i < $wysokosc; $i++) {
                    echo "<tr>";

                    for ($j = 0; $j < $szerokosc; $j++) {
                        $cellNumber = $j * $wysokosc + $i + 1;
                        echo "<td>" . $cellNumber . "</td>";
                    }

                    echo "</tr>";
                }
            } else {
                echo "";
            }
        } else {
            echo "";
        }

        ?>

    </table>

</body>

</html>