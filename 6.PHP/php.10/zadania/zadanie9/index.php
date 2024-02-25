<?php

$napis = $_GET['napis'];

if(is_numeric($napis) === TRUE){ //sprawdza czy zmienna jest liczbą czy ciągiem liczbowym.
    echo "TRUE";
}else{
    echo "FALSE";
}

?>