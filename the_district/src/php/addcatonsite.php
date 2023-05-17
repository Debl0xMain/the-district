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

<form action="platcat.php" method="POST">
<button type="submit" class="animcategory btn">

            <div class="boxcat">
                <img class="catbackground" src="/src/img/category/'.$categorisclass[$selectcategorie]->_image.'" alt=" '.$categorisclass[$selectcategorie]->_libelle.' "title="'.$categorisclass[$selectcategorie]->_libelle.'" height="255px" width="255px">
                <p class="catname mx-auto">'.$categorisclass[$selectcategorie]->_libelle.'</p>
                <input type="hidden" value="'.$categorisclass[$selectcategorie]->_id_categorie.'" name="cat">
            </div>
</button>
</form>
        </div>'

?>