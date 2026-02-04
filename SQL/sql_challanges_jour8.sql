/* Challenges Pratiques
Challenge 1 : CA par client */
SELECT client, SUM(prix) 
FROM ventes 
GROUP BY client;

/* Challenge 2 : Trier par prix (cher au moins cher) */
SELECT * 
FROM produits 
ORDER BY prix DESC;


/* Challenge 3 : Plus de 2 commandes */
SELECT client 
FROM commandes 
GROUP BY client 
HAVING COUNT(*) > 2;