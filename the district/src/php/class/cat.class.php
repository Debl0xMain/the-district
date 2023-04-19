<?php
class _categorie
{
    public $_libelle;
    public $_image;
    public $_onoff;
    public $_id_categorie;

     public function __construct ($libelle, $image, $onoff, $id_categorie) {
        $this->_libelle = $libelle;
        $this->_image = $image;
        $this->_onoff = $onoff;
        $this->_id_categorie =  $id_categorie;
    }


}
?>