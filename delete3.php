<?php
require_once "config.php";

$sql = "UPDATE `projet` SET `carousel1` = '', `carousel2` = '', `carousel3` = '', `carousel4` = '', `image1` = '', `image2` = '', `titre` = '', `paragraphe` = '' WHERE `projet`.`id` = 3;";


$pre = $pdo->prepare($sql);
$pre->execute();

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
