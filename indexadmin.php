<?php require_once "config.php"; ?>
<html>
 <head>
   <link rel="stylesheet" href="css\paneladmin.css">
 </head>
 <body>
  <?php require "menu.php"; ?>
  <h1>Liste des utilisateurs</h1>
  <?php
  $sql = "SELECT * FROM user";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach($data as $user){ ?>
<div class="user">
  <div class="bloc_user">
    <h2><span class="email"><?php echo $user['email'] ?></span></h2>
    <?php echo $user['login']." ".$user['password'] ?>
    <form class="" action="modify_login.php" method="post">
      <input type='login' name='login' placeholder="Login"/>
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button type="submit" name="button">Modifier Login</button>
    </form>
    <form class="" action="modify_email.php" method="post">
      <input type='email' name='email' placeholder="Email"/>
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button type="submit" name="button">Modifier Email</button>
    </form>
    <form class="" action="modify_password.php" method="post">
      <input type='password' name='password' placeholder="Mot de passe"/>
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button type="submit" name="button">Modifier MDP</button>
    </form>
    <form class="" action="delete_user.php" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <button class="delete" type="submit" name="button">Supprimer</button>
    </form>
  </div>
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
<div class="backgroundimg">
    <form class="" action="backgroundimg.php" method="post">
      <input type="text" name="RGB1" value="">
      <input type="text" name="RGB2" value="">
      <input type="text" name="RGB3" value="">
      <button type="submit" name="button">Submit</button>
    </form>
  </div>
 </body>
</html>
