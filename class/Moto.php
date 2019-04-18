<?php
class Moto extends Vehicule implements MotoInterface{

    private $topCase;

    public function mettreLaBequille($bequille){
        return $this->$bequille;
    } 
    public function __construct($marque, $model, $prix, $topCase)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;
    }

    public function __set($model, $value) {
        echo "l'attribut n'existe pas ou est privé ! ";
    }

    public function getTopCase()
    {
        return $this->topCase;
    }

    /**
     * @param mixed $topCase
     */
    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }
    private $nbPlaces;



}
?>