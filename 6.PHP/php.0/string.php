<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string.php</title>
</head>

<body>

    <?php

    echo "<h1>PHP Strings</h1>";

    // echo ""
    echo '" " ' . "<br>";
    echo "Hello <br><br>";

    // echo ''
    echo "' '" . "<br>";
    echo 'Hello <br><br><br>';

    // echo ""
    $x = "John";
    echo "Hello $x <br><br>";

    // echo ''
    $x = "John";
    echo 'Hello $x <br><br><br>';

    echo "<h1>PHP Strings functions</h1>";

    $x = "Hello World!";

    echo "<h3>String Length</h3>";
    echo strlen("Hello world!") . "<br><br>";

    echo "<h3>Word Count</h3>";
    echo str_word_count("Hello world!") . "<br><br>";

    echo "<h3>Upper Case</h3>";
    echo strtoupper($x);

    echo "<h3>Lower Case</h3>";
    echo strtolower($x);

    echo "<h3>Replace String</h3>";
    echo str_replace("World", "Dolly", $x);

    echo "<h3>Reverse a String</h3>";
    echo strrev($x);

    echo "<h3>Remove Whitespace</h3>";
    echo trim($x);

    echo "<h3>Convert String into Array</h3>";
    $y = explode(" ", $x);

    // Use the print_r() function to display the result:
    print_r($y);

    /*
    Result:
    Array ( [0] => Hello [1] => World! )
    */

    echo "<h1>PHP Strings functions</h1>";

    echo "<h3>Concatenation</h3>";
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z . "<br>";

    $x = "Hello";
    $y = "World";
    $z = $x . " " . $y;
    echo $z . "<br>";

    $x = "Hello";
    $y = "World";
    $z = "$x $y";
    echo $z;

    echo "<h1>PHP - Slicing Strings</h1>";

    echo "<h3>Slicing</h3>";
    $x = "Hello World!";
    echo substr($x, 6, 5);

    echo "<h3>Slice to the End</h3>";
    $x = "Hello World!";
    echo substr($x, 6);

    echo "<h3>Slice From the End</h3>";
    $x = "Hello World!";
    echo substr($x, -5, 3);

    echo "<h1>PHP - Escape Characters</h1>";

    echo "<h3>Escape Character</h3>";
    // $x = "We are the so-called "Vikings" from the north.";

    $x = "We are the so-called \"Vikings\" from the north.";

    echo <<<'characters'

    \'    Single Quote <br>
    \"    Double Quote  <br>    
    \$    PHP variables <br>    
    \n    New Line  <br>    
    \r    Carriage Return   <br>    
    \t    Tab   <br>    
    \f    Form Feed <br>    
    \ooo    Octal value <br>    
    \xhh    Hex value   <br>

characters;

    ?>

</body>

</html>
