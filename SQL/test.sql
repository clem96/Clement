



CREATE DATABASE TEST

CREATE TABLE commune
(
idlogement int(11) not null auto_increment PRIMARY KEY,
commune varchar(50),
quartier varchar(50)
)MOTEUR = innodb, charset 'utf-8',


CREATE TABLE  quartier
(
idQuartier int(11) not null auto_increment PRIMARY KEY,
libelleQuartier varchar(100),
CONSTRAINT quartier_commune_FK (idquartier) REFERENCES commune(idquartier)
)moteur=innodb charste'utf-8',

CREATE TABLE logement
(
idLogement int(11) not null auto_increment PRIMARY KEY,
rueLogement varchar(50),
superficieLogement Double),
loyerLogement Double
constraint logement_quartier_FK (idLogement) references quartier(idLogement)
)moteur = innodb charset 'utf-8',
