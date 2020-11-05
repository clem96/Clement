CREATE DATABASE Camping;
USE Camping;


CREATE TABLE Client(
        idClient        Int  Auto_increment PRIMARY KEY NOT NULL ,
        nomClient       Varchar (50) NOT NULL ,
        prenomClient    Varchar (50) NOT NULL ,
        adresseClient   Varchar (50) NOT NULL ,
        telephoneClient Int NOT NULL ,
        mailClient      Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Camping
#------------------------------------------------------------

CREATE TABLE Camping(
        idCamping Int  Auto_increment PRIMARY KEY NOT NULL
)ENGINE=InnoDB;



CREATE TABLE Activite(
        idActivite   Int  Auto_increment  PRIMARY KEY NOT NULL ,
        nomActivite  Varchar (50) NOT NULL ,
        zoneActivite Varchar (50) NOT NULL ,
        prixActivite Double NOT NULL ,
        idCamping    Int NOT NULL
)ENGINE=InnoDB;




CREATE TABLE Emplacement(
        idEmplacement           Int  Auto_increment PRIMARY KEY  NOT NULL ,
        numeroEmplacement       Int NOT NULL ,
        typeEmplacement         Varchar (50) NOT NULL ,
        zoneEmplacement         Varchar (50) NOT NULL ,
        situationEmplacement    varchar(50),
        raccordementEmplacement varchar(50),
        parkingEmplacement      varchar(50),
        compteurArrive          Int NOT NULL ,
        compteurDepart          Int NOT NULL ,
        idCamping               Int NOT NULL ,
        idReservation           Int NOT NULL
)ENGINE=InnoDB;




CREATE TABLE Reservation(
        idReservation                 Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        dateEnregistrementReservation Date NOT NULL ,
        dateDebutReservation          Date NOT NULL ,
        dateFinReservation            Date NOT NULL ,
        compteurArrive                Int NOT NULL ,
        compteurDepart                Int NOT NULL ,
        idEmplacement                 Int NOT NULL ,
        idClient                      Int NOT NULL
)ENGINE=InnoDB;




ALTER TABLE Activite
	ADD CONSTRAINT Activite_Camping0_FK
	FOREIGN KEY (idCamping)
	REFERENCES Camping(idCamping);

ALTER TABLE Emplacement
	ADD CONSTRAINT Emplacement_Camping0_FK
	FOREIGN KEY (idCamping)
	REFERENCES Camping(idCamping);

ALTER TABLE Emplacement
	ADD CONSTRAINT Emplacement_Reservation1_FK
	FOREIGN KEY (idReservation)
	REFERENCES Reservation(idReservation);

ALTER TABLE Emplacement 
	ADD CONSTRAINT Emplacement_Reservation0_AK 
	UNIQUE (idReservation);

ALTER TABLE Reservation
	ADD CONSTRAINT Reservation_Emplacement0_FK
	FOREIGN KEY (idEmplacement)
	REFERENCES Emplacement(idEmplacement);

ALTER TABLE Reservation
	ADD CONSTRAINT Reservation_Client1_FK
	FOREIGN KEY (idClient)
	REFERENCES Client(idClient);

ALTER TABLE Reservation 
	ADD CONSTRAINT Reservation_Emplacement0_AK 
	UNIQUE (idEmplacement);
