<?php
class Connect
{
    private $bdd;

    public function __construct($connec_host = 'localhost', $port = '3306', $connec_dbname = 'carsProject', $connec_pseudo = 'root', $connec_mdp = '')
    {
        try {
            $this->bdd = new PDO('mysql:host='.$connec_host.';dbname='.$connec_dbname, $connec_pseudo, $connec_mdp);
            $this->bdd->exec("SET CHARACTER SET utf8");
            $this->bdd->exec("SET NAMES utf8");
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            return $e;
        }
    }


    public function execute($request){
        try{
            $query = $this->bdd->prepare($request);
            $query->execute();
            return $this->bdd->lastInsertId();
        } catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }
}


?>