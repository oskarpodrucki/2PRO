<?php

$napis = $_GET['napis'];

$wartosc = strval(strpos($napis, "a")); //wypisanie na której pozycji znajduje się dana litera

echo "wystapienie: ".$wartosc;

?>