<?php
  session_start();
  include("includes/header.php");
  include("includes/database.php");
  include("includes/navbar.php");


  $search = $_POST['search'];

  $query = "SELECT * FROM `Pairings` WHERE `keywords` LIKE '%" . $search . "%' OR `food` LIKE '%".$search."%'";

  $stmt = $pdo->prepare($query);

  $stmt->execute();

  ?>
  <section class="result-container">
    <?
    if($stmt->rowCount() > 0){
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
          <article class="result-item">
            <img class="result-image" src="uploads/<?=$row['picture']?>" alt="No Image">
            <span class="result-drink"><?=$row['drink']?></span>
          </article>
        <?
      }
    }else {
      echo 'nothing to show';
    }
   ?>
 </section>
 <?
  include("includes/footer.php");
 ?>
