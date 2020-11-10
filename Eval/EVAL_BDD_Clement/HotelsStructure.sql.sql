#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE "hotel",
USE "hotel",

#------------------------------------------------------------
# Table: station
#------------------------------------------------------------

CREATE TABLE station(
        idStation       Int  Auto_increment  NOT NULL PRIMARY KEY (idStation),
        nomStation      Varchar (50) NOT NULL ,
        altitudeStation Float 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hotel
#------------------------------------------------------------

CREATE TABLE hotel(
        idHotel        Int  Auto_increment  NOT NULL PRIMARY KEY (idHotel),
        nomHotel       Varchar (50)  ,
        categorieHotel Varchar (50)  ,
        addresseHotel  Varchar (50)  ,
        villeHotel     Varchar (50)  ,
        idStation      Int NOT NULL 

	,CONSTRAINT hotel_station_FK FOREIGN KEY (idStation) REFERENCES station(idStation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambre
#------------------------------------------------------------

CREATE TABLE chambre(
        idChambre       Int  Auto_increment  NOT NULL  PRIMARY KEY (idChambre) ,
        numeroChambre   Int ,
        typeChambre     Varchar (50) ,
        capaciteChambre Int 

	,CONSTRAINT chambre_hotel_FK FOREIGN KEY (idHotel) REFERENCES hotel(idHotel)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        idClient      Int  Auto_increment  NOT NULL  PRIMARY KEY (idClient) ,
        nomClient     Varchar (50) ,
        prenomClient  Varchar (50) ,
        adresseClient Varchar (50)  ,
        villeClient   Varchar (50) 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: loge
#------------------------------------------------------------

CREATE TABLE loge(
        idChambre       Int NOT NULL PRIMARY KEY (idChambre,idClient),
        idClient        Int  ,
        dateReservation Date  ,
        dateDebutSejour Date ,
        dateFinSejour   Date ,
        prixSejour      Float ,
        arrhes          Floa
	,CONSTRAINT loge_chambre_FK FOREIGN KEY (idChambre) REFERENCES chambre(idChambre)
	,CONSTRAINT loge_client0_FK FOREIGN KEY (idClient) REFERENCES client(idClient)
)ENGINE=InnoDB;

