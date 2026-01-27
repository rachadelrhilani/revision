/* challange 1 */
CREATE DATABASE challangeSql;
USE challangeSql;
CREATE TABLE Produits(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50),
    prix float,
    stock INT
);
/* challange 2 */
INSERT INTO Produits (nom, prix, stock) VALUES 
('Ordinateur Portable', 7500.00, 15),
('Souris Sans Fil', 150.00, 50),
('Clavier Mécanique', 450.00, 0)
/* challange 3 */
/* 1) */UPDATE Produits 
SET prix = prix * 1.10 
WHERE id = 1;
/* 2) */
DELETE FROM Produits 
WHERE stock = 0;