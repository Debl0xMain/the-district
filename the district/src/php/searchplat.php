<?php

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');


$searchplat=0;
do {
    
    foreach (search($searchplat) as $search);

    $libellesearch[$searchplat] = $search->libelle;
    $descsearch[$searchplat] = $search->description;
    

    $searchplat++;
}while($searchplat<countmaxplat());

?>