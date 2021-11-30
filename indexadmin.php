<?php require_once "config.php"; ?>
<html>
 <head>
   <link rel="stylesheet" href="css\paneladmin.css">
 </head>
 <body>
  <h1>Liste des utilisateurs</h1>
  <?php
  $sql = "SELECT * FROM user";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach($data as $user){ ?>
  <div class="bloc_user">
    <span class="email"><?php echo $user['email'] ?>&nbsp;/</span>
    <?php echo $user['login'] ?>&nbsp;/ <?php echo $user['password'] ?>
    <form class="" action="modify_email.php" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button type="submit" name="button">Modifier email</button>
    </form>
    <form class="" action="delete_user.php" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button type="submit" name="button">Supprimer</button>
    </form>
  </div>
  <?php } ?>
  <h1>Changer le texte des cartes de l'index</h1>
  <div class="cardtxt">
    <form class="" action="txtindex1.php" method="post" >
      <input type="text" name="txt" value="" placeholder="Texte Descriptif">
      <button type="submit" name="button">Changer le texte de la Carte 1</button>
    </form>
    <form class="" action="txtindex2.php" method="post">
      <input type="text" name="txt" value="" placeholder="Texte Descriptif">
      <button type="submit" name="button">Changer le texte de la Carte 2</button>
    </form>
  </div>
  <h1>Changer les images des cartes</h1>
  <div class="cardimg">
    <form class="" action="imgcard1.php" method="post" enctype="multipart/form-data">
      <input type='file' name='image'>
      <button type="submit" name="button">Upload Carte 1</button>
    </form>
    <form class="" action="imgcard2.php" method="post" enctype="multipart/form-data">
      <input type='file' name='image'>
      <button type="submit" name="button">Upload Carte 2</button>
    </form>
  </div>
 </body>
</html>
