<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables.php</title>
</head>
<body>
    
    <?php
    
    //PHP Variables Scope
    $name = "Oskar";
    $age = 15;

    echo "Your name is: ".$name.". You are: ".$age." years old. <br><br><br>";

    echo var_dump(5)."<br>"; 
    echo var_dump("John")."<br>";
    echo var_dump(3.14)."<br>";
    echo var_dump(true)."<br>";
    echo var_dump([2, 3, 56])."<br>";
    echo var_dump(NULL)."<br>";

    echo "<br><br><br><br><br>";



    //PHP Variables Scope
    echo "<h1>PHP Variables Scope</h1>";
    $x = 5; // global scope

    function myTest() {
    // using x inside this function will generate an error
    $y = 5; // local scope
    echo "<p>Variable x inside function is: ".$x."</p>";
    echo "<p>Variable x inside function is: ".$y."</p>";
    }
    myTest();

    // using y outside myTest() function will generate an error
    echo "<p>Variable x outside function is: ".$x."</p>";
    echo "<p>Variable x inside function is: ".$y."</p>";

    echo "<br><br><br><br><br>";



    //PHP Math Variables Scope V1
    echo "<h1>PHP Math Variables Scope V1</h1>";
    $x = 5;
    $y = 10;

    function myMathTest1() {
    global $x, $y;
    $y = $x + $y;
    }

    myMathTest1();
    echo "Y v1 = ".$y; // outputs 15

    echo "<br><br><br><br><br>";



    //PHP Math Variables Scope V2
    echo "<h1>PHP Math Variables Scope V2</h1>";
    $x = 5;
    $y = 10;

    function myMathTest2() {
     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myMathTest2();
    echo "Y v2 = ".$y; // outputs 15


    ?>

</body>
</html>