<?php
include 'includes/dbh.inc.php';

$contras = $_GET["pass"];

if($contras!="barmatu"){
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar Mitzvah Matu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah|Karla|Montserrat|Pacifico" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="span3">

        <h2>Agregar invitados</h2>
        <br>
        <form role="form" action="includes/agregar.inc.php" method="post">
            <label>Nombre</label>
            <input type="text" name="nombre" class="span3">
            <label>Invitados</label>
            <input type="text" name="invitados" class="span3">
            <label>Numero</label>
            <input type="number" name="numero" class="span3">
            <input type="submit" value="Agregar" class="btn btn-primary pull-right">
            <div class="clearfix"></div>
        </form>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
