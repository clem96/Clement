
CREATE TABLE IF NOT EXISTS Stations(
        idStation       int (11) Auto_increment  NOT NULL ,
        nomStation      Varchar (25) NOT NULL ,
        altitudeStation Int NOT NULL ,
        PRIMARY KEY (idStation )
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS Hotels(
        idHotel        int (11) Auto_increment  NOT NULL ,
        nomHotel       Varchar (25) NOT NULL ,
        categorieHotel Int NOT NULL ,
        adresseHotel   Varchar (25) NOT NULL ,
        villeHotel     Varchar (25) NOT NULL ,
        idStation      Int NOT NULL ,
        PRIMARY KEY (idHotel )
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS Chambres(
		IdChambre		Int NOT NULL ,
        numChambre      Int NOT NULL ,
        typeChambre     Int NOT NULL ,
        capaciteChambre Int NOT NULL ,
        idHotel         Int NOT NULL ,
        PRIMARY KEY (IdChambre )
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS Clients(
        idClient      int (11) Auto_increment  NOT NULL ,
        nomClient     Varchar (25) NOT NULL ,
        prenomClient  Varchar (25) NOT NULL ,
        adresseClient Varchar (250) NOT NULL ,
        villeClient   Varchar (25) NOT NULL ,
        PRIMARY KEY (idClient )
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS Reservations(
		idReservation int (11) Auto_increment NOT NULL ,
        dateReservationSejour Date NOT NULL ,
        dateDebutSejour       Date NOT NULL ,
        dateFinSejour         Date NOT NULL ,
        prixSejour            Int NOT NULL ,
        arrhesSejour          Int NOT NULL ,
        idClient              Int NOT NULL ,
        IdChambre            Int NOT NULL ,
        PRIMARY KEY (idReservation )
)ENGINE=InnoDB;

ALTER TABLE Hotels ADD CONSTRAINT FK_Hotels_idStation FOREIGN KEY (idStation) REFERENCES Stations(idStation);
ALTER TABLE Chambres ADD CONSTRAINT FK_Chambres_idHotel FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel);
ALTER TABLE Reservations ADD CONSTRAINT FK_reservation_idClient FOREIGN KEY (idClient) REFERENCES Clients(idClient);
ALTER TABLE Reservations ADD CONSTRAINT FK_reservation_IdChambre FOREIGN KEY (IdChambre) REFERENCES Chambres(IdChambre);



INSERT INTO `stations`  VALUES(1, 'La Montagne', 2500);
INSERT INTO `stations`  VALUES(2, 'Le Sud', 200);
INSERT INTO `stations`  VALUES(3, 'La Plage', 10);
INSERT INTO `stations`  VALUES(4, 'Alpe d Huez', 1860);
INSERT INTO `stations`  VALUES(5, 'Areches', 1200);
INSERT INTO `stations`  VALUES(6, 'Beaufort', 1200);
INSERT INTO `stations`  VALUES(7, 'Aussois', 1500);
INSERT INTO `stations`  VALUES(8, 'Avoriaz', 1800);

INSERT INTO `clients`  VALUES(1, 'DOE', 'John', 'Rue Du General Leclerc', 'Chatenay Malabry');
INSERT INTO `clients`  VALUES(2, 'HOMME', 'Josh', 'Rue Danton', 'Palm Desert');
INSERT INTO `clients`  VALUES(3, 'PAUL', 'Weller', 'Rue Hoche', 'Londres');
INSERT INTO `clients`  VALUES(4, 'WHITE', 'Jack', 'Allee Gustave Eiffel', 'Detroit');
INSERT INTO `clients`  VALUES(5, 'CLAYPOOL', 'Les', 'Rue Jean Pierre Timbaud', 'San Francisco');
INSERT INTO `clients`  VALUES(6, 'SQUIRE', 'Chris', 'Place Paul Vaillant Couturier', 'Londres');
INSERT INTO `clients`  VALUES(7, 'WOOD', 'Ronnie', 'Rue Erevan', 'Londres');
INSERT INTO `clients`  VALUES(8, 'THUNDERS', 'Johnny', 'Rue Du General Leclerc', 'New York');
INSERT INTO `clients`  VALUES(9, 'JEUNEMAITRE', 'Eric', 'Rue Du General Leclerc', 'Chaville');
INSERT INTO `clients`  VALUES(10, 'KARAM', 'Patrick', 'Rue Danton', 'Courbevoie');
INSERT INTO `clients`  VALUES(11, 'RUFET', 'Corinne', 'Rue Hoche', 'Le Plessis Robinson');
INSERT INTO `clients`  VALUES(12, 'SAINT JUST ', 'Wallerand', 'Allee Gustave Eiffel', 'Marnes La Coquette');
INSERT INTO `clients`  VALUES(13, 'SANTINI', 'Jean-Luc', 'Rue Jean Pierre Timbaud', 'Chatenay Malabry');
INSERT INTO `clients`  VALUES(14, 'AIT', 'Eddie', 'Place Paul Vaillant Couturier', 'Le Plessis Robinson');
INSERT INTO `clients`  VALUES(15, 'BARBOTIN', 'Eddie', 'Rue Erevan', 'Chatenay Malabry');
INSERT INTO `clients`  VALUES(16, 'BERESSI', 'Isabelle', 'Rue Du General Leclerc', 'Londres');
INSERT INTO `clients`  VALUES(17, 'CAMARA', 'Lamine', 'Rue Ernest Renan', 'Antony');
INSERT INTO `clients`  VALUES(18, 'CECCONI', 'Frank', 'Rue Georges Marie', 'Chatenay Malabry');
INSERT INTO `clients`  VALUES(19, 'CHEVRON', 'Eric', 'Boulevard Gallieni', 'Suresnes');
INSERT INTO `clients`  VALUES(20, 'CIUNTU', 'Marie-Carole', 'Esplanade Du Belvedere', 'Meudon');

INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)  VALUES(1, 1, 'Le Magnifique', 3, 'rue du bas', 'Pralo');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(2, 1, 'Hotel du haut', 1, 'rue du haut', 'Pralo');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(3, 2, 'Le Narval', 3, 'place de la liberation', 'Vonten');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(4, 2, 'Les Pissenlis', 4, 'place du 14 juillet', 'Bretou');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(5, 2, 'RR Hotel', 5, 'place du bas', 'Bretou');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(6, 2, 'La Brique', 2, 'place du haut', 'Bretou');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(7, 3, 'Le Beau Rivage', 3, 'place du centre', 'Toras');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(8, 6, 'Résidence les marmottes', 1, '1 Chemin des randonneurs', 'Alpe d Huez');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(9, 2, 'Résidence les edelweiss', 5, '2 Rue des sapins', 'Areches');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(10, 2, 'Résidence les panoramas', 4, '7 Avenue de la neige', 'Beaufort');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(11, 4, 'Résidence les sapins', 5, '8 Chemin des pissenlits', 'Aussois');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(12, 3, 'Chalets les marmottes', 3, '10 Rue des etables', 'Avoriaz');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(13, 8, 'Chalets les edelweiss', 3, '8 Avenue des sapins', 'Alpe d Huez');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(14, 6, 'Chalets les panoramas', 2, '3 Chemin de la neige', 'Areches');
INSERT INTO `hotels`(`idHotel`, `idStation`,`nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`)   VALUES(15, 8, 'Chalets les sapins', 5, '3 Rue des pissenlits', 'Beaufort');

INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(1, 1, 101, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(2, 1, 102, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(3, 1, 103, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(4, 2, 104, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(5, 2, 105, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(6, 2, 106, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(7, 3, 107, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(8, 3, 108, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(9, 3, 109, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(10, 4, 235, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(11, 4, 157, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(12, 7, 874, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(13, 7, 125, 5, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(14, 6, 101, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(15, 6, 102, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(16, 10, 103, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(17, 15, 104, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(18, 6, 105, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(19, 15, 106, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(20, 11, 107, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(21, 13, 108, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(22, 10, 109, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(23, 12, 235, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(24, 11, 157, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(25, 7, 874, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(26, 9, 125, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(27, 8, 101, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(28, 15, 102, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(29, 11, 103, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(30, 11, 104, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(31, 13, 105, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(32, 15, 106, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(33, 12, 107, 2, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(34, 9, 108, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(35, 13, 109, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(36, 8, 235, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(37, 14, 157, 3, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(38, 8, 874, 1, 1);
INSERT INTO `chambres` (`IdChambre`,`idHotel`, `numChambre`, `capaciteChambre`,`typeChambre` ) VALUES(39, 10, 125, 2, 1);

INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(4, 1,3, '2019-11-4', '2019-11-13', '2019-11-17', 400, 50);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(3, 1,1, '2019-4-20', '2019-5-7', '2019-5-9', 2400, 800);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(5, 2,2, '2020-1-11', '2020-2-12', '2020-2-18', 3400, 100);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(6, 2,4, '2019-6-19', '2019-8-5', '2019-8-18', 7200, 180);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(7, 3,5, '2019-4-2', '2019-4-29', '2019-5-3', 1400, 450);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(8, 4,6, '2019-10-20', '2019-12-1', '2019-12-15', 2400, 780);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(9, 4,6, '2019-2-27', '2019-3-31', '2019-4-4', 500, 80);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(10, 4,8, '2019-7-21', '2019-8-16', '2019-8-16', 40, 0);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(11, 8,15, '2019-10-12', '2019-11-23', '2019-11-29', 580, 58);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(12, 9,17, '2019-12-22', '2020-1-27', '2020-1-30', 140, 14);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(13, 8,15, '2019-7-21', '2019-8-18', '2019-8-21', 360, 36);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(14, 4,20, '2019-1-10', '2019-2-20', '2019-3-1', 1380, 138);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(15, 13,16, '2019-4-9', '2019-4-17', '2019-5-2', 420, 42);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(16, 13,16, '2019-5-21', '2019-6-13', '2019-6-26', 360, 36);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(17, 12,1, '2019-7-26', '2019-8-9', '2019-8-20', 680, 68);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(18, 21,15, '2019-11-29', '2019-11-30', '2019-12-14', 1280, 128);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(19, 14,19, '2019-3-12', '2019-4-6', '2019-4-9', 420, 42);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(20, 24,12, '2019-1-17', '2019-1-24', '2019-1-28', 260, 26);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(21, 12,9, '2020-1-2', '2020-2-15', '2020-2-24', 1380, 138);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(22, 4,12, '2019-9-10', '2019-9-24', '2019-10-1', 1430, 143);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(23, 23,1, '2019-5-11', '2019-6-10', '2019-6-14', 820, 82);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(24, 10,11, '2019-10-21', '2019-10-24', '2019-10-31', 650, 65);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(25, 20,14, '2020-1-12', '2020-3-4', '2020-3-9', 1290, 129);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(26, 15,19, '2019-4-2', '2019-5-2', '2019-5-9', 1030, 103);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(27, 17,17, '2019-1-4', '2019-2-15', '2019-2-25', 470, 47);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(28, 14,16, '2019-5-17', '2019-5-31', '2019-6-3', 1460, 146);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(29, 21,6, '2019-4-12', '2019-5-23', '2019-5-28', 1310, 131);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(30, 20,9, '2019-6-26', '2019-7-15', '2019-7-21', 460, 46);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(31, 18,17, '2019-4-9', '2019-5-23', '2019-5-27', 350, 35);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(32, 23,14, '2019-6-14', '2019-8-2', '2019-8-4', 890, 89);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(33, 12,14, '2019-3-6', '2019-3-23', '2019-3-31', 1440, 144);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(34, 19,17, '2019-3-27', '2019-4-29', '2019-5-7', 1010, 101);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(35, 16,13, '2019-2-11', '2019-3-8', '2019-3-22', 790, 79);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(36, 2,5, '2019-4-15', '2019-4-23', '2019-5-4', 270, 27);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(37, 19,19, '2019-3-25', '2019-5-2', '2019-5-16', 660, 66);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(38, 4,13, '2019-5-1', '2019-6-14', '2019-6-18', 140, 14);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(39, 19,14, '2020-1-10', '2020-2-24', '2020-2-29', 1460, 146);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(40, 4,6, '2019-11-24', '2019-11-30', '2019-12-1', 790, 79);
INSERT INTO `reservations`(`idReservation`,  `IdChambre` , `idClient`,`dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`) VALUES(41, 20,15, '2020-1-13', '2020-1-30', '2020-2-14', 390, 39);
