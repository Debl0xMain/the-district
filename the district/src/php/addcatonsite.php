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




echo '  <div class="col '.$reveal.'">
            <div class="boxcat">
                <img class="catbackground" src="/src/img/category/'.$image.'" alt=" '.$libelle.' title="'.$libelle.'" " height="255px" width="255px">
                <p class="catname mx-auto">'.$libelle.'</p>
            </div>
        </div>'


?>