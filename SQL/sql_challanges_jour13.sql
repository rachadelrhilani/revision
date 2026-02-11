/* challange 1 */

SELECT ville, SUM(montant_total) AS chiffre_affaires
FROM commandes
JOIN clients ON commandes.client_id = clients.id
GROUP BY ville
ORDER BY chiffre_affaires DESC
LIMIT 3;

/* challange 2 */

SELECT nom_produit
FROM produits
LEFT JOIN details_commandes ON produits.id = details_commandes.produit_id
WHERE details_commandes.produit_id IS NULL;

/* challange 3 */

SELECT 
    c.nom, 
    COUNT(co.id) AS nombre_commandes, 
    SUM(co.montant_total) AS total_ventes
FROM clients c
JOIN commandes co ON c.id = co.client_id
GROUP BY c.id, c.nom
HAVING COUNT(co.id) > 1;

