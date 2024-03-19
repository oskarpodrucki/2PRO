
<?php

if (!isset($_SESSION['visitCounter'])) {
    $_SESSION['visitCounter'] = 1;
} else {
    $_SESSION['visitCounter']++;
}

echo "<h1>Liczba odwiedzin: " . $_SESSION['visitCounter'] . "</h1>";
echo "<h1>WITAJ!</h1>";
echo "<h3>" . $_SESSION['login'] . "</h3>";

echo "<ul>";
echo "<li><a href='./'>STRONA GŁÓWNA</a></li>";
echo "<li><a href='./strona.php'>STRONA POBOCZNA</a></li>";
if ($_SESSION['upr'] == "admin") {
    echo "<li><a href='./admin.php'>STRONA ADMINISTRATORA</a></li>";
}
if (!$_SESSION['zalogowano']) {
    echo "<li><a href='./logowanie.php'>LOGOWANIE</a></li>";
} else {
    echo "<li><a href='./logout.php'>WYLOGUJ SIĘ</a></li>";
}
echo "<li><a href='./rejestracja.php'>REJESTRACJA</a></li>";
echo "</ul>";
