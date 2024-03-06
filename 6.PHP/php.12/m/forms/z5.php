<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>z5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">

        <!-- <h1>Obliczanie pola koła</h1> -->

        <div id="divform">

            <form action="z5.php" method="POST">
                <input name="number" type="number" step="any" placeholder="wpisz liczbę">
                <input type="submit">
            </form>

        </div>


        <div id="divresult">
            <h2 id="result">
                <?php

                if (isset($_POST['number'])) {

                    if ($_POST['number'] !== "") {
                        $n = $_POST['number'];

                        echo round($n);
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