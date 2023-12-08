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
        echo '" " '."<br>";
        echo "Hello <br><br>";

        // echo ''
        echo "' '"."<br>";
        echo 'Hello <br><br><br>';


        // echo ""
        $x = "John";
        echo "Hello $x <br><br>";

        // echo ''
        $x = "John";
        echo 'Hello $x <br><br><br>';



        echo "<h1>PHP Strings functions</h1>";

        echo "<h3>String Lenght</h3>";
        echo strlen("Hello world!")."<br><br>";


        echo "<h3>Word Count</h3>";
        echo str_word_count("Hello world!")."<br><br>";


        echo "<h3>Search For Text Within a String</h3>";
        echo strpos("Hello world!", "world")."<br><br>";

    ?>

</body>
</html>