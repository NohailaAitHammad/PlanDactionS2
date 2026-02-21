-- requete 1
SELECT c.nom, u.nom AS client, c.date_commande, c.statut
FROM utilisateurs u
INNER JOIN  commandes c
ON u.id = c.utilisayeur_id;
-- requete 2
SELECT u.nom, u.email
FROM utilisateurs u
LEFT JOIN commandes c
ON u.id = c.utilisateur_id
WHERE c.utilisateur_id is NULL;

-- requete 3
SELECT p.nom, p.prix, p.stock, c.libelle AS categorie
FROM categories c
INNER JOIN produits p
ON p.categorie_id = c.id;