<?php
require_once "config.php";
$sql = "UPDATE projet SET titre = :txt WHERE id = 3";
$dataBinded=array(
    ':txt'   => $_POST['txt']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
