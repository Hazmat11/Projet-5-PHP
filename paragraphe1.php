<?php
require_once "config.php";
$sql = "UPDATE projet SET paragraphe = :txt WHERE id = 1";
$dataBinded=array(
    ':txt'   => $_POST['txt']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
