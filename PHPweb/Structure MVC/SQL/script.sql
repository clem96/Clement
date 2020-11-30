DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduits` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `dateDePeremption` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`IdProduits`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(1, 'gomme', 2, '25/01/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(2, 'stylo', 2, '25/01/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(3, 'crayons', 1, '17/20/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(4, 'regle', 1, '17/20/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(5, 'feutre', 5, '25/01/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(6, 'pot', 2, '25/01/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(7, 'cahier', 1, '17/20/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(8, 'livre', 2, '25/01/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(9, 'papier', 1, '17/20/2020');
INSERT INTO `produits` (`IdProduits`, `libelle`, `prix`, `dateDePeremption`) VALUES(10, 'equerre', 5, '2');


DROP TABLE IF EXISTS `Clients`;
CREATE TABLE IF NOT EXISTS `Clients` (
  `idClients` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11)  NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES (1, 'Rochar', 'jean', 28);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(2, 'Rochar', 'luc', 35);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(3, 'dupont', 'Marie', 28);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(4, 'Laporte', 'Patrick', 58);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(5, 'Poiraux', 'jean-Marc', 88);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(6, 'Bac', 'Allan', 48);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(7, 'Roger', 'Sebatien', 68);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(8, 'Zing', 'Lie', 38);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(9, 'Charpentier', 'Francois', 27);
INSERT INTO `Clients` (`idClients`, `nom`, `prenom`, `age`) VALUES(10, 'Pablosik', 'Piero', 25)