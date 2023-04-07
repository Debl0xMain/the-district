<?php
$selectcategorie = 0;
$row = 0;
$revealcount = 0;

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');

do {

    if ($row == 0) {
        echo '<div class="row my-1 mx-5 text-center row-cols-3">';
        $row++;
    }

    if ($row == 1 || $row == 2 || $row == 3) {
        
        foreach (affcat($selectcategorie) as $cat);

        $libelle = $cat->libelle;
        $image = $cat->image;
        $onoff = $cat->active;
        $id_categorie = $cat->id;

        
        if ($onoff == "Yes") {
            include('addcatonsite.php');
            $row++;
        }

        $selectcategorie++;

    }

    if ($row == 4) {
        echo "</div>";
        $row = 0;
    }

}while($selectcategorie<countmaxcat());



        





?>