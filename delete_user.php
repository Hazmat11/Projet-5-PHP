<?php
require_once "config.php";
$sql = "DELETE FROM user WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
