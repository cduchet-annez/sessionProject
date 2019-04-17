<?php
include "include.php";

$sess = new Session();
$sess->key = 'valeur';
echo $sess->key;
var_dump($sess);



?>
