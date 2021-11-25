<?php#login.php
echo $_POST['email']; //affiche l'email saisi par l'utilisateur
echo $_POST['password']; //affiche le password saisi par l'utilisateur
echo $_POST['first_name']; //affiche le prénom saisi par l'utilisateur
?>

<?php
    $pdo = new PDO(
      'mysql:host=localhost;dbname=projet 5;',
      'root',
      '',
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
