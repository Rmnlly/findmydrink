<?php
  session_start();
  include("includes/database.php");
  include("includes/header.php");

  //get the id of the pairing from the one selected on the user page
  //$id = $_GET['id'];

  $stmt = $pdo->prepare("SELECT * FROM `Pairings` WHERE `id`= $id;");
  $stmt->execute();

  $row = $stmt->fetch();

 ?>
 <div class="form-container">
   <form class ="input-idea" action="process-update-pairing.php" method="post" enctype="multipart/form-data">
     <input type="hidden" name="pair_id" value="<?=$row['id'];?>">
     <input type="hidden" name="picBefore" value="<?=$row['picture'];?>">

     <label for="food">Food </label>
     <input id='food' type="text" name="food" maxlength="25" value="<?=$row['food']?>"/>

     <label for="drink">Drink </label>
     <input id='drink' type="text" name="drink" maxlength="25" value="<?=$row['drink']?>"/>

     <label for="keywords">Keywords </label>
     <textarea type="tArea" name="keywords" rows="10" cols="16" maxlength="150"><?=$row['keywords']?></textarea>

     <label for="picture">Pairing Image</label>
     <label for="picture">Current File: <?=$row['picture']?></label>
     <input id='picture' type="file" name ="picture"/>

     <input type="submit" value="Update Pairing">
   </form>
 </div>
<?
  include("includes/footer.php");
?>
