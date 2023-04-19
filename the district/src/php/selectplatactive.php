<?php
$selectplat = 0;
$revealcount = 0;

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');

echo '<div class="row my-2 mx-5 text-center row-cols-3">';

do {

        foreach (affplat($selectplat) as $plat);

        $libelleplat = $plat->libelle;
        $descplat = $plat->description;
        $imageplat = $plat->image;
        $prixplat = $plat->prix;
        $onoffplat = $plat->active;
        $id_categorieplat = $plat->id_categorie;
        $id_plat = $plat->id;

        
        if ($onoffplat == "Yes") {
            echo 'plat active';
            include('addplatonsite.php');
            $rowplat++;
        }

        $selectplat++;

}while($selectplat<3);

echo '</div>';


        





?>