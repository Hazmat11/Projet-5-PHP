<?php require_once "config.php"; ?>
  <?php
  $sql = "SELECT * FROM backgroundimg";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach($data as $user){ ?>
    <?php $varRGB1 = $user['RGB1'] ?>
    <?php $varRGB2 = $user['RGB2'] ?>
    <?php $varRGB3 = $user['RGB3'] ?>
  <?php } ?>
