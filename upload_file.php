#upload_file.php
<?php echo $_FILES['image']['name'];//affiche le nom du fichier envoyé lors du formulaire
//sauvegarder le fichier dans un dossier spécifique

$sql = "INSERT INTO cards(imgcard,text) VALUES (:imgcard, :text)";

$dataBinded=array(
    ':imgcard'   => $_POST['imgcard'],
    ':text'   => $_POST['text'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$destination = "img/".$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);

header('Location:indexadmin.php');//on le redirige sur la page d'accueil du site !
?>
