<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad2</title>
</head>

<body>

    <form action="zad2.php" method='POST'>
        <input name='name' type="text" placeholder="nazwa"> <input name='price' type="number" placeholder="cena"> <input type="submit" value="dodaj rekordzisko">
    </form>

    <br>

    <hr>

    <br>

    <?php
    
    if(isset($_POST['name']) && isset($_POST['price'])){

        $nazwa = $_POST['name'];
        $cena = $_POST['price'];

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'sprop';

        $conn = mysqli_connect($host, $user, $password, $database);

        $sql = "INSERT INTO `produkty` (`id`, `nazwa`, `cena`) VALUES (NULL, '$nazwa', '$cena')";

        if(mysqli_query($conn, $sql) === TRUE){
            echo "dodano rekordziszcze";
        }else{
            echo "jest problem byczq";
        }

    }

    ?>
    
</body>

</html>