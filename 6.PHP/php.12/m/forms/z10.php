<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>z10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">

        <!-- <h1>Obliczanie pola koła</h1> -->

        <div id="divform">

            <form action="z10.php" method="POST">
                <input name="number1" type="number" placeholder="wpisz liczbę">
                <input name="number2" type="number" placeholder="wpisz liczbę">
                <input name="number3" type="number" placeholder="wpisz liczbę">
                <input type="submit">
            </form>

        </div>


        <div id="divresult">
            <h2 id="result">
                <?php

                if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3'])) {
                    if ($_POST['number1'] !== "" && $_POST['number2'] !== "" && $_POST['number3'] !== "") {
                        $n = $_POST['number1'];
                        $m = $_POST['number2'];
                        $o = $_POST['number3'];

                        echo max($n, $m, $o);
                    } else {
                        echo "";
                    }
                } else {
                    echo "";
                }

                ?>
            </h2>
        </div>


    </div>
</body>

</html>