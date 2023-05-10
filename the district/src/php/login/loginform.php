<?php
include('../class/user.class.php');
include('../sql/request.php');

//$password_insc = password_hash($_POST['password'], PASSWORD_DEFAULT);

$email_clt = $_POST['mail'];
$password_clt = $_POST['password'];
$search = 'burger';

countaffcatsearch($search);

$objet->checklogin($email_clt,$password_clt,$passcheck,$emailcheck);

?>