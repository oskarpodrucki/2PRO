<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mnożenie - php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tabliczka mnożenia</h1>
    <h3>Wpisz liczbę aby zobaczyć jej mnożenie</h3>

    <form action="multiply.php" method="GET">
        <input name="getNumber" type="number" min=1 max=10 placeholder="wpisz liczbę od 1 do 10"> <input type="submit" value="wyślij">
    </form>

    <?php


    if (isset($_GET['getNumber'])) {
        $number = $_GET['getNumber'];

        if ($number >= 1 && $number <= 10) {
            for ($i = 1; $i <= 10; $i++) {
                echo $i . " × " . $number . " = " . ($i * $number) . "<br>";
            }
        } else {
            echo "";
        }
    } else {
        echo "nie podano numeru";
    }

    ?>
</body>

</html>