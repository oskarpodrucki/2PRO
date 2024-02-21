<?php

$napis = $_GET['napis'];

if(strlen($napis)>=8){
    echo "TRUE";
}else{
    echo "FALSE";
}

?>