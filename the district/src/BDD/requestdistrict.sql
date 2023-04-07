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




