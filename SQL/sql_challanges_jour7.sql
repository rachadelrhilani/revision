/* Challenge 1 : INNER JOIN (Commandes & Clients) */
SELECT Commandes.id, Clients.nom
FROM Commandes
INNER JOIN Clients ON Commandes.client_id = Clients.id;
/* Challenge 2 : LEFT JOIN (Tous les clients + Commandes) */
SELECT Clients.nom, Commandes.montant
FROM Clients
LEFT JOIN Commandes ON Clients.id = Commandes.client_id;
/* Challenge 3 : JOIN 3 tables (Détails complets) */
SELECT 
    Clients.nom AS nom_client, 
    Produits.nom AS nom_produit, 
    Lignes_Commandes.quantite
FROM Clients
INNER JOIN Commandes ON Clients.id = Commandes.client_id
INNER JOIN Lignes_Commandes ON Commandes.id = Lignes_Commandes.commande_id
INNER JOIN Produits ON Lignes_Commandes.produit_id = Produits.id;
