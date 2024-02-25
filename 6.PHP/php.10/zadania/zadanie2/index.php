<?php

$napis = $_GET['napis'];

if (strpos($napis, "@")) { //czy w napisie występuje @
    echo "tak";
} else {
    echo "nie";
}