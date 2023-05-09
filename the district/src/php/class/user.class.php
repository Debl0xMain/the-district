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
    
    public function checklogin ($email_clt,$password_clt,$passcheck,$emailcheck) {
        
        if (($email_clt === $emailcheck)) { //$emailcheck = loginemail(); in_array($email_clt,$emailcheck);
            //email valide //a passe en in_array(donneRentre,bDD) quand il sera relise a la bdd |||||| $emailcheck = loginemail(); in_array($email_clt,$emailcheck);
            echo 'email valide' . '<br>';
            if ($this->checkpassword($password_clt,$passcheck) === true) {
                //session start
                //redirection
                //return true
                echo 'mot de passe valide'. '<br>';
            }
            else {
                //mot de passe invalide
                echo `<script> $("#passinv").html("*l'adresse maim ou le mot de passe est invalide");</script>`; //passinv
                //return fase
            }
        }
        else {
            //email invalide
            //return fase
            echo `<script> $("#passinv").html("*l'adresse maim ou le mot de passe est invalide");</script>`;
        }

    }

    private function checkpassword ($password_clt,$passcheck) {
    
        if (password_verify($password_clt,$passcheck) === true) {
            return true;
        }
        else {
            return false;
        }
    }

}

?>