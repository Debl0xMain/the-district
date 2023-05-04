<?php
include('../class/user.class.php');

$email_clt = 'test@test.com';//$_POST['mail'];
$password_insc = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password_clt = 'test';//$_POST['password'];
$name = 't';
$email = 'test@test.com';
$password = '$2y$10$OgqjPHtZ3R4i3zm0Dos1kOzepbQf/NzwpPvy4nlz2YgwWLS6PL2Qq';
$command = 't';
$imgprofil = 't';
$rank = 't';
$objet = new _user($name, $email, $password, $command, $imgprofil, $rank);

$emailcheck = $objet->_email;
$passcheck = $objet->_password;

$objet->checklogin($email_clt,$password_clt,$passcheck,$emailcheck);


?>