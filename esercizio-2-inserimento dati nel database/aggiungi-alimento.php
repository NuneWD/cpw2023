<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aggiungi Alimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container my-4">
        
        <div class="row d-flex align-items-center flex-column">
            <div class="col-md-6">
            <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger">Aggiungi Alimento
                            <a href="list-alimento.php" class="btn btn-danger float-end">Torna List Alimento</a>
                        </h3>
                    </div>
                </div>   
                <div class="body my-5">
                    <form action="codice.php" method="POST">
                        <div class="my-2">
                            <label class="my-1">Nome</label>
                            <input type="text" class="form-control" placeholder="Aggiungi nome" name="nome">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Stagione</label>
                            <input type="text" class="form-control" placeholder="Aggiungi stagione" name="stagione">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Tipologia</label>
                            <input type="text" class="form-control" placeholder="Aggiungi tipologia" name="tipologia">
                        </div>
                        <div class="my-2">
                            <button type="submit" name="submit" class="btn btn-danger my-2">Submit</button>
                        </div>   
                    </form>
                </div>
                
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>