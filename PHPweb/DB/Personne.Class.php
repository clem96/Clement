<?php
class Personne
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_age;
    private $_idpersonne;


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

    public function getIdPersonne()
    {
        return $this->_idpersonne;
    }

    public function setidPersonne($_idpersonne)
    {
        $this->_idpersonne = $_idpersonne;

        return $this;
    }
    
    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($_age)
    {
        $this->_age = $_age;

        return $this;
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
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

  
}
