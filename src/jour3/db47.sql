SELECT c.id AS commande ,u.nom, SUM(lc.quantite * lc.prix_unitaire) AS 'montant total'
FROM utilisateurs u
INNER JOIN lignes_commande lc
ON u.id = lc.utilisateur_id
INNER JOIN commandes c
ON c.id = lc.commande_id
GROUP BY c.id, u.id
ORDER BY total DESC;

-- requete 2
SELECT  u.nom, SUM(lc.quantite * lc.prix_unitaire) AS total
FROM utilisateurs u
         INNER JOIN commandes c
                    ON c.utilisateur_id = u.id
         INNER JOIN lignes_commande lc
                    ON c.id = lc.commande_id
GROUP BY u.id, u.nom
HAVING total > 150;