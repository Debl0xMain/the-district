<?php
include_once('../../../src/sql/connect.php');
include_once('../../../src/sql/request.php');

$arr = [];


$arr[$selectpanier] = $value;

$selectpanier = 0;

do {

    foreach (cltpanier($selectpanier) as $panier);
    
    $prixcmd = $panier->prixcmd;

    array_push($arr,$prixcmd);

    $selectpanier++;

}while($selectpanier<cltpaniercount()); 

echo 'Vous avez paye ' .array_sum($arr). ' euro <br />';

//send mail
echo 'Votre commande : <br>';
$selectpanier = 0;
do {

    foreach (cltpanier($selectpanier) as $panier);
    
    $idcmdbdd = $panier->idcmd;
    $idplatcmd = $panier->idplat;
    $libellecmd = $panier->libelle; 
    $imagecmd = $panier->image;
    $prixcmd = $panier->prixcmd;
    $idusercmd = $panier->iduser;

    echo $libellecmd.'  '. $prixcmd .' euro <br>';
    $selectpanier++;

}while($selectpanier<cltpaniercount());



?>