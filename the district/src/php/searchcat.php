<?php

include_once('./src/sql/connect.php');
include_once('./src/sql/request.php');


$searchcat=0;
do {
    
    foreach (searchcat($searchcat) as $search);

    $libellesearchcat[$searchcat] = $search->libelle;

    

    $searchcat++;
}while($searchcat<countmaxcat());

?>