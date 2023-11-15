<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="colore.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php

$numero = 3;
$multiplo = 3;
$tabellinaNumeri = 120;
$tabellinaRisultato = array ();

for($x = 0; $x <= $tabellinaNumeri; $x++) {
    $tabellinaRisultato [] = $multiplo * $numero * $x;
}

?>

    <div class="container my-3">
        <h1>Multiplo <?= $numero ?></h1>

        <table class="table">

        <tr>
            <td><a href="esegui_calcolo.php" class="btn btn-danger float-end">Torna esegui calcoli</a></td>
        </tr>

        </table>

        <button id="button1" onclick="colora('td', 'giallo')">evidenzia multipli 2</button>
        <button id="button2" onclick="colora('td', 'verde')">evidenzia multipli 5</button>
        <button onclick="reset()">reset</button>


    </div>

    <script src="colore.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>