<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>

<body>

    <form action="zad1.php" method="POST">
        <input name="numerek" type="number" placeholder="podaj liczbę"> <input type="submit" value="no dawaj jedziemy">
    </form>

    <br>

    <hr>

    <br>

    <?php

    if (isset($_POST['numerek'])) {

        $number = $_POST['numerek'];

        for ($i = 0; $i <= $number; $i++) {
            echo $i . "<br>" . "";
        }
    }

    ?>

</body>

</html>