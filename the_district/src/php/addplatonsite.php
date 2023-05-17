<?php

if ($rowplat == 1) {
    $reveal = "reveal-left";
}
if ($rowplat == 2) {
    $reveal = "reveal-top";
}
if ($rowplat == 3) {
    $reveal = "reveal-right";
}

echo ' <div class="'.$reveal.' mychange boxsize">
            <div class="boxcat">
                <a class="animcategory" href="#">
                <img class="catbackground" src="./src/img/plat/'.$platclass[$selectplat]->_imageplat.'" alt=" '.$platclass[$selectplat]->_libelleplat.'" title="'.$platclass[$selectplat]->_libelleplat.'">
                <p class="platname mx-auto">'.$platclass[$selectplat]->_libelleplat .'</p>
                <p class="platprix mx-auto">'.$platclass[$selectplat]->_prixplat .'€</p>
                <p class="platdesc mx-auto">'.$platclass[$selectplat]->_descplat .'</p>
                </a>
            </div>

            <div class="btnaddshop">
                <form action="./src/php/shoping/formshopping.php" method="POST">
                    <input hidden name="idplatform" type="text" value="'.$platclass[$selectplat]->_idplatadd.'">
                        <button type="submit" class="btn btn-outline-light btnaddsubmit" title="Ajouté au panier">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                </form>
            </div>
        </div>'

?>