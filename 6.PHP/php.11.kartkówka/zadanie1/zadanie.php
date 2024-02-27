<?php

$napis = $_GET['napis'];

echo preg_replace('/a/', 'x', $napis, 1);