<?php

abstract class Vehicule implements VehiculeInterface
{
    protected $marque;
    protected $model;
    protected $prix;
    protected $id;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function __construct($marque, $model, $prix)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->prix = $prix;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function __set($name, $value) {
        echo "l'attribut n'existe pas ou est privé ! ";
    }
    
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}

?>