<?php

class _user
{
    public $_name;
    public $_email;
    private $_password;
    public $_imgprofil;
    public $_rank;

     public function __construct ($name, $email, $password, $imgprofil, $rank) {
        $this->_name = $name;
        $this->_email = $email;
        $this->_password = $password;
        $this->_imgprofil = $imgprofil;
        $this->_rank = $rank;
    }
    
    public function checklogin ($email_clt,$password_clt) {
        var_dump(loginemail($email_clt));
        var_dump($email_clt);
        if (loginemail($email_clt) == true) {
            //email valide //a passe en in_array(donneRentre,bDD) quand il sera relise a la bdd |||||| $emailcheck = loginemail(); in_array($email_clt,$emailcheck);
            echo 'email valide' . '<br>';
            if ($this->checkpassword($password_clt,$email_clt) == true) {
                //session start
                //redirection
                //return true
                echo 'mot de passe valide'. '<br>';
            }
            else {
                //mot de passe invalide
                //echo `<script> $("#passinv").html("*l'adresse maim ou le mot de passe est invalide");</script>`; //passinv
                //return fase
                echo 'mot de passe invalide'. '<br>';
            }
        }
        else {
            //email invalide
            //return fase
            echo 'email invalide'. '<br>';
            //echo `<script> $("#passinv").html("*l'adresse maim ou le mot de passe est invalide");</script>`;
        }

    }

    private function checkpassword ($password_clt,$email_clt) {
    
        if (password_verify($password_clt,password($email_clt)) === true) {
            return true;
        }
        else {
            return false;
        }
    }

}

?>