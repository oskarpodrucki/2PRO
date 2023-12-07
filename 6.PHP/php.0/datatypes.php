<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>datatypes.php</title>
</head>
<body>
    
    <?php
    
    echo<<<types

    <h3>PHP supports the following data types:</h3>

    <ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point numbers - also called double)</li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
    </ul

    <br><br><br><br><br>

    types;

    echo "<h3>Getting the Data type</h3>";

    echo "The var_dump() function returns the data type and the value: <br>";

    $x = 5;
    var_dump($x);

    
    ?>

</body>
</html>