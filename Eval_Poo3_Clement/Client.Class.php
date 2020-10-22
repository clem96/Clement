<?php
class Client
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getCompte()
    {
        return $this->_compte;
    }

    public function setCompte($compte)
    {
        $this->_compte = $compte;
    }

    public function getLivret()
    {
        return $this->_livret;
    }

    public function setLivret($livret)
    {
        $this->_livret = $livret;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "Le client " . $this->getNom() . "\n" . $this->getPrenom() . "a \n" . $this->getCompte() . " sur son compte et \n" . $this->getLivret() . " sur son livret";
    }

    //ajoute au compte la somme
    public function recevoir($ajout)
    {
        //(setMontant($ajout));
        $this->setCompte($this->getCompte() + $ajout);
    }

    //retire du compte la somme depenser
    public function depenser($depense)
    {
        $this->setCompte($this->getCompte() - $depense);
    }

    //
    public function epargner($epar)
    {
        //retire au compte la valeur epargner
        $this->setCompte($this->getCompte() - $epar);
        //ajoute au livret la somme epargner
        $this->setLivret($this->getLivret() + $epar);
    }

    public function affiche()
    {
        $this->toString();
    }
}
