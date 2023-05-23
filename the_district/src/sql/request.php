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

function id_useradd () {

    $db = connexionBase();
    $requete = $db->query("
    SELECT id AS 'maxid'
    FROM utilisateur
    ORDER BY id DESC
    LIMIT 1;
    ");
    $iduser = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    foreach ($iduser as $countid):
        $idadd = $countid->maxid;
        endforeach;
        $idfinal = $idadd +1;
    return $idfinal;

}


function inscription ($name,$imail,$password,$imgupload) {

    $db = connexionBase();

    $requete = $db->prepare("INSERT INTO utilisateur (nom_prenom, email, password, imgprofil)
    VALUES (:name, :imail, :password, :picture);");

    $requete->bindValue(":name", $name, PDO::PARAM_STR);
    $requete->bindValue(":imail", $imail, PDO::PARAM_STR);
    $requete->bindValue(":password", $password, PDO::PARAM_STR); 
    $requete->bindValue(":picture", $imgupload, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();
}

function addpanier($idplatcmd) {

    $db = connexionBase();
    $requete = $db->query("
    SELECT id,libelle,prix,image
    FROM plat
    WHERE id = $idplatcmd
    ");
    $platpanier = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $platpanier;

}
function addpanierbdd ($idplatcmd,$libellecmd,$imagecmd,$prixcmd,$idusercmd) {

    $db = connexionBase();

    $requete = $db->prepare("INSERT into shop (idplat,libelle,image,prixcmd,iduser)
    VALUES (:idplat,:libelle,:imagecmd,:prixcmd,:idusercmd);");

    $requete->bindValue(":idplat", $idplatcmd, PDO::PARAM_STR);
    $requete->bindValue(":libelle", $libellecmd, PDO::PARAM_STR);
    $requete->bindValue(":imagecmd", $imagecmd, PDO::PARAM_STR); 
    $requete->bindValue(":prixcmd", $prixcmd, PDO::PARAM_STR);
    $requete->bindValue(":idusercmd", $idusercmd, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();

}

function cltpanier($selectpanier) {

    $db = connexionBase();
    $requete = $db->query("
    select *
    from shop
    where iduser = 1
    LIMIT $selectpanier,1;
    ");
    $cltpanier = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $cltpanier;

}

function cltpaniercount() {

    $db = connexionBase();
    $requete = $db->query("
    select count(*) as maxint
    from shop
    where iduser = 1
    ");
    $tableauncountpanier = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    foreach ($tableauncountpanier as $count):
        $ncountpanier = $count->maxint;
    endforeach;

    return $ncountpanier;

}

function suppanierbdd ($idplatcmd,$userid) {

    $db = connexionBase();

    $requete = $db->prepare("DELETE
    from shop
    where iduser = :idusercmd
    AND idcmd = :idplatcmd
    ;");

    $requete->bindValue(":idusercmd", $userid, PDO::PARAM_STR);
    $requete->bindValue(":idplatcmd", $idplatcmd, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();

}

function cmdvld ($userid) {

    $db = connexionBase();

    $requete = $db->prepare("DELETE
    from shop
    where iduser = :idusercmd
    ;");

    $requete->bindValue(":idusercmd", $userid, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();

}

function selectid($email_clt) {

    $db = connexionBase();
    $requete = $db->prepare("SELECT *
    FROM utilisateur
    WHERE email = :email_clt
    ;");
    $requete->bindValue(":email_clt", $email_clt, PDO::PARAM_STR);
    $requete->execute();
    $idsession = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    return $idsession;






}

?>