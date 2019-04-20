<?php
class VoitureManager extends Connect
{
const TABLE = 'voiture';

public function __construct()
{
parent::__construct();
}

public function insert(voiture $voiture){
$query = "INSERT INTO `voiture` (marque, model, prix, nbPortes, clim, siegeChauffant) VALUES 
('".$voiture->getMarque()."','".$voiture->getModel()."',".$voiture->getPrix().",".$voiture->getNbPortes().",".$voiture->getClim().",0)";

//
var_dump($query);

    parent::execute($query);
}

public function delete(voiture $voiture){
$query= "DELETE `voiture` WHERE id='.$voiture->getId().'";
parent::execute($query);

}

public function update(voiture $voiture){//fonction modify
    $query="UPDATE voiture SET marque =".$voiture->getMarque().", model=".$voiture->getModel().", 
    prix=".$voiture->getPrix().", nbPortes=".$voiture->getNbPortes().", clim =".$voiture->getClim().", 
    siegeChauffant=".$voiture->getSiegeChauffant()." 
    WHERE id  = .$voiture->getId()";
    parent::execute($query);
}

public function select(){

}

public function selectAll(voiture $voiture){

}
}
?>