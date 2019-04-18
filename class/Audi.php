<?php
class Audi extends Voiture implements AudiInterface{
    private $isQuatro;
 
    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro)
    {
        parent::__construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant);
        $this->isQuatro = $isQuatro;
    }

    public function panne(){
    } 
    
    public function __set($name, $value) {
        echo "l'attribut n'existe pas ou est privé ! ";
    }

    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    /**
     * @param mixed $isQuatro
     */
    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
}
?>