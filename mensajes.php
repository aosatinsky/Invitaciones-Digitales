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

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah|Karla|Montserrat|Pacifico" rel="stylesheet">
    <link rel="icon" href="img/icono.ico" />
</head>

<body>

<div class="container">
    <h3 class="text-center">Mensajes</h3>
    <table class="table table-striped">
        <thead >
        <th>Nombre</th>
        <th>Mensaje</th>

        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM comentarios";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $nombre = utf8_encode($row['nombre']);
                $mensaje = utf8_encode($row['mensaje']);

                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$mensaje</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>