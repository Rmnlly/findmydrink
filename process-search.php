<?php
  include("includes/database.php");

  $search = $_POST['search'];

  $query = "SELECT * FROM `Pairings` WHERE `keywords` LIKE '%" . $search . "%' OR `food` LIKE '%".$search."%'";

  $stmt = $pdo->prepare($query);

  $stmt->execute();

  if($stmt->rowCount() > 0){
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo($row['id']);
      echo($row['drink']);
    }
  }else {
    echo 'nothing to show';
  }

  //Here we want to show cards with images and drink names underneath
 ?>
