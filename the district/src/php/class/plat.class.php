<?php
class _plat
{
    public $_libelle;
    public $_image;
    public $_onoff;
    public $_id_categorie;
    public $_prixplat;
    public $_descplat;

     public function __construct ($libelleplat, $imageplat, $onoffplat, $id_categorieplat, $prixplat, $descplat) {
        $this->_libelle = $libelleplat;
        $this->_image = $imageplat;
        $this->_onoff = $onoffplat;
        $this->_id_categorie =  $id_categorieplat;
        $this->_prixplat = $prixplat;
        $this->_descplat = $descplat;
    }

    public function affplatonsite($rowplat,$selectplat,$platclass) {
        echo "<h1>selectionne plat actif</h1>";
        include('./src/php/addplatonsite.php');
    }


}
?>