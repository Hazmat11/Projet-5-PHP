<?php
require_once "config.php";
$varImg = $_FILES['image']['name'];//affiche le nom du fichier envoyé lors du formulaire
//sauvegarder le fichier dans un dossier spécifique
$destination = "img/".$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);

$sql = "UPDATE cards SET imgcard = 'img/$varImg' WHERE `cards`.`id` = 9";
$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
?>
