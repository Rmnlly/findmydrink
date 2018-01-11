<?php
  session_start();
  include("includes/database.php");

  $pairId = $_GET['id'];
  $userId = $_SESSION["user_id"];

  $stmt = $pdo->prepare("SELECT * FROM `Favourite` WHERE `user_id`=$userId AND `pairing_id`=$pairId;");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row['favourited'] == "true"){
    header('Location: select-pairing.php?id=' . $pairId);

  } else if ($row['favourited'] == "false") {
    $stmt2 = $pdo->prepare("UPDATE `Favourite` SET `favourited`='true' WHERE `user_id`=$userId AND `pairing_id`=$pairId;");
    $stmt2->execute();
    header('Location: select-pairing.php?id=' . $pairId);
  } else {
    $stmt3 = $pdo->prepare("INSERT INTO `Favourite`(`user_id`, `pairing_id`, `favourited`) VALUES ($userId, $pairId, 'true');");
    $stmt3->execute();
    header('Location: select-pairing.php?id=' . $pairId);
  }
 ?>
