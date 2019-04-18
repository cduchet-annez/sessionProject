<?php
//pouvoir gérer une session avec un objet session et inserer des audis(attributs)
class SessionManager {
    private $attributs = [];

    public function __construct(){//construit l'objet
        session_start();//démarre la session
        foreach ($_SESSION as $key => $value) {//session c'est déjà un tableau on le parcours pour récupérer
            $this->attributs[$key] = $value;//la clé et la valeur et les mettre dans le tableau attributs
        }
    }
    public function __destruct(){ //detruit mon objet

        foreach($this->attributs as $key => $value){//maintenant c'est l'inverse on parcours le tableau d'attribut
            $_SESSION[$key] = $value;//pour mettre les clé et valeurs dans le tableau session avant la destruction pour les sauvegarde
        }
    }

    public function getAttributs(){// vu que les attributs sont privés on les recupère grace au get
        return $this->attributs;//on les retourne dans notre tableau attributs
    }

    public function __set($name, $value){// on recupere et instancie des attributs qui n'existe pas à l'objet
        $this->attributs[$name] = serialize($value);//on transforme notre objet en chaine de caractère
    }

    public function __get($name){//on appel une fonction qui n'existe pas
        return unserialize($this->attributs[$name]);//on re transforme notre objet en objet
    }

    public function __isset($name){//on verifie si la variable ou un attribut existe
        return isset($this->attributs[$name]);
    }

    public function __unset($name){//on supprime la variable ou l attribut qui n'existai pas
        unset($this->attributs[$name]);
    }
}

?>