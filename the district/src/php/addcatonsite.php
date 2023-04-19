<?php

if ($row == 1) {
    $reveal = "reveal-left";
}
if ($row == 2) {
    $reveal = "reveal-top";
}
if ($row == 3) {
    $reveal = "reveal-right";
}

echo ' <div class="col '.$reveal.' boxsize">
            <div class="boxcat">
                <a class="animcategory" href="#">
                <img class="catbackground" src="/src/img/category/'.$categorisclass[$selectcategorie]->_image.'" alt=" '.$categorisclass[$selectcategorie]->_libelle.' "title="'.$categorisclass[$selectcategorie]->_libelle.'" height="255px" width="255px">
                <p class="catname mx-auto">'.$categorisclass[$selectcategorie]->_libelle.'</p>
                </a>
            </div>
        </div>'


?>