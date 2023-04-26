<?php
$search = $_POST['resultsearch'];

///
$selectplat = 0;
$revealcount = 0;
$rowplat = 1;
$selectplatactif = 0;
$selectcategorie = 0;
$reveal = 0;
$row = 1;
//plat
include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');
include_once('./src/php/class/plat.class.php');

echo '<div class="row mt-5 mx-5 text-center row-cols-1">';
echo '<div class="col platmv"><p>Search plat : </p></div>';
echo '</div>';
echo '<div class="row mt-2 mx-5 text-center row-cols-3">';

do {
    
    foreach (affplatsearch($selectplat,$search) as $plat);

    $libelleplat = $plat->libelle;
    $imageplat = $plat->image;
    $onoffplat = $plat->active;
    $id_categorieplat = $plat->id_categorie;
    $prixplat = $plat->prix;
    $descplat = $plat->description;
    

    $platclass[$selectplat] = new _plat($libelleplat, $imageplat, $onoffplat, $id_categorieplat, $prixplat, $descplat);
    
    if ($onoffplat == "Yes") {
        $platclass[$selectplat]->affplatonsite($rowplat, $selectplat, $platclass);
    } 
    $selectplatactif++;
    $selectplat++;
    if ($rowplat == 3) {
        $rowplat = 0;
    }
    $rowplat++;

}while($selectplatactif<countaffplatsearch($search));
echo '</div>';
include_once('./src/php/class/cat.class.php');
//Categorie
echo '<div class="row my-5 mx-5 text-center row-cols-1">';
echo '</div>';
echo '<div class="row my-5 mx-5 text-center row-cols-1">';
echo '<div class="col my-5 platmv"><p>Search categorie : </p></div>';
echo '</div>';
echo '<div class="row my-1 mx-5 text-center row-cols-lg-3">';

do {

        foreach (affcatsearch($selectcategorie,$search) as $cat);

        $libellecat = $cat->libelle;
        $imagecat = $cat->image;
        $onoffcat = $cat->active;
        $id_categoriecat = $cat->id;

        $categorisclass[$selectcategorie] = new _categorie($libellecat, $imagecat, $onoffcat, $id_categoriecat);

        
        if ($onoffcat == "Yes") {
            $categorisclass[$selectcategorie]->affcatonsite($row,$selectcategorie,$categorisclass);
        }

        $selectcategorie++;
        if ($row == 3) {
            $row = 0;
        }
        $row++;
}while($selectcategorie<countaffcatsearch($search));
echo "</div>";

echo '</div>';
echo '<div class="row my-2 mx-5 text-center row-cols-3">';
echo '<div class="col footerecart"></div>';


    

?>