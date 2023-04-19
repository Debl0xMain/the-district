<?php
$selectcategorie = 0;
$revealcount = 0;

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');

echo '<div class="row my-1 mx-5 text-center row-cols-lg-3">';

do {

        foreach (affcat($selectcategorie) as $cat);

        $libelle = $cat->libelle;
        $image = $cat->image;
        $onoff = $cat->active;
        $id_categorie = $cat->id;

        
        if ($onoff == "Yes") {
            include('addcatonsite.php');
        }

        $selectcategorie++;

}while($selectcategorie<countmaxcat());
echo "</div>";

?>