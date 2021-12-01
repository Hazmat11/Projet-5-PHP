<?php
require_once "config.php";
$sql = "UPDATE user SET login=:login WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':login'   => $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
