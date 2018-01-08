<?php
include("includes/header.php");
include('includes/navbar.php');
?>
  <div>
    <h1 class="login">Sign Up</h1>
  </div>
  <div class="signup">
    <form action="process-signup.php" method="post">
      <span>Username</span><input type="text" name="username"/><br/>
      <span>Password</span><input type="text" name="password"/><br/>
      <span>Email</span><input type="text" name="email"/><br/>
      <input type="submit"/>
    </form>
  </div>
<?
include("includes/footer.php");
?>
