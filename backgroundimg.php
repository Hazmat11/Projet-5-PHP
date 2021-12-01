<?php
require_once "config.php";
?>

<?php
$GLOBALS['varRGB1'] = $_POST['RGB1'];
$GLOBALS['varRGB2'] = $_POST['RGB2'];
$GLOBALS['varRGB3'] = $_POST['RGB3'];
?>

<?php
$sql = "UPDATE backgroundimg SET RGB1 = '$varRGB1' WHERE id = 1;
 UPDATE backgroundimg SET RGB2 = '$varRGB2' WHERE id = 1;
 UPDATE backgroundimg SET RGB3 = '$varRGB3' WHERE id = 1;";
$pre = $pdo->prepare($sql);
$pre->execute();

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
?>
