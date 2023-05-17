<?php
class _plat
{
    public $_idplatadd;
    public $_libelleplat;
    public $_imageplat;
    public $_onoffplat;
    public $_id_categorieplat;
    public $_prixplat;
    public $_descplat;

     public function __construct ($idplatadd, $libelleplat, $imageplat, $onoffplat, $id_categorieplat, $prixplat, $descplat) {
        $this->_idplatadd = $idplatadd;
        $this->_libelleplat = $libelleplat;
        $this->_imageplat = $imageplat;
        $this->_onoffplat = $onoffplat;
        $this->_id_categorieplat =  $id_categorieplat;
        $this->_prixplat = $prixplat;
        $this->_descplat = $descplat;
    }

    public function affplatonsite($rowplat,$selectplat,$platclass) {
        include('./src/php/addplatonsite.php');
    }


}
?>