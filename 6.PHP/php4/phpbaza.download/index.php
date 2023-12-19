<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h1><a href='https://www.w3schools.com/php/php_mysql_connect.asp'>Połącz php z bazą danych</a></h1>";
    echo "<h1><a href='https://www.w3schools.com/php/php_mysql_select.asp'>Wyświetl dane z bazy przez php</a></h1>";


    $serwer = "192.168.15.18";
    $user = "root";
    $pass = "zaq12wsx";
    $db = "uczniowie";


    $conn = mysqli_connect($serwer, $user, $pass, $db);


    if(!$conn){
        die("nie udało się połączyć z bazą, ERROR: ".mysqli_connect_error());
    }


    // $sql = "SELECT id, imie, nazwisko, klasa FROM uczniowie";
    $sql = "SELECT * FROM `uczniowie`;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        //wyświetl dane dla każdego rzędu
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: ".$row['id'].", imie: ".$row['imie'].", nazwisko: ".$row['nazwisko'].", klasa: ".$row['klasa'].";";
        } 
    } else {
        echo "0 resultatów";
    }
    
    mysqli_close($conn);

    ?>
</body>

</html>