USE `the_district`;


JOIN plat
ON plat.id_categorie = categorie.id
JOIN commande
on command.id_plat = plat.id;

SELECT *
FROM categorie
order by id desc;

    SELECT plat.libelle , SUM(commande.quantite) as trie3
    FROM plat
    JOIN commande on commande.id_plat = plat.id
    group by plat.libelle
    order by trie3 DESC
    LIMIT 0,3
;


INSERT into categorie (id,libelle,image,active)
values ("50","Pizza","pizza_cat.jpg","Yes")
AND

INSERT into plat (id,libelle,description,prix,image,@@IDENTITY,active)
VALUES ("40","District Burger","Burger","8.00","hamburger.jpg","5","Yes");

    SELECT plat.id, SUM(commande.quantite) as trie3
    FROM plat
    JOIN commande on commande.id_plat = plat.id
    group by plat.id
    order by trie3 DESC
    LIMIT 3,1;

    select *
    FROM plat
    WHERE id = 5;

    SELECT *
    from plat;

                SELECT plat.libelle,plat.id as 'id a avoir', SUM(commande.quantite) as trie3
                FROM plat
                JOIN commande on commande.id_plat = plat.id
                group by plat.id
                order by trie3 DESC
                LIMIT 2,1;


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

        SELECT *
        FROM plat
        where id = ();


