<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form.php</title>
</head>
<body>
    <?php

    // Odkomentuj poniższy blok, aby przywitać użytkownika na podstawie przesłanych danych z formularza GET
    // echo "Witaj ".$_GET['name']." ".$_GET['surname']."!";

    // Odkomentuj poniższy blok, aby wygenerować listę liczb od 0 do podanej liczby z formularza POST
    // $liczba = $_POST['number'];
    // for($i = 0; $i<=$liczba; $i++){
    //     echo $i."<br>";
    // }

    // Odkomentuj poniższy blok, aby wygenerować numerowane elementy listy od 0 do podanej liczby z formularza POST
    // $liczba = $_POST['number'];
    // echo "<ul>";
    // for($i = 0; $i<=$liczba; $i++){
    //     echo "<li>{$i}</li>";
    // }
    // echo "</ul>";

    // Odkomentuj poniższy blok, aby sprawdzić, czy liczba z formularza POST jest parzysta czy nieparzysta
    $liczba = $_POST['number'];
    if($liczba%2 == 0){
        echo "<h1>Liczba {$liczba} jest parzysta</h1>";
    }else if($liczba%2 != 0){
        echo "<h1>Liczba {$liczba} jest nieparzysta</h1>";
    }

    ?>
</body>
</html>