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
    <meta http-equiv="refresh" content="100">



    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/automatico.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah|Karla|Montserrat|Pacifico" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" href="img/icono.ico" />

    <script language="javascript">
        <!--
        var bannerID=0
        function banner(msg,ctrlwidth) {

            newmsg = msg
            while (newmsg.length < ctrlwidth) {
                newmsg += msg
            }
            document.write ('<FORM NAME="Banner">');
            document.write ('<CENTER><INPUT NAME="banner" VALUE= "'+newmsg+'" SIZE= '+ctrlwidth+'></CENTER>');
            document.write ('</FORM>');
            var bannerID = null
            rollmsg()
        }
        function rollmsg() {
            NowMsg = document.Banner.banner.value
            NowMsg = NowMsg.substring(1,NowMsg.length)+NowMsg.substring(0,1)
            document.Banner.banner.value = NowMsg
            bannerID = setTimeout("rollmsg()",150)
        }
        // -->
    </script>

</head>
<body background="img/blanco.jpg">

<SCRIPT LANGUAGE="JavaScript">
    // When the DOM is ready, run this function
    $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: false,
            interval: 200,
        });
    });
</script>


<div class="container">

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <br>






                        <div class="carousel slide center-block" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->


                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">

                                <!-- Quote 1 -->

                                <?php
                                $sql = "SELECT * FROM comentarios ORDER BY RAND()";
                                $result = mysqli_query($conn, $sql);
                                $resultCheck = mysqli_num_rows($result);
                                $i = 1;

                                if ($resultCheck > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $nombre = utf8_encode($row['nombre']);
                                        $mensaje = utf8_encode($row['mensaje']);

                                        if ($i == 1){
                                            echo "
                                
                                <div class=\"item active\">
                        <blockquote>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <strong style='font-size: 20px'><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> $mensaje <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i></strong>
                                    <br><small style='font-size: 20px'>$nombre</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                                
                                
                                
                                ";
                                        }else{
                                            echo "
                                 <div class=\"item\">
                        <blockquote>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <strong style='font-size: 20px'><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> $mensaje <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i></strong>
                                    <br><small style='font-size: 20px'>$nombre</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                                ";
                                        }

                                        $i = $i + 1;


                                    }
                                }
                                ?>


                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <!-- <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->
                        </div>

        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="container">

            <br><br>
                <div id="carousel1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">

                        <?php

                        $html = file_get_contents('https://www.instagram.com/explore/tags/matu18n/');
                        preg_match_all("/(https)(:).*?(jpg)/", $html, $output_array);

                        $matriz_fl = preg_grep("/(https).*?(480)(x)(480).*?(jpg)/", $output_array[0]);

                        $i = 1;
                        foreach ($matriz_fl as $valor){
                            if ($i==1){
                                echo "<div class=\"item active\">
                <img src='$valor' alt=\"\">
            </div>";
                            }
                            if ($i!=1){
                                echo "<div class=\"item\">
                <img src='$valor' alt=\"\">
            </div>";
                            }
                            $i++;
                        }

                        ?>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<h3>
<script>
    <!--
    msg = " SUBI TU FOTO A INSTAGRAM CON EL HASHTAG #MATU18N O MANDA UN MENSAJE EN WWW.MATU18N.PARTY"
    ctrlwidth = "100"
    banner(msg,ctrlwidth);
    // -->
</script>
<h1 class="text-center"></h1>
</h3>
<br>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>