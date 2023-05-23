<?php
include_once('../../sql/connect.php');
include_once('../../sql/request.php');
session_start();
 if ($_SESSION['user'] != NULL) {
    $idusercmd = $_SESSION['iduser'];
 }
 else {
    $idusercmd  = 999;
 }

$idplatcmd = $_POST["idplatform"];

foreach(addpanier($idplatcmd) as $cmdshop);
$libellecmd = $cmdshop->libelle; 
$imagecmd = $cmdshop->image;
$prixcmd = $cmdshop->prix;



addpanierbdd($idplatcmd,$libellecmd,$imagecmd,$prixcmd,$idusercmd);
header("Location:/plats.php");
exit;


?>