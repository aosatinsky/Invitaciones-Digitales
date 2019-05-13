<?php
include 'includes/dbh.inc.php';

if(empty($_GET["id"])) echo
    header('Location: index.php');
else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM invitados WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        if ($row = mysqli_fetch_assoc($result)){

            $nombre = $row['nombre'];
            $invitados = $row['invitados'];
            $numero = $row['numero'];
            $confirmacion = $row['confirmacion'];
        }
    }else{
        header('Location: index.php');
        exit();
    }

}
?>

<SCRIPT LANGUAGE="JavaScript">
    function envia(pag){
        document.form.action= pag
        document.form.submit()
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar Mitzvah Matu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <meta property="og:site_name" content="BAR MITZVAH MATU">
    <meta property="og:title" content="BAR MITZVAH MATU" />
    <meta property="og:description" content="Hola <?php echo utf8_encode($nombre)?>! Esta es tu invitacion especial para el Bar Mitzvah de Matu" />
    <meta property="og:image" itemprop="image" content="https://st2.depositphotos.com/3385295/11932/v/170/depositphotos_119328198-stock-illustration-vector-illustration-of-magen-david.jpg">
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah|Karla|Montserrat|Pacifico" rel="stylesheet">
    <link rel="icon" href="img/icono.ico" />
</head>
<body>

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

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-center">Hola <?php echo utf8_encode($nombre)?>!</h3>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img class="img-thumbnail center-block"  src="img/Tarjeta2.png" alt="tarjeta">
            <br>
            <img class="img-thumbnail center-block"  src="img/Tarjeta1.png" alt="tarjeta1">
        </div>
    </div>
</div>

<br>
<br>

    <div class="jumbotron text-center" style="background-color: rgba(255,255,255, 0.5)">
        <div class="container">

            <h3 style="size: 30px; font-family: 'Archivo Black'">Festejaremos en SALON ZETAI, Jorge Luis Borges 2894, Yerba Buena, el sábado 18 de Noviembre a las 22 hs.</h3>

            <p>Invitados: <?php echo utf8_encode($invitados)?></p>
            <p>Personales: <?php echo $numero?></p>

            <?php

            if ($confirmacion == 0){
                echo "
                <form name=\"form\" method=\"POST\" >	
            <input type=\"button\" class='btn btn-success btn-lg' onClick=\"envia('includes/invitacion.inc.php?id=". $id ."&conf=1')\" value=\"Asistire\">	
            <input type=\"button\" class='btn btn-danger btn-lg' onClick=\"envia('includes/invitacion.inc.php?id=". $id ."&conf=2')\" value=\"No podre asistir\">		
</form> 
                
                ";
            }elseif ($confirmacion == 1){
                echo "<p> Nos vemos pronto! </p>";
            }else echo "<p>Una lastima!</p>"



            ?>


        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">

            <iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/3cyvMqy2po8?" frameborder="0" allowfullscreen></iframe>
            </div>
            <br>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1167.940264595616!2d-65.3147028835508!3d-26.80675390603089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942242e8d0f632b5%3A0x6fef0958e7acf4f6!2sSal%C3%B3n+Zetai!5e0!3m2!1ses-419!2sar!4v1507935256134" width="560" height="315" frameborder="0" style="border:0" allowfullscreen></iframe
            </div>
        </div>
    </div>
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
                <form role="form" action="includes/comentario.inc.php?id=<?php echo urlencode($id);?>" method="post">
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


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>