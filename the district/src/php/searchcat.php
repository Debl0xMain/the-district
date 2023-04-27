<?php

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');


$searchcat=0;
$searchplat=0;

do {
    
    foreach (searchcat($searchcat) as $search);

    $libellesearchcat[$searchcat] = $search->libelle;

    $searchcat++;

}while($searchcat<countmaxcat());

do {
    
    foreach (search($searchplat) as $searchplattb);

    $libellesearchplat[$searchplat] = $searchplattb->libelle;

    $searchplat++;
    
}while($searchplat<countmaxplat());

?>