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
  <div class="bloc_user">
    <h2><span class="email"><?php echo $user['email'] ?></span></h2>
    <?php echo $user['login']." ".$user['password'] ?>
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
 </body>
</html>
