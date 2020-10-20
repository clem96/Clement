#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Bataille
#------------------------------------------------------------

CREATE TABLE Bataille(
        idBataille        Int  Auto_increment  NOT NULL PRIMARY KEY,
        lieuBataille      Varchar (50) NOT NULL ,
        dateDebutBataille Date NOT NULL ,
        dateFinBataille   Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeBlessure
#------------------------------------------------------------

CREATE TABLE TypeBlessure(
        idBlessure      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleBlessure Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Grades
#------------------------------------------------------------

CREATE TABLE Grades(
        idGrades  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomGrades Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Unite
#------------------------------------------------------------

CREATE TABLE Unite(
        idUnite  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomUnite Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldat
#------------------------------------------------------------

CREATE TABLE Soldat(
        idSoldat  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomSoldat Varchar (50) NOT NULL ,
        dateDeces Date NOT NULL ,
        dateDebut Date NOT NULL ,
        dateFin   Date NOT NULL ,
        idUnite   Int NOT NULL

	,CONSTRAINT Soldat_Unite_FK FOREIGN KEY (idUnite) REFERENCES Unite(idUnite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Obtien
#------------------------------------------------------------

CREATE TABLE Obtien(
        idSoldat   Int NOT NULL Int  Auto_increment  NOT NULL PRIMARY KEY,,
        idGrades   Int NOT NULL ,
        dateGrades Date NOT NULL
	
	,CONSTRAINT Obtien_Soldat_FK FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat)
	,CONSTRAINT Obtien_Grades0_FK FOREIGN KEY (idGrades) REFERENCES Grades(idGrades)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participe
#------------------------------------------------------------

CREATE TABLE Participe(
        idUnite    Int NOT NULL Int  Auto_increment  NOT NULL PRIMARY KEY,
        idBataille Int NOT NULL
	,CONSTRAINT Participe_PK  (idUnite,idBataille)

	,CONSTRAINT Participe_Unite_FK FOREIGN KEY (idUnite) REFERENCES Unite(idUnite)
	,CONSTRAINT Participe_Bataille0_FK FOREIGN KEY (idBataille) REFERENCES Bataille(idBataille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Subit
#------------------------------------------------------------

CREATE TABLE Subit(
        idBlessure          Int NOT NULL PRIMARY KEY,
        idSoldat            Int NOT NULL ,
        dateBlessure        Date NOT NULL ,
        nomBatailleBlessure Varchar (50) NOT NULL

	,CONSTRAINT Subit_TypeBlessure_FK FOREIGN KEY (idBlessure) REFERENCES TypeBlessure(idBlessure)
	,CONSTRAINT Subit_Soldat0_FK FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat)
)ENGINE=InnoDB;

