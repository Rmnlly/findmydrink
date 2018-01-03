<?php
session_start();
  include("includes/header.php");
  include('includes/navbar.php');
  include("includes/database.php");
?>
<div>
  <h1>Login</h1>
</div>
<div>
  <form action="process-login.php" method="POST">
    <p>
      Username: <input type="text" name="username" />
    </p>
    <p>
      Password: <input type="password" name="password" />
    </p>
    <input type="submit" />
  </form>
</div>

<? include('includes/footer.php'); ?>
