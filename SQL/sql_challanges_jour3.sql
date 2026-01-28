/* Challenge 1 : Nombre total de commandes */
SELECT COUNT(*) AS total_commandes 
FROM Commandes;

/* Challenge 2 : Prix moyen de tous les produits */
SELECT AVG(prix) AS prix_moyen 
FROM Produits;

/* Challenge 3 : Montant de la commande la plus chère */
SELECT MAX(montant) AS commande_max 
FROM Commandes;