<?php
include 'dbh.inc.php';

$id = $_GET["id"];
$confirmacion = $_GET["conf"];
if ($confirmacion == 1){
    $sql = "UPDATE invitados SET confirmacion = 1 WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $url = "../invitados.php?id=" . $id;
    header("Location: $url");
    exit();
}else{
    $sql = "UPDATE invitados SET confirmacion = 2 WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $url = "../invitados.php?id=" . $id;
    header("Location: $url");
    exit();
}



