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

function countmaxplat () {

    $db = connexionBase();
    $requete = $db->query("SELECT COUNT(*) AS maxint FROM plat");  
    $counttable = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($counttable as $categorie):
    $nbrplat = $categorie->maxint;
    endforeach;

    return $nbrplat;
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
    SELECT *
    FROM plat
    WHERE plat.id = (SELECT plat.id
                    FROM plat
                    JOIN commande on commande.id_plat = plat.id
                    order by plat.id=(SELECT plat.id
                                      FROM plat
                                      JOIN commande on commande.id_plat = plat.id
                                      group by plat.id
                                      order by SUM(commande.quantite) DESC
                                      LIMIT $selectplat,1) DESC LIMIT 0,1);
    ");
    $tableauplat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $tableauplat;
}

function affplatsite($selectplat) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT *
    FROM plat
    LIMIT $selectplat,1;
    ");
    $tableauplat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $tableauplat;
}

function affplatcat($selectplat,$catplat) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT *
    FROM plat
    WHERE id_categorie = $catplat
    LIMIT $selectplat,1
    ");
    $tableauplatcat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $tableauplatcat;
}

function countmaxplatcat($catplat) {

    $db = connexionBase();
    $requete = $db->query("SELECT COUNT(*) AS maxint FROM plat WHERE id_categorie = $catplat");  
    $counttable = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($counttable as $categorie):
    $nbrcatplat = $categorie->maxint;
    endforeach;

    return $nbrcatplat;
}

function search($searchplat) {

    $db = connexionBase();
    $requete = $db->query("SELECT libelle,description FROM plat LIMIT $searchplat,1");  
    $searchresult = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $searchresult;
}

?>