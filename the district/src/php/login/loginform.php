<?php
include('../class/user.class.php');

$email_clt = $_POST['mail'];
$password_insc = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password_clt = $_POST['password'];

$objet = new _user($name, $email, $password, $imgprofil, $rank);

$emailcheck = $objet->_email;
$passcheck = $objet->_password;

$objet->checklogin($email_clt,$password_clt,$passcheck,$emailcheck);

?>