<?php
  session_start();
  include("includes/database.php");
  include("includes/header.php");
 ?>
 <div class="form-container">
   <form class ="input-idea" action="process-insert-pairing.php" method="post" enctype="multipart/form-data">

     <label for="food">Food </label>
     <input id='food' type="text" name="food" maxlength="25"/>

     <label for="drink">Drink </label>
     <input id='drink' type="text" name="drink" maxlength="25"/>

     <label for="keywords">Keywords </label>
     <textarea type="tArea" name="keywords" rows="10" cols="16" maxlength="150"></textarea>

     <label for="picture">Pairing Image</label>
     <input id='picture' type="file" name ="picture"/>

     <input type="submit" value="Create Pairing">
   </form>
 </div>
<?
  include("includes/footer.php");
?>
