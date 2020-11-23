<?php
class Clients
{
  private $_idClients;
  private $_nom;
  private $_prenom;
  private $_age; 

      
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
   * Get the value of _idClients
   */ 
  public function getIdClients()
  {
    return $this->_idClients;
  }

  /**
   * Set the value of _idClients
   *
   * @return  self
   */ 
  public function setIdClients($_idClients)
  {
    $this->_idClients = $_idClients;

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
   * Get the value of _age
   */ 
  public function getAge()
  {
    return $this->_age;
  }

  /**
   * Set the value of _age
   *
   * @return  self
   */ 
  public function setAge($_age)
  {
    $this->_age = $_age;

    return $this;
  }

  //autre methodes:
  public function toString()
  {
    echo('id client :' .$this->getIdClients() .'Nom : '.$this->getNom()  .'Prenom : '.$this->getPrenom().'Age :'.$this->getAge());
  }




}

