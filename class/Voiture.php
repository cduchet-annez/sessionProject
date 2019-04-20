<?php
// Voiture enfant de vehicule repond aux regles de VoitureInterface
abstract class Voiture extends Vehicule implements VoitureInterface {

    private $nbPortes;
    protected $clim;
    protected $siegeChauffant;

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant)
    {
        var_dump($siegeChauffant);
        parent::__construct($marque, $model, $prix);
        $this->nbPortes = $nbPortes;
        $this->clim = $clim;
        $this->siegeChauffant = $siegeChauffant;

    }
    public function persist(){
        $voitureManager = new VoitureManager();

        $voitureManager->insert($this);
    }
    public function erase(){
        $voitureManager = new VoitureManager();
        $voitureManager->delete($this);
    }
    public function modify(){
        $voitureManager = new VoitureManager();
        $voitureManager->update($this);
    }
     // le set essaye d'affecter une valeur et vérifie si elle est privé ou pas 
    public function __set($name, $value) {
        echo "l'attribut '" . $name . "' n'existe pas ou est privé, impossible de lui assigner la valeur :" . " " . $value;
    }
    // le get essaye de récupérer un attribut et vérifie si il est privé ou pas 
    public function __get($name) {
        echo "\n" . "Impossible de récupérer '" . $name . "' l'attribut n'existe pas ou est privé !";
    }
    
    public function driveCar(){
    }
    /**
     * @return mixed
     */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * @param mixed $nbPortes
     */
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return mixed
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * @param mixed $clim
     */
    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    /**
     * @return mixed
     */
    public function getSiegeChauffant()
    {
        return $this->siegeChauffant;
    }

    /**
     * @param mixed $siegeChauffant
     */
    public function setSiegeChauffant($siegeChauffant)
    {
        $this->siegeChauffant = $siegeChauffant;
    }
}



?>

