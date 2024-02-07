<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprOP</title>
</head>

<body>
    <form action="sprOP1.php" method="POST">
        <input name="number" type="text" placeholder="liczba"> <input type="submit" value="Prześlij">
    </form>

    <br>
    <hr>
    <br>

    <?php

    if (isset($_POST['number'])) {

        $number = $_POST['number'];

        for ($i = 1; $i <= $number; $i++) {
            echo "$i <br>";
        }
    } else {
        echo "Podaj liczbe do wymnożenia";
    }

    ?>

</body>

</html>