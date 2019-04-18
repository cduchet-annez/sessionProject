<?php
include "include.php";

$sess = new Session();
$sess->username = 'Charlotte';
echo $sess->username;
var_dump($sess);


//serialize transforme en string un objet
//ça sert surtout pour la sauvegarde et l'echange !
$stringSerialze = serialize($sess);
var_dump($stringSerialze);


// unserialize le retransforme en objet !
$sess = unserialize($stringSerialze);
var_dump($stringSerialze);

?>
