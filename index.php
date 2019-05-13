

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar Mitzvah Matu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/indexestilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah|Karla|Montserrat|Pacifico" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="icon" href="img/icono.ico" />
</head>
<body background="img/indexback.jpg">

<?php
if (isset($_GET["success"])){
    $succ = $_GET["success"];
    if ($succ == 1){
        echo " 
                <div class=\"alert alert-success alert-dismissable\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong>¡Mensaje enviado correctamente!</strong>
</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <strong><h1 style="text-shadow:0 0 4px #555; ;color: white; font-size:40px; font-family: 'Gloria Hallelujah'">
                    BAR MITZVAH MATÍAS OSATINSKY
                </h1></strong>


        </div>
    </div>
</div>

<br>
<br>

<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="text-center">

            <img class="img-rounded img-responsive center-block" src="img/matu.jpg" alt="tarjeta" width="500">

        </div>


        <div class="contact7">
            <div class="container">
                <div class="text-center">
                    <h1 style="color: white; font-family: 'Gloria Hallelujah'">¡Dejale tu mensaje a Matu!</h1>
                    <h3>(Lo compartiremos en la fiesta)</h3>
                </div>
                <div class="col-md-6 col-md-push-3">
                    <div class="contact7-form">
                        <!-- Form -->
                        <form role="form" action="includes/comentario.inc.php?id=0" method="post">
                            <div class="form-group">
                                <textarea class="form-control" rows="10" placeholder="Tu mensaje" name="comentario" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tu nombre" name="nombre" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Enviar mensaje</button>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>