<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php - serwer pana</title>
</head>
<body>
    
    <form action="http://192.168.15.28:3000/form" method="post">

    Imie: <br><input type="text" name="imie" placeholder="imie"> <br><br>
    Nazwisko: <br><input type="text" name="nazwisko" placeholder="nazwisko"><br><br>
    Data: <br><input type="date" name="data" placeholder="data"><br><br>

    <br>

    Radio: 
    <input type="radio" name="radio" value="TAK">TAK</input>
    <input type="radio" name="radio" value="NIE">NIE</input>

    <br><br>

    <input type=submit value="Prześlij">

    
    </form>

</body>
</html>