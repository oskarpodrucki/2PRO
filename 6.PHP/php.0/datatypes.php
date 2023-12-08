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

    <br><br><br>

    types;

    echo "<h3>Getting the Data type</h3>";

    echo "The var_dump() function returns the data type and the value: <br>";

    $x = 5;
    var_dump($x);

    
    echo "<br><br><br>";

    echo "<h3>PHP String</h3>";

    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);


    echo "<br><br><br>";

    echo "<h1>PHP Integer</h1>";

    $x = 6000;

    var_dump($x);


    echo "<br><br><br>";

    echo "<h1>PHP Float</h1>";

    $x = 10.312;

    var_dump($x);


    echo "<br><br><br>";

    echo "<h1>PHP Boolean</h1>";

    $x = true;

    var_dump($x);


    echo "<br><br><br>";

    echo "<h1>PHP Array</h1>";

    $cars = array("Volvo", "BMW", "Toyota");

    var_dump($cars);


    echo "<br><br><br>";

    echo "<h1>PHP Object</h1>";

    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
      
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);


    echo "<br><br><br>";

    echo "<h1>PHP NULL Value</h1>";

    $x = "Hello world!";
    $x = null;
    var_dump($x);


    echo "<br><br><br>";

    echo "<h1>Change Data Type</h1>";

    $x = 5;
    var_dump($x);

    $x = "Hello";
    var_dump($x);
    
    ?>

</body>
</html>