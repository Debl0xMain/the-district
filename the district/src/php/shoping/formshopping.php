<?php
include_once('../../sql/connect.php');
include_once('../../sql/request.php');


$idplatcmd = $_POST["idplatform"];

foreach(addpanier($idplatcmd) as $cmdshop);
$libellecmd = $cmdshop->libelle; 
$imagecmd = $cmdshop->image;
$prixcmd = $cmdshop->prix;

$idusercmd = 1;

addpanierbdd($idplatcmd,$libellecmd,$imagecmd,$prixcmd,$idusercmd);
header("Location:/plats.php");
exit;


?>