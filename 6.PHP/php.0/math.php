<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math.php</title>
</head>
<body>
    
    <?php
    
    echo "<h1>PHP pi() Function</h1>";

    echo(pi()); // returns 3.1415926535898


    echo "<h1>PHP min() and max() Functions</h1>";

    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150


    echo "<h1>PHP abs() Function</h1>";

    echo(abs(-6.7));  // returns 6.7


    echo "<h1>PHP sqrt() Function</h1>";

    echo(sqrt(64));  // returns 8


    echo "<h1>PHP round() Function</h1>";

    echo(round(0.60));  // returns 1
    echo(round(0.49));  // returns 0
    

    echo "<h1>Random Numbers</h1>";

    echo(rand());


?>

</body>
</html>