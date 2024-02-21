<?php

$napis = $_GET['napis'];

$date = strtotime($napis);

if ($date !== false) {
    echo "TRUE";
} else {
    echo "FALSE";
}
