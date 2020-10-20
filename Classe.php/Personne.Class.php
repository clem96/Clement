<?php

class Personne
{
    //attribut
    private $_nom;
    private $_prenom;
    private $_age;
    private $_voiture;
    
   
    //constructeur
    public function __construct(array $info =[])
    {
     if(!empty($info))
     {
         $this->hydrate($info);
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
    

  public function toString()
    {
        $reponse = " Nom : $this->_nom Prenom : $this->_prenom age = $this->_age";
        return $reponse;
    }

   public function compareTo($obj){
       if($this->_age < $obj->getAge()){
        return true;
       }
       return false;
   }

    //asseseur

    //getter
    
    public function getVoiture()
    {
      return $this->_voiture;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    //setter

    public function setVoiture(Voiture $v)
    {
       $this->_voiture = $v;
    }

    public function setPrenom($p)
    {
        $this->_prenom = strtoupper($p);
    }

    public function setNom($n)
    {
        $this->_nom = strtoupper($n);
    }

    public function setAge($a)
    {
        $this->_age = strtoupper($a);
    }   
}

 




