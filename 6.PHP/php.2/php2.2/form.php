<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form.php - div</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $color = $_POST['radio'];

    if($color == "TAK"){
        echo "<div class='jeden'>".$color."</div>";
    }else if($color == "NIE"){
        echo "<div class='dwa'>".$color."</div>";
    }

    ?>
</body>
</html>