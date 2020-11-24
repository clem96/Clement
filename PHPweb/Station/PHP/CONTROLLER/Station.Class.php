<?php
class Station
{
  private $_idStation;
  private $_nomStation;
  private $_altitudeStation;
  
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
   * Get the value of _idStation
   */ 
  public function getIdStation()
  {
    return $this->_idStation;
  }

  /**
   * Set the value of _idStation
   *
   * @return  self
   */ 
  public function setIdStation($_idStation)
  {
    $this->_idStation = $_idStation;

    return $this;
  }

  /**
   * Get the value of _nomStation
   */ 
  public function getNomStation()
  {
    return $this->_nomStation;
  }

  /**
   * Set the value of _nomStation
   *
   * @return  self
   */ 
  public function setNomStation($_nomStation)
  {
    $this->_nomStation = $_nomStation;

    return $this;
  }

  /**
   * Get the value of _altitudeStation
   */ 
  public function getAltitudeStation()
  {
    return $this->_altitudeStation;
  }

  /**
   * Set the value of _altitudeStation
   *
   * @return  self
   */ 
  public function setAltitudeStation($_altitudeStation)
  {
    $this->_altitudeStation = $_altitudeStation;

    return $this;
  }

}

