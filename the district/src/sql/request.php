<?php


function countmaxcat () {

    $db = connexionBase();
    $requete = $db->query("SELECT COUNT(*) AS maxint FROM categorie");  
    $counttable = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($counttable as $categorie):
    $nbrcategorie = $categorie->maxint;
    endforeach;

    return $nbrcategorie;
}

function affcat($selectcategorie) {

    $db = connexionBase();
    $requete = $db->query("
        SELECT *
        FROM categorie
        Limit $selectcategorie,1
        ");
    $tableauaffcat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $tableauaffcat;
}

function affplat($selectplat) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT plat.libelle , SUM(commande.quantite) as trie3
    FROM plat
    JOIN commande on commande.id_plat = plat.id
    group by plat.libelle
    order by trie3 DESC
    LIMIT $selectplat,1
    ");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $tableau;
}




?>