<?php

session_start();
require 'connect.php';

if(isset($_POST['submit'])){
    $nome = mysqli_real_escape_string($con,$_POST['nome']);
    $stagione = mysqli_real_escape_string($con,$_POST['stagione']);   
    $tipologia = mysqli_real_escape_string($con,$_POST['tipologia']);     
    
    $query = "INSERT INTO esercizioalimento (nome,stagione,tipologia) VALUES('$nome','$stagione','$tipologia')";
    
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['message'] = "Aggiunta l'attività con successo";
        header("Location: aggiungi-alimento.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Aggiunta l'attività fallito";
        header("Location: aggiungi task.php");
        exit(0);
    }
}

?>