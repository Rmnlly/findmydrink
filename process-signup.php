<?php
  session_start();
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

include("includes/database.php");

$sql = "INSERT INTO `User` (`id`, `email`, `username`, `password`) VALUES (NULL, '$email', '$username', '$password');";

$stmt = $pdo->prepare($sql);

$result = $stmt->execute();

if($result){
  $_SESSION["authenticated"] = true;
  $_SESSION["user_id"] = $row['id'];
  $_SESSION["username"] = $row['username'];
  echo 'Thank you for registering with our website. You are now logged in.';
  ?>
    <a href="index.php">Home</a>
  <?
}else{
  echo("Invalid sign up. Please try again.");
  ?><a href="signup-form.php">Sign Up</a>
  <?
}
?>
