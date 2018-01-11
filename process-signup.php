<?php
  session_start();
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

include("includes/database.php");
include("includes/header.php");
include("includes/navbar.php");


$sql = "INSERT INTO `User` (`id`, `email`, `username`, `password`) VALUES (NULL, '$email', '$username', '$password');";

$stmt = $pdo->prepare($sql);

$result = $stmt->execute();

if($result){
  $_SESSION["authenticated"] = true;
  $_SESSION["user_id"] = $row['id'];
  $_SESSION["username"] = $row['username'];
  ?>
  <div class="login-message-cont">
    <h3 class="login-message">Your account has been created</h3>
    <p>Click <a href="login-form.php">here</a> to log in</p>
  </div>
  <?
}else{
  ?>
  <div class="login-message-cont">
    <h3 class="login-message">There was an error creating your account</h3>
    <p>Click <a href="signup-form">here</a> to try again</p>
  </div>

  <?
}
  include("includes/footer.php");
?>
