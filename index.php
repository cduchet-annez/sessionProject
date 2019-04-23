<!DOCTYPE html>
<html lang="en">

<head>
    <title>My PHP Lab on LAMP docker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>

<body>

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

$audiA4 = new Audi('A4', 5000, 5, true, false, true, null);
$kawa = new moto('kawasaki','vds', 15000, 5, true);
$audiA4->persist();
$audiA1 = new Audi ('A1', 15000, 3, true, false, false, null);
$audiA1->persist();
$audiA4->modify();
$audiA4->prix=25000;
//$audiA1->delete(setId());
var_dump($audiA4);
//serialize transforme en string un objet
//ça sert surtout pour la sauvegarde et l'echange !
$stringSerialze = serialize($sess);
var_dump($stringSerialze);


// unserialize le retransforme en objet !
$sess = unserialize($stringSerialze);
var_dump($stringSerialze);

?>
