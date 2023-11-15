<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>list alimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                    <h3 class="text-danger">
                        <a href="aggiungi-alimento.php" class="btn btn-danger float-end">Aggiungi Alimento</a>
                    </h3>
                    </div>
                </div>   
                <h1 class="text-danger my-4">Alimento</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-danger text-center" scope="col">ID</th>
                            <th class="text-danger text-center" scope="col">Nome</th>
                            <th class="text-danger text-center" scope="col">Stagione</th>
                            <th class="text-danger text-center" scope="col">Tipologia</th>
                        </tr>
                    </thead>
                    <tbody>

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'esercizi';

try{
    $conn = new PDO(sprintf("mysql:host=%s;dbname=%s", $servername, $dbname), $username, $password);

    $sql = "select * from esercizioalimento";

    $stat = $conn->prepare($sql);
    $stat->execute();

    $stat->setfetchMode(PDO:: FETCH_ASSOC);
    $results = $stat->fetchAll();
    foreach ($results as $result) {

?>
        <tr>
            <th class="text-center" scope="row"><?= $result['id'] ?></th>
            <td class="text-center"><?= $result['nome'] ?></td>
            <td class="text-center"><?= $result['stagione'] ?></td>
            <td class="text-center"><?= $result['tipologia'] ?></td>  
        </tr>

<?php
    }
} catch ( PDOCxcaption $e ) {
    echo $e->getMessage();
}
$conn = null;

?>

            </tbody>
        </table>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
