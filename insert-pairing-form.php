<?php
  session_start();
  include("includes/database.php");
  include("includes/header.php");
  //The session will contain the users id, we will need to obtain this and pass it
  //to the processing page through the hidden field defined below
  //Maybe its not required considering only a logged in user can create pairings
 ?>
 <div class="form-container">
   <form class ="input-idea" action="process-insert-pairing.php" method="post" enctype="multipart/form-data">
     <input type="hidden" name="user_id" value="<?//Here we will pass the userid?>">

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
