<?php

$con = mysqli_connect('localhost','root','','esercizi');

if(!$con){
    die('Connessione non riuscita'. mysqli_connect_error());
}

/*
if($con){
    echo "Connessione riuscita";
} else {
    die(mysqli_error($con));
}
*/

?>