<?php
class Produits
{
  private $_dateDePeremption;
  private $_libelle;
  private $_prix;
  private $_idProduits;

      
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
   * Get the value of _libelle
   */ 
  public function getLibelle()
  {
    return $this->_libelle;
  }

  /**
   * Set the value of _libelle
   *
   * @return  self
   */ 
  public function setLibelle($_libelle)
  {
    $this->_libelle = $_libelle;

    return $this;
  }


  /**
   * Get the value of _prix
   */ 
  public function getPrix()
  {
    return $this->_prix;
  }

  /**
   * Set the value of _prix
   *
   * @return  self
   */ 
  public function setPrix(int $_prix)
  {
    $this->_prix = $_prix;

    return $this;
  }

  /**
   * Get the value of _dateDePeremption
   */ 
  public function getDateDePeremption()
  {
    return $this->_dateDePeremption;
  }

  /**
   * Set the value of _dateDePeremption
   *
   * @return  self
   */ 
  public function setDateDePeremption(  $_dateDePeremption)
  {
    $this->_dateDePeremption = $_dateDePeremption;

    return $this;
  }

  /**
   * Get the value of _idProduit
   */ 
  public function getIdProduits()
  {
    return $this->_idProduits;
  }

  /**
   * Set the value of _idProduit
   *
   * @return  self
   */ 
  public function setIdProduits( int $_idProduits)
  {
    $this->_idProduits = $_idProduits;

    return $this;
  }
  //autre methodes:
  public function toString()
  {
    echo('libelle :' .$this->getLibelle() .'id : '.$this->getIdProduits()  .'prix : '.$this->getPrix().'date de peremption :'.$this->getDateDePeremption());
  }
}

