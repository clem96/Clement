<?php

class Rectangle
{

    //attribut 
 private $_longeur;
 private $_largeur;

 function __construct(array $tab =[])
{
    if(!empty($tab))
    {
        $this->hydrate($tab);
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


//Assesseur
public function getLargeur()
{
    return $this->_largeur;
}

public function getLongeur()
{
    return $this->_longeur;
}

//set
public function setLargeur($la)
{
   $this->_largeur = $la;
}

public function setLongeur($lg)
{
    $this->_longeur = $lg;
}


//methode
public function toString()
{
    $reponse = 'Longueur :  '.$this->getLongeur() .'- Largeur : ' .$this->getLargeur() .'- Périmètre : ' .$this->perimetre() .'- Aire : ' .$this->aire() .'-' ;

    if($this->estCarre() == true)
    {
        $carre = "Il s’agit d’un carré";
    }
    else
    {
        $carre = "Il ne s’agit pas d’un carré";
    }
    
    $reponse .= $carre;
 
 return $reponse; 
    
}

public function perimetre()
{
    return ($this->getLargeur() *2 + $this->getLongeur()*2);
}

public function aire()
{
    return ($this->getLargeur() * $this->getLongeur());
}

public function estCarre()
{
  return ($this->getLargeur() == $this->getLongeur());
}

public function afficheRectangle()
{
 echo $this->toString();
}

}



