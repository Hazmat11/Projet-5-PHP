<?php
require_once "config.php";
$sql = "UPDATE user SET email=:email WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':email'   => $_POST['email']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
