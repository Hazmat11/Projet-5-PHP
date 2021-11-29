<?php
require_once "config.php";
$sql = "UPDATE user SET password = SHA1('123456') WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>
