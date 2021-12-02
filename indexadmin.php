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
<div class="user">
  <div class="bloc_user">
    <span class="email"><?php echo $user['email'] ?></span>
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
  <h2>Changer le texte des cartes de l'index</h2>
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
  <h2>Changer les images des cartes</h2>
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
  <h2>Changer color gradient</h2>
  <div class="backgroundimg">
    <form class="" action="backgroundimg.php" method="post">
      <input type="text" name="RGB1" value="" placeholder="Code RGB sans #">
      <input type="text" name="RGB2" value="" placeholder="Code RGB sans #">
      <input type="text" name="RGB3" value="" placeholder="Code RGB sans #">
      <button type="submit" name="button">Submit</button>
    </form>
  </div>
  <h1>Projet 1</h1>
  <div class="Projet1">
    <h1>Changer photos carousel Projet1</h1>
    <div class="p1carousel">
      <form class="" action="imgcarousel1.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <input type='file' name='image3'>
        <input type='file' name='image4'>
        <button type="submit" name="button">Upload Carousel</button>
      </form>
    </div>
    <h1>Changer photos du Projet1</h1>
    <div class="p1photos">
      <form class="" action="imgp1.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <button type="submit" name="button">Upload Photos</button>
      </form>
    </div>
    <h1>Changer Texte Projet1</h1>
    <div class="p1paragraphe">
      <form class="" action="paragraphe1.php" method="post">
        <input type='text' name='txt' value="" placeholder="Paragraphe (max:800char)">
        <button type="submit" name="button">Upload paragraphe</button>
      </form>
    </div>
    <h1>Changer Titre Projet1</h1>
    <div class="titrep1">
      <form class="" action="titrep1.php" method="post">
        <input type='text' name='txt' value="" placeholder="Titre du projet">
        <button type="submit" name="button">Upload titre</button>
      </form>
    </div>
    <div class="delete">
      <form class="" action="delete1.php" method="post">
        <input type="hidden" name="id" value="">
        <button class="delete" type="submit" name="button">Supprimer le projet</button>
      </form>
    </div>
  </div>
  <h1>Projet 2</h1>
  <div class="Projet2">
    <h1>Changer photos carousel Projet2</h1>
    <div class="p2carousel">
      <form class="" action="imgcarousel2.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <input type='file' name='image3'>
        <input type='file' name='image4'>
        <button type="submit" name="button">Upload Carousel</button>
      </form>
    </div>
    <h1>Changer photos du Projet2</h1>
    <div class="p2photos">
      <form class="" action="imgp2.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <button type="submit" name="button">Upload Photos</button>
      </form>
    </div>
    <h1>Changer Texte Projet2</h1>
    <div class="p2paragraphe">
      <form class="" action="paragraphe2.php" method="post">
        <input type='text' name='txt' value="" placeholder="Paragraphe (max:800char)">
        <button type="submit" name="button">Upload paragraphe</button>
      </form>
    </div>
    <h1>Changer Titre Projet2</h1>
    <div class="titrep2">
      <form class="" action="titrep2.php" method="post">
        <input type='text' name='txt' value="" placeholder="Titre du projet">
        <button type="submit" name="button">Upload titre</button>
      </form>
    </div>
    <div class="delete">
      <form class="" action="delete2.php" method="post">
        <input type="hidden" name="id" value="">
        <button class="delete" type="submit" name="button">Supprimer le projet</button>
      </form>
    </div>
  </div>
  <h1>Projet 3</h1>
  <div class="Projet3">
    <h1>Changer photos carousel Projet3</h1>
    <div class="p3carousel">
      <form class="" action="imgcarousel3.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <input type='file' name='image3'>
        <input type='file' name='image4'>
        <button type="submit" name="button">Upload Carousel</button>
      </form>
    </div>
    <h1>Changer photos du Projet3</h1>
    <div class="p3photos">
      <form class="" action="imgp3.php" method="post" enctype="multipart/form-data">
        <input type='file' name='image1'>
        <input type='file' name='image2'>
        <button type="submit" name="button">Upload Photos</button>
      </form>
    </div>
    <h1>Changer Texte Projet3</h1>
    <div class="p3paragraphe">
      <form class="" action="paragraphe3.php" method="post">
        <input type='text' name='txt' value="" placeholder="Paragraphe (max:800char)">
        <button type="submit" name="button">Upload paragraphe</button>
      </form>
    </div>
    <h1>Changer Titre Projet3</h1>
    <div class="titrep3">
      <form class="" action="titrep3.php" method="post">
        <input type='text' name='txt' value="" placeholder="Titre du projet">
        <button type="submit" name="button">Upload titre</button>
      </form>
    </div>
    <div class="delete">
      <form class="" action="delete3.php" method="post">
        <input type="hidden" name="id" value="">
        <button class="delete" type="submit" name="button">Supprimer le projet</button>
      </form>
    </div>
  </div>
 </body>
</html>
