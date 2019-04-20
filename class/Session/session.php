<?php
//pouvoir gérer une session avec un objet session et inserer des audis(attributs)
class Session {
    private $attributs = [];

    public function __construct(){
        // Démarre la session
        session_start();
        // $_SESSION est un tableau, on récupére sa clé et sa valeure pour les insérer dans le tableau $attributs
        foreach ($_SESSION as $key => $value) {
            $this->attributs[$key] = $value;
        }
    }
    public function __destruct(){
        // L'inverse, on rentre dans le tableau $attributs pour mettre les clés et leurs valeurs dans le tableau $_SESSION avant sa destruction pour la sauvegarde
        foreach($this->attributs as $key => $value){
            $_SESSION[$key] = $value;
        }
    }

    // On récupère TOUT les éléments private avec un getAttributs
    public function getAttributs(){
        // On retourne le tableau d'attributs
        return $this->attributs;
    }

    // Appelle quand on essaie d'assigner une variable à un attributs qui n'existe pas
    public function __set($name, $value){
        // On transforme notre attributs en chaine de caractère grâce à serialize
        $this->attributs[$name] = serialize($value);
    }

    // Appelle quand on essaie de récupérer une variable à un attributs qui n'existe pas
    public function __get($name){
        // On transforme notre chaine de caractère en objet
        return unserialize($this->attributs[$name]);
    }

    // isSet est une méthode magique qui est appelé quand on appelle la fonction php isset sur un attribut qui n'existe pas
    public function __isset($name){
        return isset($this->attributs[$name]);
    }

    // unSet est une méthode magique qui est appelé quand on appelle la fonction php unset sur un attribut qui n'existe pas ou dont on a pas accès
    public function __unset($name){
        unset($this->attributs[$name]);
    }
}

?>