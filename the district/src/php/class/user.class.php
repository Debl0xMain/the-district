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
}

?>