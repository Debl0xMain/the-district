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
echo "<h1>sa fonctionne</h1>";
echo ' <div class="'.$reveal.' boxsize">
            <div class="boxcat">
                <a class="animcategory" href="#">
                <img class="catbackground" src="./src/img/food/'.$platclass[$selectplat]->_image.'" alt=" '.$platclass[$selectplat]->_libelle.' title="'.$platclass[$selectplat]->_libelle.'">
                <p class="platname mx-auto">'.$platclass[$selectplat]->_libelle .'</p>
                <p class="platname mx-auto">'.$platclass[$selectplat]->_prixplat .'</p>
                <p class="platname mx-auto">'.$platclass[$selectplat]->_descplat .'</p>
                </a>
            </div>
        </div>'

?>