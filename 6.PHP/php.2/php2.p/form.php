<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
   
    <?php
    
    $number = $_POST['input'];

    echo "<h1>FOR</h1> <br>";

    for($i=0; $i<=$number; $i++){
        echo "Liczba to: ".$i." <br>" ;
    }

    echo "<br><br><br>";

    echo "<h1>Parzysta czy nie</h1> <br>";

    if($number %2 == 0){
        echo "Liczba jest parzysta";
    }else{
        echo "Liczba jest nieparzysta";
    }

    
    ?>

</body>
</html>