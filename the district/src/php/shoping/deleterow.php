<?php
include_once('../../sql/connect.php');
include_once('../../sql/request.php');

$userid = $_POST["user"];
$idplatcmd = $_POST["idcmd"];

suppanierbdd($idplatcmd,$userid);
header("Location:/index.php");
exit;
?>