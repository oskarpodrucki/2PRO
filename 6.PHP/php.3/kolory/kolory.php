<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolory - wynik</title>
    <style>
    
    <?php
    
    $color = $_POST['color1'];
    $text = $_POST['color2'];

    ?>


    p {
            height: 50%;
            width: 50%;
            margin: 50px auto;
            border: 2px dashed red;
            color: <?php echo $text; ?>;
            background-color: <?php echo $color; ?>;
    }
    </style>
   
</head>
<body>
    
    <?php
    
    echo $color."<br>";
    echo $text."<br>";


    echo '<p>Oskar Podrucki</p>'

    ?>

</body>
</html>

