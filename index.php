<?php
//on inclut le fichier include.php qui contient toutes les classes à inclure dans notre projet
//nous incluons dabord les interface puis les classes utilisent les interfaces
include "include.php";


//on declare une nouvelle variable  sess et on lui assigne une nouvelle instance de l objet sess
//cela nous amene dans la méthode magique __construct() (le constructeur de l'objet)
$sess = new Session();

//on crée de nouveaux objet
$sess->username = 'Charlotte';
echo $sess->username;
var_dump($sess);

$audiA4 = new Audi('A4', 5000, 5, true, false, true);
$kawa = new moto('kawasaki','vds', 15000, 5, true);
$audiA4->persist();
$audiA4->setId($audiA4->getId());
$audiA1 = new Audi('A1', 25000, 3, true, false, true);
$audiA1->persist();
$audiA1->setId($audiA4->getId());
$audiA4->setClim(false);
$audiA4->modify();
$audiA4->erase();
var_dump($audiA4);
//serialize transforme en string un objet
//ça sert surtout pour la sauvegarde et l'echange !
$stringSerialze = serialize($sess);
var_dump($stringSerialze);


// unserialize le retransforme en objet !
$sess = unserialize($stringSerialze);
var_dump($stringSerialze);

?>
