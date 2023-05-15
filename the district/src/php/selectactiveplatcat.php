<?php
$selectplat = 0;
$revealcount = 0;
$rowplat = 1;
$selectplatactif = 0;

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');
include_once('./src/php/class/plat.class.php');

echo '<div class="row my-2 mx-5 text-center row-cols-1">';
echo '<div class="col platmv"><p>Notre selection</p></div>';
echo '</div>';
echo '<div class="row my-2 mx-5 text-center row-cols-3">';

do {

    foreach (affplatsite($selectplat) as $plat);

    $idplatadd = $plat->id;
    $libelleplat = $plat->libelle;
    $imageplat = $plat->image;
    $onoffplat = $plat->active;
    $id_categorieplat = $plat->id_categorie;
    $prixplat = $plat->prix;
    $descplat = $plat->description;

    $platclass[$selectplat] = new _plat($idplatadd, $libelleplat, $imageplat, $onoffplat, $id_categorieplat, $prixplat, $descplat);
    
    if ($onoffplat == "Yes") {
        $platclass[$selectplat]->affplatonsite($rowplat, $selectplat, $platclass);
    } 
    $selectplatactif++;
    $selectplat++;
    if ($rowplat == 3) {
        $rowplat = 0;
    }
    $rowplat++;

}while($selectplatactif<countmaxplatcat($catplat));

echo '</div>';
echo '<div class="row my-2 mx-5 text-center row-cols-3">';
echo '<div class="col footerecart"></div>';


        





?>