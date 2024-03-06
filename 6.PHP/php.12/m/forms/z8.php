<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>z8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">

        <!-- <h1>Obliczanie pola koła</h1> -->

        <div id="divform">

            <form action="z8.php" method="POST">
                <input name="number1" type="number" placeholder="wpisz liczbę">
                <input name="number2" type="number" placeholder="wpisz liczbę">
                <input type="submit">
            </form>

        </div>


        <div id="divresult">
            <h2 id="result">
                <?php

                if (isset($_POST['number1']) && isset($_POST['number2'])) {
                    if ($_POST['number1'] !== "" && $_POST['number2'] !== "") {
                        $n = $_POST['number1'];
                        $m = $_POST['number2'];

                        echo rand($n, $m);
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