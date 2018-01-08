<?php
session_start();
include("includes/header.php");
include('includes/navbar.php');
echo($_SESSION['user_id']);
?>
    <div class="search-wrapper">
      <form class= "search-form" name="frmSearch" method="post" action="process-search.php">
        <input name="search" type="text" id="search">
        <input type="submit" value="Search">
      </form>
    </div>

<?
  include("includes/footer.php");
?>
