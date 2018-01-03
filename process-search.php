<?php
  include("includes/database.php");

  $search = $_POST['search'];

  $query = "SELECT * FROM `Pairings`
            WHERE (`keywords` LIKE '%".$search."%') OR (`food` LIKE '%".$search."%');";
  $stmt = $dbh->prepare($query);
  $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_INT);
  $stmt->execute();
  $result = $stmt->fetchAll();

  if ($stmt->rowCount() > 0) {
    $result = $stmt->fetchAll();

    foreach( $result as $row ) {
    echo $row["id"];
    echo $row["drink"];
    }
    } else {
    echo 'There is nothing to show';
  }
 ?>
