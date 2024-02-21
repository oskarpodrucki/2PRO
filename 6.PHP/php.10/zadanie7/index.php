<?php

$napis = $_GET['napis'];

echo (str_replace(" ", "", ucwords($napis)));

?>