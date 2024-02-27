<?php

$napis = $_GET['napis'];

if (strpos(substr($napis, 0, 9), '-') !== False && strpos(substr($napis, 0, 5), 'a') !== False && strpos(substr($napis, 5, 8), 'a') !== False && strlen($napis) == 9) {
    echo "poprawny format";
} else {
    echo "niepoprawny format";
}
