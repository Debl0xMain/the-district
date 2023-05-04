<?php

class _user
{
    public $_name;
    public $_email;
    public $_password;
    public $_command;
    public $_imgprofil;
    public $_rank;

     public function __construct ($name, $email, $password, $command, $imgprofil, $rank) {
        $this->_name = $name;
        $this->_email = $email;
        $this->_password = $password;
        $this->_command =  $command;
        $this->_imgprofil = $imgprofil;
        $this->_rank = $rank;
    }
    private function __checkemail ($email,$email_clt) {
        if (in_array($email_clt,$email_bdd)){
            echo 'email valide';
            __checkpassword();
        }
        else {
            echo 'email non valide';
        }
        
    }
    protected function __checkpassword ($password_clt,$password) {
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
}

?>