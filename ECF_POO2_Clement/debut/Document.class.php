<?php
class Document
{

    /*****************Attributs***************** */
    private $_auteur;
    private $_titre;
    private $_dispo;
    /*****************Accesseurs***************** */
    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getDispo()
    {
        return $this->_dispo;
    }

    public function setDispo($dispo)
    {
        $this->_dispo = $dispo;
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
        echo "Auteur : " . $this->getAuteur() . " Tire : " . $this->getTitre() . " Disponible : " . $this->Estemprunte();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {

    }
    /**
     * Compare 2 objets
     * Renvoi true si identique >
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        //retourn vrai si les documents son identique meme tire et meme auteur
        return ($obj1->getAuteur() == $obj2->getAuteur() && $obj1->getTitre() == $obj2->getTitre());
    }

    //permet de verifier la disponibilité
    public function Estemprunte()
    {
        if ($this->getDispo() == true) {
            return "Non disponible";
        } else {
            return "Disponible";
        }
    }

}
