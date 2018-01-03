<?php
  include("includes/database.php");

  //user_id session variable would be captured here
  //The user id is required in order to insert this

  $food = $_POST['food'];
  $drink = $_POST['drink'];
  $keywords = $_POST['keywords'];

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
    $picture = NULL;
  }

  $stmt = $pdo->prepare("INSERT INTO `Pairings`(`user_id`, `food`, `drink`, `keywords`, `picture`)
                          VALUES ('$user_id','$food','$drink','$keywords','$picture');");
  $stmt->execute();
  header("Location:userpage.php"); //This could be the user page also
 ?>
