<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $r = $_POST['r'];
    $g = $_POST['g'];
    $b = $_POST['b'];


    $servername = "192.168.15.100";
    $username = "root";
    $password = "zaq12wsx";
    $dbname = "kolorki";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO kolorki (id, r, g, b) VALUES (NULL ,$r, $g, $b)";

    if (mysqli_query($conn, $sql)) {
        echo "Wysłano kolor";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

</body>

</html>