<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number.php</title>
</head>
<body>
    
    <?php
    
    echo "<h1>PHP Numbers</h1>";

    $a = 5;
    $b = 5.34;
    $c = "25";

    var_dump($a);
    var_dump($b);
    var_dump($c);


    echo "<h3>PHP Integers</h3>";

    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));


    echo "<h3>PHP Floats</h3>";

    $x = 10.365;
    var_dump(is_float($x));


    echo "<h3>PHP Infinity</h3>";

    $x = 1.9e411;
    var_dump($x);


    echo "<h3>PHP NaN</h3>";

    $x = acos(8);
    var_dump($x);


    echo "<h3>PHP Numerical Strings</h3>";

    $x = 5985;
    var_dump(is_numeric($x));
    
    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    
    $x = "Hello";
    var_dump(is_numeric($x));

    ?>

</body>
</html>