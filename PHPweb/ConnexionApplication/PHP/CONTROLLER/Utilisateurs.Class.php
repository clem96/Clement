<?php
class Utilisateurs
{
  private $_idUtilisateur;
  private $_nom;
  private $_prenom;
  private $_pseudo; 
  private $_motdepasse;
  private $_comte;
  private $_email;


      
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

   





  /**
   * Get the value of _idUtilisateur
   */ 
  public function getIdUtilisateur()
  {
    return $this->_idUtilisateur;
  }

  /**
   * Set the value of _idUtilisateur
   *
   * @return  self
   */ 
  public function setIdUtilisateur($_idUtilisateur)
  {
    $this->_idUtilisateur = $_idUtilisateur;

    return $this;
  }

  /**
   * Get the value of _nom
   */ 
  public function getNom()
  {
    return $this->_nom;
  }

  /**
   * Set the value of _nom
   *
   * @return  self
   */ 
  public function setNom($_nom)
  {
    $this->_nom = $_nom;

    return $this;
  }

  /**
   * Get the value of _prenom
   */ 
  public function getPrenom()
  {
    return $this->_prenom;
  }

  /**
   * Set the value of _prenom
   *
   * @return  self
   */ 
  public function setPrenom($_prenom)
  {
    $this->_prenom = $_prenom;

    return $this;
  }

  /**
   * Get the value of _pseudo
   */ 
  public function getPseudo()
  {
    return $this->_pseudo;
  }

  /**
   * Set the value of _pseudo
   *
   * @return  self
   */ 
  public function setPseudo($_pseudo)
  {
    $this->_pseudo = $_pseudo;

    return $this;
  }

  /**
   * Get the value of _motdepasse
   */ 
  public function getMotdepasse()
  {
    return $this->_motdepasse;
  }

  /**
   * Set the value of _motdepasse
   *
   * @return  self
   */ 
  public function setMotdepasse($_motdepasse)
  {
    $this->_motdepasse = $_motdepasse;

    return $this;
  }

  /**
   * Get the value of _comte
   */ 
  public function getComte()
  {
    return $this->_comte;
  }

  /**
   * Set the value of _comte
   *
   * @return  self
   */ 
  public function setComte($_comte)
  {
    $this->_comte = $_comte;

    return $this;
  }

  /**
   * Get the value of _email
   */ 
  public function getEmail()
  {
    return $this->_email;
  }

  /**
   * Set the value of _email
   *
   * @return  self
   */ 
  public function setEmail($_email)
  {
    $this->_email = $_email;

    return $this;
  }
}

