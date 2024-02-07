<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>

<body>
    <form action="send.php" method="POST">
        <h1>Dodaj uczniów</h1>
        <input type=text name=name placeholder="imie"> <br>
        <input type=text name=surname placeholder="nazwisko"> <br>
        <input type=text name=class placeholder="klasa"> <br><br>
        <input type=submit value="Wyślij dane do bazy">
    </form>
</body>

</html>