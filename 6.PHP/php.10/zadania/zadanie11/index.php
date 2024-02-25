<?php

$napis = $_GET['napis'];

$date = strtotime($napis);

if ($date !== false) { //sprawdzenie czy można zapisać daną datę z ciągu liter
    echo "TRUE";
} else {
    echo "FALSE";
}
