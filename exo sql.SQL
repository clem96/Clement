6) Select nom Ndep from employe where titre = "secretaire"
7)select nom, ndep, from employe where Ndep > 40 ORDERBY nodep 
8)select nom, prenom from employe where 
9)select nom, salaire, ndep from employe where titre = "secretaire" OR titre = "president"
10)
11)Select nom, titre, ndep, salaire from employe where ndep = 34 AND titre = "representant" OR "secretaire"
12)Selectnom, titre, ndep, salaire from employe
13)select nom, titre, ndep, salaire from employe where salaire >20000 AND salaire < 30000
15)select nom from employe where nom like "h%3";
16)select nom from employe where nom like "%n";
17)select nom from employe where nom like "___u%"; avec SUBSTRING
18)select nom, salaire from employe where service = 41 ORDERBY salaire;
19)select nom, salaire from employe ORDERBY salaire desc ;
20)select titre, salaire, nom from employe ORDERBY titre asc AND ORDERBY salaire desc;
21)tauxcom, select, salaire, nom from employe ORDERBY tauxcom ASC;
22)select nom, salaire, tauxcom from employe where isnull(tauxcom);
23)selectn nom, salaire, tauxcom from employe where isnotnull(tauxcom);
24)select nom, salaire, tauxcom, titre from employe where tauxcom < 15;
25)select nom, salaire, tauxcom, titre from employe where tauxcom > 15;
26)select nom, salaire, tauxcom, (salaire*tauxcom), titre from employe where ISNOTNULL(tauxcom);
26)select nom, salaire, tauxcom, (salaire*tauxcom), titre from employe where ISNOTNULL(tauxcom) orderby ASC;
28)select CONCAT(nom" "prenom) as "nom et prenom employe" from employe;
29)select SUBSTRING(nom, 1, 5)from employe;
30)SELECT LEFT(nom,5)from employe 
31)select UPPER(nom), LOWER(nom) from employe WHERE employer.nom = "vrante"
32)select nom, lenght(nom)from employe

SELECT prenom noregion from employe INNER JOINT dept on dept.nodept = employe.nodept;
SELECT ndept as "N departement", dept.nom as"Nom dep.", employe.nom as "nom employe" FROM employe ORDER BY ndept ASC
SELECT nom as "nom employe" FROM employer INNER jOINT dept on dept.nodept = employe.nodep WHERE dept.nom = "distribution"
SELECT employe.nom employe.salaire, FROM employe where employe.salaire > (SELECT nom, salaire  from employe where titre = "president")
SELECT nom, titre from employe where titre = (SELECT titre from employe where employe.nom ="Amartakaldir");
SELECT nom,  salaire, nodept FROM employe WHERE employe.salaire > ANY (SELECT employe.salair from employe where nodept = 31 ORDER BY nodept ASC and ORDER BY employe.salaire ASC)
SELECT nom,  salaire, nodept FROM employe WHERE employe.salaire > ALL (SELECT employe.salair from employe where noept = 31 ORDER BY nodept ASC and ORDER BY employe.salaire ASC)
SELECT nom, titre  from employe where nodept = 31 AND IN (select titre FROM employer where ndept = 32);
SELECT nom, titre  from employe where nodept = 31 AND NOTIN (select titre FROM employer where nodept = 32);
SELECT nom, titre, salaire FROM employe where salaire = (select salaire form employe where nom = "fairent") AND titre = (select titre form employe where nom = "fairent")

SELECT nodep, dept.nom, employe.nom FROM employe LEFT JOIN dept ON  dept.nodept = employe.nodep ORDER BY nodept ASC 
SELECT COUNT(noemp) FROM employer GROUP BY titre;
13) SELECT AVG(salaire) as "moyenne salaire", SUM(salaire) as "Total"FROM employe inner join GROUP BY noregion ;*
14) SELECT nodep FROM employe GROUP BY nodep HAVING COUNT(nodep)> 2
15) SELECT 15-SELECT LEFT(`nom`,1) AS Initial FROM `employe`GROUP BY Initial HAVING COUNT(LEFT(`nom`,1))>2   
16) SELECT MAX(salaire) as "Max" min(salaire) as "Mini" (min(salaire)-MAX(salaire))as "ecart" FROM employe
17) SELECT COUNT(titre) FROM employe GROUP BY titre;
18) SELECT COUNT(noemp) FROM employe GROUP BY titre;
19) SELECT dept.nom count(noemp) FROM employe INNER JOIN dept ON dep.nodept = employe.nodep GROUP BY employe.nodep
20) SELECT titre, AVG(salaire) FROM employe 








