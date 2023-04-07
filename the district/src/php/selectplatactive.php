<?php
include_once('./src/sql/connect.php');
//include_once('./src/sql/request.php');

$selectplat = 0;
$rowplat = 0;
$revealcount = 0;

do {

    if ($rowplat == 0) {
        echo '<div class="row my-2 mx-5 text-center row-cols-3">';
        $rowplat++;
    }

    if ($rowplat == 1 || $rowplat == 2 || $rowplat == 3) {
        
        foreach (affplat($selectplat) as $plat);

        $libelleplat = $plat->plat_libelle;
        $descplat = $plat->description;
        $imageplat = $plat->image;
        $prixplat = $plat->prix;
        $onoffplat = $plat->active;
        $id_categorieplat = $plat->id_categorie;
        $id_plat = $plat->id;

        
        if ($onoffplat == "Yes") {
            include('addplatonsite.php');
            $rowplat++;
        }

        $selectplat++;

    }

    if ($rowplat == 4) {
        echo "</div>";
        $rowplat = 0;
    }

}while($selectplat<3);



        





?>