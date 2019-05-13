<?php
include 'dbh.inc.php';

if (isset($_GET['id'],$_POST['nombre'],$_POST['comentario'])) {

$id = utf8_decode($_GET['id']);
$nombre = utf8_decode($_POST['nombre']);
$comentario = utf8_decode($_POST['comentario']);

    $sql = "INSERT INTO comentarios(nombre,mensaje) VALUES ('$nombre','$comentario')";
    $result = mysqli_query($conn, $sql);
    if ($id == 0){
        $url = "../index.php?success=1";
    }else{
        $url = "../invitados.php?id=" . $id."&success=1";
    }

    header("Location: $url");

}