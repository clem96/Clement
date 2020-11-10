1) SELECT `nomHotel`, `villeHotel` FROM `hotels`
2)SELECT `nomClient`, `prenomClient`, `adresseClient`, `villeClient` FROM `clients` WHERE `nomClient` = 'WHITE'
3)SELECT `nomStation`, `altitudeStation` FROM `stations` WHERE `altitudeStation` < 1000
4)SELECT `numChambre`, `capaciteChambre` FROM `chambres` WHERE `capaciteChambre` > 1
5)SELECT `nomClient`, `villeClient` FROM `clients` WHERE `villeClient` != "Londres"
6)SELECT nomStation, nomHotel, categorieHotel, villeHotel FROM `hotels` INNER JOIN stations ON stations.idStation = hotels.idHotel
7)SELECT `numChambre`, nomHotel, categorieHotel, villeHotel FROM `chambres` INNER JOIN hotels ON hotels.idHotel = chambres.`idHotel`
8)SELECT nomClient, `dateReservationSejour`, `dateDebutSejour`, `dateFinSejour` FROM `reservations` INNER JOIN clients ON clients.idClient = reservations.idClient
9)SELECT `numChambre`AS "N chambre", hotels.nomHotel AS "Nom hotel", stations.nomStation AS "Nom station" FROM `chambres` INNER JOIN hotels on hotels.idHotel = chambres.idHotel INNER JOIN stations ON stations.idStation = hotels.idHotel
10)SELECT hotels.nomHotel, hotels.categorieHotel, hotels.villeHotel, chambres.numChambre, chambres.capaciteChambre FROM `hotels` INNER JOIN chambres ON chambres.idHotel = hotels.idHotel WHERE `villeHotel` = "Bretou" AND chambres.capaciteChambre > 1
11)SELECT stations.nomStation AS "Nom station", COUNT(`idHotel`) AS "Nb hotel" FROM `hotels` INNER JOIN stations ON stations.idStation = hotels.idStation GROUP BY stations.idStation
12)SELECT stations.nomStation, COUNT(`IdChambre`) AS "Nb chambre" FROM `chambres` INNER JOIN hotels ON hotels.idHotel = chambres.idHotel INNER JOIN stations on stations.idStation = hotels.idHotel GROUP BY stations.idStation
13)SELECT stations.nomStation, COUNT(`IdChambre`) AS "Nb chambre" FROM `chambres` INNER JOIN hotels ON hotels.idHotel = chambres.idHotel INNER JOIN stations on stations.idStation = hotels.idHotel GROUP BY stations.idStation
14) ---SELECT hotels.nomHotel as"Resevation de Mr Squire" FROM `reservations` INNER JOIN clients ON clients.idClient = reservations.idClient INNER JOIN hotels ON hotels.idHotel = reservations.IdChambre WHERE clients.nomClient = "Squire"
15)---SELECT hotels.nomHotel as"Resevation de Mr Squire" FROM `reservations` INNER JOIN clients ON clients.idClient = reservations.idClient INNER JOIN hotels ON hotels.idHotel = reservations.IdChambre WHERE clients.nomClient = "Squire"
16)CREATE VIEW stationChambre AS SELECT * FROM stations
17)
18)ALTER TABLE `reservations` ADD `reservation` VARCHAR(50);
19)DELIMITER|
CREATE PROCEDURE archive()
BEGIN
if 
    UPDATE
        reservations|
    SET
        reservation = 'oui'|
END
DELIMITER;
20)
