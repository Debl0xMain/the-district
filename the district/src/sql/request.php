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
    $requete = $db->query("SELECT libelle FROM plat LIMIT $searchplat,1");  
    $searchresult = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $searchresult;
}
function searchcat($searchcat) {

    $db = connexionBase();
    $requete = $db->query("SELECT libelle FROM categorie LIMIT $searchcat,1");  
    $searchresultcat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $searchresultcat;
}
function affplatsearch($selectplat,$search) {

    $db = connexionBase();
    $stmt = $db->prepare("SELECT * FROM plat WHERE libelle like :search_libelle LIMIT $selectplat,1 ");
    $stmt->bindValue(':search_libelle',"%".$search."%", PDO::PARAM_STR);
    $stmt->execute();
    $tableauplatcat = $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt->closeCursor();
    return $tableauplatcat;
}
function countaffplatsearch($search) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT count(*) as maxint
    FROM plat
    WHERE libelle like '%$search%' 
    ");
    $tableauplatcatcount = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($tableauplatcatcount as $count):
        $ncountplat = $count->maxint;
        endforeach;

    return $ncountplat;
}
function affcatsearch($selectcategorie,$search) {
    
    $db = connexionBase();
    $stmt = $db->prepare("SELECT * FROM categorie WHERE libelle like :search_libelle LIMIT $selectcategorie,1 ");
    $stmt->bindValue(':search_libelle',"%".$search."%", PDO::PARAM_STR);
    $stmt->execute();
    $tableauplatcat = $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt->closeCursor();
    return $tableauplatcat;
}

function countaffcatsearch($search) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT count(*) as maxint
    FROM categorie
    WHERE libelle like '%$search%' 
    ");
    $tableauplatcatcount = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($tableauplatcatcount as $count):
        $ncountplat = $count->maxint;
        endforeach;

    return $ncountplat;
}

function creatuser () {
    $db = connexionBase();
    $requete = $db->query("
    SELECT *
    FROM utilisateur
    ");
    $utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $utilisateur;

}
function loginemail ($email_clt) {

    $db = connexionBase();
    $stmt = $db->prepare("SELECT email from utilisateur where email = :email ;");
    $stmt->bindValue(':email',$email_clt, PDO::PARAM_STR);
    $stmt->execute();
    $email_bdd = $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt->closeCursor();
    return $email_bdd;
}

function password($email_clt) {

    $db = connexionBase();
    $stmt = $db->prepare("SELECT password from utilisateur where email = :email ;");
    $stmt->bindValue(':email',$email_clt, PDO::PARAM_STR);
    $stmt->execute();
    $password = $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt->closeCursor();
    foreach ($password as $pass):
        $passwordbdd = $pass->password;
        endforeach;
    return $passwordbdd ;
    
}
?>