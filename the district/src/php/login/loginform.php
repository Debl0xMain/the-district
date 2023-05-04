<?php
$email_clt = $_POST['mail'];
$password_clt = 'test';//password_hash($_POST['password'], PASSWORD_DEFAULT);

$email_bdd[0] = 'tesdt@gmail.com';
$email_bdd[1] = 'test@gmail.com';
$password_bdd = 'test';

$email_verif = in_array($email_clt,$email_bdd,true);

if (in_array($email_clt,$email_bdd)){
    echo 'email valide';
    if ($password_clt === $password_bdd) {
        $login = 'User';
        echo 'mdp valide';
        session_start($login);
        setcookie($login);
    }
    else {
        echo 'mdp non valide';
    }
}
else {
    echo 'email non valide';
}




?>