<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materializeprojet1.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/projet1.css">
      <link rel="icon" type="image/png" href="img\logo.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="js/jquery.js" charset="utf-8"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/script.js" charset="utf-8"></script>
   </head>
   <body>
      <div class="parallax-container">
         <div class="parallax"><img src="img\parallax1.jpg" alt=""></div>
         <p>
         <h1><?php require_once "config.php"; ?>
            <?php
            $sql = "SELECT * FROM projet WHERE id=1";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $projet){ ?>
              <?php echo $projet['titre'] ?>
         <?php } ?></h1>
         </p>
         <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="<?php require_once "config.php"; ?>
              <?php
              $sql = "SELECT * FROM projet WHERE id=1";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);

              foreach($data as $projet){ ?>
                <?php echo $projet['carousel1'] ?>
           <?php } ?>"></a>
            <a class="carousel-item" href="#two!"><img src="<?php require_once "config.php"; ?>
              <?php
              $sql = "SELECT * FROM projet WHERE id=1";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);

              foreach($data as $projet){ ?>
                <?php echo $projet['carousel2'] ?>
           <?php } ?>"></a>
            <a class="carousel-item" href="#three!"><img src="<?php require_once "config.php"; ?>
              <?php
              $sql = "SELECT * FROM projet WHERE id=1";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);

              foreach($data as $projet){ ?>
                <?php echo $projet['carousel3'] ?>
           <?php } ?>"></a>
            <a class="carousel-item" href="#four!"><img src="<?php require_once "config.php"; ?>
              <?php
              $sql = "SELECT * FROM projet WHERE id=1";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);

              foreach($data as $projet){ ?>
                <?php echo $projet['carousel4'] ?>
           <?php } ?>"></a>
         </div>
      </div>
      <div class="return">
         <a class="waves-effect waves-light btn-large"href="index.php"><i class="small material-icons">arrow_back</i>Return Home</a>
      </div>
      <div class="text">
         <p> <p><?php require_once "config.php"; ?>
            <?php
            $sql = "SELECT * FROM projet WHERE id=1";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $projet){ ?>
              <?php echo $projet['paragraphe'] ?></p>
         <?php } ?>
         </p>
      </div>
      <div class="row">
      <div class="parallax-container col s10 m6 l3 offset-l3">
         <div class="parallax"><img src="img\parallax1.jpg" alt=""></div>
            <div class="code">
               <img src="<?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM projet WHERE id=1";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $projet){ ?>
                   <?php echo $projet['image1'] ?>
              <?php } ?>">
               <img src="<?php require_once "config.php"; ?>
                 <?php
                 $sql = "SELECT * FROM projet WHERE id=1";
                 $pre = $pdo->prepare($sql);
                 $pre->execute();
                 $data = $pre->fetchAll(PDO::FETCH_ASSOC);

                 foreach($data as $projet){ ?>
                   <?php echo $projet['image2'] ?>
              <?php } ?>">
            </div>
         </div>
      </div>
   </body>
</html
