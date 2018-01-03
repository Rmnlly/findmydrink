<?php
include("includes/header.php");
include('includes/navbar.php');
?>
  <div class="signup">
    <form action="process-signup.php" method="post">
      Username: <input type="text" name="username"/><br/>
      Password: <input type="text" name="password"/><br/>
      Email: <input type="text" name="email"/><br/>
      Submit: <input type="submit"/>
    </form>
  </div>
<?
include("includes/footer.php");
?>
