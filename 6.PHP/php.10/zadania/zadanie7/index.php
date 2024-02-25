<?php

$napis = $_GET['napis'];

echo (str_replace(" ", "", ucwords($napis))); //usunięcie spacji i wypisanie drukowaną literą 1 litery napisu

?>