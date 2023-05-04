<?php
$email_clt = $_POST['mail'];
$password_insc = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password_clt = $_POST['password'];
echo $password_clt;
$email_bdd[0] = 'tesdt@gmail.com';
$email_bdd[1] = 'test@gmail.com';
$password_bdd = '$2y$10$OgqjPHtZ3R4i3zm0Dos1kOzepbQf/NzwpPvy4nlz2YgwWLS6PL2Qq';

if (in_array($email_clt,$email_bdd)){
    echo 'email valide';
    if (password_verify($password_clt,$password_bdd) === true) {
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