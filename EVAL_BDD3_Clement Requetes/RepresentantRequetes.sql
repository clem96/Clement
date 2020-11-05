q1) SELECT `IdClient`,`NomClient`,`VilleClient` FROM `clients`
q2) SELECT `IdProduit`,`NomProduit` FROM `produits` WHERE `CouleurProduit`= "Rouge" AND `PoidsProduit`> 2000
q3) SELECT ventes.IdRepres, representants.NomRepres FROM `ventes` INNER JOIN representants ON representants.IdRepres = ventes.IdRepres GROUP BY IdRepres
q4) SELECT clients.NomClient FROM `ventes` INNER JOIN clients ON clients.IdClient = ventes.`IdClient` WHERE `Quantité`>180 AND clients.VilleClient = "Lyon"
q5)--//SELECT
     representants.NomRepres,
    clients.NomClient
FROM
    `ventes`
INNER JOIN clients ON clients.IdClient = ventes.IdClient,
INNER JOIN representants ON representants.IdRepres = ventes.IdRepres,
INNER JOIN produits ON ventes.IdProduit = produits.IdProduit
WHERE ventes.Quantité > 100 AND produits.CouleurProduit = "Rouge"
q6)SELECT `NomClient`, produits.NomProduit, ventes.quantité FROM `clients` INNER JOIN ventes ON clients.IdClient = ventes.IdClient INNER JOIN produits ON ventes.IdProduit = produits.IdProduit
q7)SELECT produits.NomProduit, SUM(`Quantité`) as'Nb produit' FROM `ventes` INNER JOIN produits ON produits.IdProduit = ventes.IdProduit GROUP BY ventes.IdProduit
q8)CREATE VIEW clientvente, AS SELECT
    (
        IdClient,
        `NomClient`,
        `VilleClient`,
        `IdVente`,
        `IdRepres`,
        `IdProduit`,
        `IdClient`,
        `Quantité`
    )
FROM
    ventes,
    INNER JOIN clients ON

    ventes.IdClient = clients.IdClient
