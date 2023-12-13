<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Avanti - Zamówienie</title>
</head>
<body>
    
    <?php
    
    $kilometry = $_POST['kilometry'];
    $ciepla = $_POST['ciepla'];
    

    echo $kilometry."<br>";
    echo $ciepla."<br><br><br>";


    if($ciepla == ""){

        $cena = ($kilometry * 50) / 10;

        echo "Pizza w drodze, Suma do zapłaty to: ".$cena."zł";
    

    }else if($ciepla == "on"){

        $cena = ($kilometry * 50) / 10;

        $cena = $cena + ($cena*0.15);


        echo "Pizza w drodze, Suma do zapłaty to: ".$cena."zł";

    }


    ?>

</body>
</html>