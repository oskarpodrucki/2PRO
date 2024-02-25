<?php

$napis = $_GET['napis'];

if(strlen($napis)>=8){ //czy długość napisu jest większa lub równa 8
    echo "TRUE";
}else{
    echo "FALSE";
}

?>