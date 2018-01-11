<?php
  session_start();
  include("includes/database.php");
  include("includes/header.php");
  include("includes/navbar.php");

  $pairId = $_GET['id'];
  //echo($_SESSION['user_id']);

  $stmt = $pdo->prepare("SELECT * FROM `Pairings` WHERE `id` = $pairId;");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  $stmt2 = $pdo->prepare("SELECT * FROM `Favourite` WHERE `pairing_id` = $pairId;");
  $stmt2->execute();
  $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

  //echo($row2['favourited']);

?>
  <div class="pair-container">
    <article class="result-item">
      <img class="result-image" src="uploads/<?=$row['picture']?>" alt="No Image">
      <span class="result-drink"><?=$row['drink']?></span>
      <?
        if($_SESSION["authenticated"] == 'true'){
          if($row2['favourited'] == "true"){
            ?>
            <a class = "pair-favourite" href="process-remove-favourite.php?id=<?=$pairId?>"><span> Remove From Favourites</span></a>
            <?
          }else if($row2['favourited'] == "" || $row2['favourited'] == "false"){
            ?>
            <a class = "pair-favourite" href="process-favourite.php?id=<?=$pairId?>"><span>Favourite</span></a>
            <?
          }
        }
      ?>
    </article>
  </div>
<?
  include("includes/footer.php");
?>
