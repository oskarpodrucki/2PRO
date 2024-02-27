<?php

$napis = $_GET['napis'];

if(is_numeric($napis)){
    echo "TRUE";
}else{
    echo "FALSE";
}