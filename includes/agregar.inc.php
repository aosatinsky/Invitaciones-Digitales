<?php
include 'dbh.inc.php';

if (isset($_POST['nombre'],$_POST['invitados'],$_POST['numero'])) {

    $nombre = utf8_decode($_POST['nombre']);
    $invitados = utf8_decode($_POST['invitados']);
    $numero = utf8_decode($_POST['numero']);

    $sql = "INSERT INTO invitados(nombre,invitados,numero) VALUES ('$nombre','$invitados','$numero')";
    $result = mysqli_query($conn, $sql);
    $url = "../agregar.php?pass=barmatu";
    header("Location: $url");

}