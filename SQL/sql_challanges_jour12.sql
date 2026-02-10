/* Challange 1 */
SELECT 
    nom_produit, 
    prix,
    CASE 
        WHEN prix < 50 THEN 'Bon marché'
        WHEN prix BETWEEN 50 AND 200 THEN 'Moyen de gamme'
        ELSE 'Haut de gamme'
    END AS categorie_prix
FROM produits;
/* Challange 2 */
SELECT DISTINCT nom_client
FROM clients
JOIN commandes ON clients.id = commandes.client_id
JOIN details_commande ON commandes.id = details_commande.commande_id
WHERE details_commande.prix_unitaire = (SELECT MAX(prix) FROM produits);
/* Challange 3 */
SELECT AVG(total_client) AS moyenne_gros_clients
FROM (
    SELECT client_id, SUM(montant) AS total_client
    FROM commandes
    GROUP BY client_id
    HAVING SUM(montant) > 1000
) AS clients_premium;
