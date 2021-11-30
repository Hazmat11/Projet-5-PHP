<!DOCTYPE html>
<html>
   <head>
      <title>Projet-4</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" type="image/png" href="img\logo.png">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js/jquery.js" charset="utf-8"></script>
      <script src="js/script.js" charset="utf-8"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
   </head>
   <body>

      <button id="icon" class="medium material-icons">brightness_7</button>
      <div class="sidenavi">
        <FORM method="POST" action="envoi.php">
          <nav>&nbspNous contacter</nav>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">contacts</i></a>
          <ul id="slide-out" class="sidenav" style="overflow-x: hidden;">
             <li>
                <div class="user-view">
                   <div class="background">
                   </div>
                   <a href="#user"><img class="circle" src="img\logo.png"></a>
                </div>
             </li>
             <div class="row">
                <form class="col s12">
                <div class="row">
                   <div class="input-field col s6">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">Prénom</label>
                   </div>
                   <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Nom</label>
                   </div>
                </div>
             </div>
             <li>
                <div class="divider"></div>
             </li>
             <div class="row">
                <div class="input-field col s12">
                   <input id="email" type="email" class="validate">
                   <label for="email">Email</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s12">
                   <textarea id="textarea1" class="materialize-textarea"></textarea>
                   <label for="textarea1">Texte</label>
                </div>
             </div>
             <button class="btn waves-effect waves-light" type="Submit" name="action">Envoyer
             <i class="material-icons right">send</i>
             </button>
          </ul>
       </div>
        </form>
      <div class="row">
         <div class="card col s10 offset-s1 m6 l3 offset-l3">
            <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="<?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM cards WHERE id=8";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $cards){ ?>
                   <?php echo $cards['imgcard'] ?>
              <?php } ?>">
            </div>
            <div class="card-reveal">
               <span class="card-title grey-text text-darken-4">
                  <h2>Etienne BERTRAND</h2>
                  <i class="material-icons right">close</i>
               </span>
               <p><?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM cards WHERE id=8";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $cards){ ?>
                   <?php echo $cards['txt'] ?></p>
              <?php } ?>
                </div>
                  </div>
         <div class="card col s10 offset-s1 m6 l3">
            <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="<?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM cards WHERE id=9";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $cards){ ?>
                   <?php echo $cards['imgcard'] ?>
              <?php } ?>">
            </div>
            <div class="card-reveal">
               <span class="card-title grey-text text-darken-4">
                  <h2>Keziah Bartolini</h2>
                  <i class="material-icons right">close</i>
               </span>
               <p><?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM cards WHERE id=9";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $cards){ ?>
                   <?php echo $cards['txt'] ?></p>
              <?php } ?>
            </div>
         </div>
      </div>
      <div class="buttons">
         <div class="projet1 col s10 offset-s1 m6 l3 offset-l3">
            <a class="waves-effect waves-light btn-large" href="projet1.html"><i class="material-icons right">filter_1</i>Projet 1</a>
         </div>
         <div class="projet2 col s10 offset-s1 m6 l3">
            <a class="waves-effect waves-light btn-large" href="projet2.html"><i class="material-icons right">filter_2</i>Projet 2</a>
         </div>
         <div class="projet3 col s10 offset-s1 m6 l3">
            <a class="waves-effect waves-light btn-large" href="projet3.html"><i class="material-icons right">filter_3</i>Projet 3</a>
         </div>
      </div>
      <p>
      <h1>Présentation des projets du binôme</h1>
      </p>
   </body>
</html>
