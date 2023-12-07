<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echoandprint.php</title>
</head>
<body>
    
    <?php
    
    //echo and print are more or less the same. They are both used to output data to the screen.

    //echo
    echo "<h1>PHP echo Statements</h1>";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;

    echo "<br><br><br>";



    //print
    print "<h1>PHP print Statements</h1>";
    
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;

    ?>

</body>
</html>