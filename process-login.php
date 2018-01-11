<?php
  session_start();

  $username = $_POST["username"];
  $password = $_POST["password"];

  include("includes/database.php");
  include("includes/header.php");
  include("includes/navbar.php");


  $sql = "SELECT * FROM `User` WHERE `username` = '$username' AND `password` = '$password';";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    // Login
    $_SESSION["authenticated"] = 'true';
    $_SESSION["user_id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    //header("Location: index.php");
    ?>
    <div class="login-message-cont">
      <h3 class="login-message">You have been logged in</h3>
      <p>Click here to go <a href="index.php">Home</a></p>
    </div>
    <?
  }else{
    ?>
    <div class="login-message-cont">
      <h3 class="login-message">You typed an incorrect password/username</h3>
      <p>Click <a href="login-form">here</a> to try again</p>
    </div>
    <?
  }
  include("includes/footer.php");
?>
