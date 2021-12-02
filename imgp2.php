<?php
require_once "config.php";

$varImg1 = $_FILES['image1']['name'];//affiche le nom du fichier envoyé lors du formulaire
$varImg2 = $_FILES['image2']['name'];//affiche le nom du fichier envoyé lors du formulaire


$destination = "img/".$_FILES['image1']['name']; //dossier "upload"
move_uploaded_file($_FILES['image1']['tmp_name'],$destination);

$destination = "img/".$_FILES['image2']['name']; //dossier "upload"
move_uploaded_file($_FILES['image2']['tmp_name'],$destination);

$sql = "UPDATE projet SET image1 = 'img/$varImg1' WHERE id = 2";
$pre = $pdo->prepare($sql);
$pre->execute();
$sql = "UPDATE projet SET image2 = 'img/$varImg2' WHERE id = 2";
$pre = $pdo->prepare($sql);
$pre->execute();
//header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
?>
