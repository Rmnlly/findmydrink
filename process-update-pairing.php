<?php
  include("includes/database.php");

  //user_id session variable would be captured here
  //The user id is required in order to insert this

  //$user_id = session variable here
  $pair_id = $_POST['pair_id'];
  $food = $_POST['food'];
  $drink = $_POST['drink'];
  $keywords = $_POST['keywords'];


  $picBefore = $_POST['picBefore'];
  $picture = $_FILES['picture']['name'];
  $extP = strtolower(pathinfo($picture, PATHINFO_EXTENSION));

  //Only accepting images smaller than 1mb and in jpg, png, gif or pdf form
  if (!empty($picture)){
    if ($_FILES['picture']['size'] > 1048576 || (($extP !== 'jpg') && ($extP !== 'pdf') && ($extP !== 'png') && ($extP !== 'gif'))) {
      echo('File 1 must be smaller than 1mb, please try again');
    } else {
      if(!move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/'.$_FILES['picture']['name'])){
        die('Error uploading file - check destination is writeable.');
      }
    }
    //A redirect may be required here
  } else {
    $picture = $picBefore;
  }

  $stmt = $pdo->prepare("UPDATE `Pairings`
                          SET `user_id`= $user_id,
                          `food`= '$food',
                          `drink`= '$drink',
                          `keywords`= '$keywords',
                          `picture`= '$picture'
                          WHERE `id`= $pair_id;");
  $stmt->execute();
  header("Location:userpage.php"); //This could be the user page also
 ?>
