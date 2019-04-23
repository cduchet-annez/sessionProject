<?php

class VoitureManager extends Connect
{
    const TABLE = 'Voiture';

    public function __construct()
    {
        parent::__construct();
    }


    public function insert(Voiture $voiture)
    {
        $query = "INSERT INTO `Voiture`(`marque`, `model`, `prix`, `nbPortes`, `clim`, `siegeChauffant`) VALUES
                                      ('" . $voiture->getMarque() . "',
                                      '" . $voiture->getModel() . "',
                                      " . $voiture->getPrix() . ",
                                      " . $voiture->getNbPortes() . ",
                                      '" . $voiture->getClim() . "',
                                      '0')";
        $voiture->setId(parent::execute($query));
        print_alert("voiture ajouté a la BDD", "success");
    }

    public function delete($id)
    {
        $query = "DELETE FROM `Voiture` WHERE id =$id";
        parent::execute($query);
        print_alert("voiture est effacé de la BDD", "success");
    }

    public function update(Audi $voiture)
    {
        var_dump($voiture);
        $query = "UPDATE `Voiture` SET 
                                    `model`='" . $voiture->getModel() . "',
                                    `prix`= " . $voiture->getPrix() . ",
                                    `nbPortes`= " . $voiture->getNbPortes() . ",
                                    `clim`= " . $voiture->getClim() . ",
                                    `siegeChauffant`= " . $voiture->getSiegeChauffant() . ",
                                    `isQuatro`= " . $voiture->getIsQuatro() . "
                                    WHERE `id`= " . $voiture->getId();
        parent::execute($query);
    }

    public function select($id)
    {
        $query = 'SELECT * FROM `Voiture` WHERE id=' . $id;
        $res = parent::connexion()->query($query);
        $voitures = [];
        foreach ($res as $data) {
            $voitures[] = new Audi($data['model'], $data['prix'], $data['nbPortes'], $data['siegeChauffant'], $data['clim'], $data['isQuatro'], $data['id']);
        }
        return $voitures;
    }

    public function selectAll()
    {
        $query = 'SELECT * FROM `Voiture`';
        $res = parent::connexion()->query($query);
        $voitures = [];
        foreach ($res as $data) {
            $voitures[] = new Audi($data['model'], $data['prix'], $data['nbPortes'], $data['siegeChauffant'], $data['clim'], $data['isQuatro'], $data['id']);
        }
        return $voitures;
    }
}
?>