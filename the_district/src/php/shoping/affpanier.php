<?php
include_once('../../sql/connect.php');
include_once('../../sql/request.php');
$selectpanier = 0;
session_start();
if ($_SESSION['user'] != NULL) {

    $userid = $_SESSION['iduser'];
    $idsesionid = $_SESSION['iduser'];
 }
 else {
    $userid = 999;
    $idsesionid = 999;
 }


if (cltpaniercount($idsesionid)>=1) { 
do {

    foreach (cltpanier($selectpanier,$userid) as $panier);
    
    $idcmdbdd = $panier->idcmd;
    $idplatcmd = $panier->idplat;
    $libellecmd = $panier->libelle; 
    $imagecmd = $panier->image;
    $prixcmd = $panier->prixcmd;
    $idusercmd = $panier->iduser;

    echo '
    <div class="row rows-col-4 panierrow">
    <div class="col my-auto"><img class="panierimg" src="./src/img/plat/'.$imagecmd.'" alt="'.$imagecmd.'" height="32px" width="32px"></div>
        <div class="col my-auto panierlibelle"><p>'.$libellecmd.'</p></div>
        <div class="col my-auto panierprix"><p>'.$prixcmd.'</p></div>
        <div class="col my-auto paniersup">
            <form action="./src/php/shoping/deleterow.php" method="POST">
                <button name="user" class="btn" type="submit" value="'.$idusercmd.'"><i class="fa-solid fa-trash"></i></button>
                <input hidden name="idcmd" type="text" value="'.$idcmdbdd .'">
            </form>
        </div>
    </div>';
    $selectpanier++;

}while($selectpanier<cltpaniercount( $idsesionid));
}
?>


