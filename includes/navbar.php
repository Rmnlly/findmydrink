<?php?>
<nav class="nav-bar">
  <h1 class="title">
    <a href="index.php">Find My Drink</a>
  </h1>

  <ul>
    <?if($_SESSION["authenticated"]==true) {
      ?>
        <li><a href="user-account.php">My Account</a></li>
        <li><a href="process-logout.php">Logout</a></li>
      <?
    } else {
      ?>
      <li><a href="signup-form.php">Sign Up</a></li>
      <li><a href="login-form.php">Login</a></li>
      <?
    }
      ?>
  </ul>
</nav>
