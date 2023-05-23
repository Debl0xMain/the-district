<?php
include_once('../class/user.class.php');
include_once('../../sql/request.php');
include_once('../../sql/connect.php');

//$password_insc = password_hash($_POST['password'], PASSWORD_DEFAULT);

$email_clt = $_POST['mail'];
$password_clt = $_POST['password'];

foreach (creatuser() as $us):
    $name = $us->nom_prenom;
    $email = $us->email;
    $password = $us->password;
    $imgprofil = $us->imgprofil;
    $rank = 0;
endforeach;

$objet = new _user($name, $email, $password, $imgprofil, $rank);
$objet->checklogin($email_clt,$password_clt);


session_start();

foreach (selectid($email_clt) as $uslog):
    $username = $uslog->nom_prenom;
    $iduser = $uslog->id;
endforeach;

$_SESSION['user'] = $username;
$_SESSION['iduser'] = $iduser;
$_SESSION["email"] = $email_clt;
$_SESSION["imgprofil"] = $imgprofil;


header("Location:/index.php");
exit;


?>