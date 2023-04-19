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
    select *
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


?>