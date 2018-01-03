<?php
  session_start();

  $username = $_POST["username"];
  $password = $_POST["password"];

  include("includes/database.php");

  $sql = "SELECT * FROM `User` WHERE `username` = '$username' AND `password` = '$password';";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    // Login
    $_SESSION["authenticated"] = 'true';
    $_SESSION["user_id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    header("Location: main.php");
  }else{
    echo("Incorrect username and password. Please try again.");
  }

?>
