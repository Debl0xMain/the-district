USE `the_district`;

SELECT *
FROM categorie
order by id desc;

    SELECT plat.libelle , SUM(commande.quantite) as trie3
    FROM plat
    JOIN commande on commande.id_plat = plat.id
    group by plat.libelle
    order by trie3;

;

"Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.";
INSERT into categorie (id,libelle,image,active)
values ("50","Pizza","pizza_cat.jpg","Yes")
AND

INSERT into plat (id,libelle,description,prix,image,@@IDENTITY,active)
VALUES ("40","District Burger","Burger","8.00","hamburger.jpg","5","Yes");


"Liste des plats les plus vendus par ordre décroissant";
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
                                         LIMIT 0,1) DESC LIMIT 0,1);

                                         

"Ecrivez une requête permettant de supprimer les plats non actif de la base de données";
DELETE from plat where active = "No";
"Ecrivez une requête permettant de supprimer les commandes avec le statut livré";
Delete from commande where etat = "Livrée";

"Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'";
Update plat
set plat.prix = plat.prix * 0.1
where plat.id_categorie = (select categorie.id
    from categorie
    where categorie.libelle = "Pizza" );

    SELECT *
    FROM plat
    WHERE id_categorie = 5
    LIMIT 0,1;

    select *
    FROM plat;
    SELECT libelle,description FROM plat;