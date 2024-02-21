<?php

$napis = $_GET['napis'];

if (strpos($napis, "@")) {
    echo "tak";
} else {
    echo "nie";
}


