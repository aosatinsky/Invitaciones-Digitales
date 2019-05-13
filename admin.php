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
    <h3 class="text-center">Invitados no confirmados</h3>
    <table class="table table-striped">
        <thead >
        <th>ID</th>
        <th>Nombre</th>
        <th>Invitados</th>
        <th>Numero</th>
        <th>Link</th>
        <th>Mesa</th>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM invitados WHERE confirmacion = 0";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = utf8_encode($row['id']);
                $nombre = utf8_encode($row['nombre']);
                $invitados = utf8_encode($row['invitados']);
                $numero = utf8_encode($row['numero']);
                $mesa = $row['observacion'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$invitados</td>";
                echo "<td>$numero</td>";
                echo "<td>http://matu18n.party/invitados.php?id=$id</td>";
                echo "<td><a href=\"whatsapp://send?text=http://matu18n.party/mesa.php?id=$id\" data-action=\"share/whatsapp/share\">$mesa</a></td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>

</div>

<br>
<div class="container">
    <h3 class="text-center">Invitados confirmados</h3>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Invitados</th>
        <th>Numero</th>
        <th>Link</th>
        <th>Mesa</th>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM invitados WHERE confirmacion = 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nombre = $row['nombre'];
                $invitados = $row['invitados'];
                $numero = $row['numero'];
                $mesa = $row['observacion'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$invitados</td>";
                echo "<td>$numero</td>";
                echo "<td>http://matu18n.party/invitados.php?id=$id</td>";
                echo "<td><a href=\"whatsapp://send?text=http://matu18n.party/mesa.php?id=$id\" data-action=\"share/whatsapp/share\">$mesa</a></td>";                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>

</div>

<br>

<div class="container">
    <h3 class="text-center">Invitados que cancelaron</h3>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Invitados</th>
        <th>Numero</th>
        <th>Link</th>
        <th>Mesa</th>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM invitados WHERE confirmacion = 2";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nombre = $row['nombre'];
                $invitados = $row['invitados'];
                $numero = $row['numero'];
                $mesa = $row['observacion'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$invitados</td>";
                echo "<td>$numero</td>";
                echo "<td>http://matu18n.party/invitados.php?id=$id</td>";
                echo "<td><a href=\"whatsapp://send?text=http://matu18n.party/mesa.php?id=$id\" data-action=\"share/whatsapp/share\">$mesa</a></td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>