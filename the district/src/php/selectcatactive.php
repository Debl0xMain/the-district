<?php
$selectcategorie = 0;
$revealcount = 0;

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');
include_once('./src/php/class/cat.class.php');

echo '<div class="row my-1 mx-5 text-center row-cols-lg-3">';

do {

        foreach (affcat($selectcategorie) as $cat);

        $libellecat = $cat->libelle;
        $imagecat = $cat->image;
        $onoffcat = $cat->active;
        $id_categoriecat = $cat->id;

        $categorisclass[$selectcategorie] = new _categorie($libellecat, $imagecat, $onoffcat, $id_categoriecat);
        var_dump($categorisclass);
        
        if ($onoffcat == "Yes") {
            include('addcatonsite.php');
        }

        $selectcategorie++;

}while($selectcategorie<countmaxcat());
echo "</div>";

?>