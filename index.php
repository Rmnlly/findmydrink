<?php
session_start();
include("includes/header.php");
include('includes/navbar.php');
echo($_SESSION['user_id']);
?>
    <h1>Find your drink</h1>
    <form name="frmSearch" method="post" action="search.php">
      <input name="search" type="text" id="search">
      <input type="submit" value="Search">
    </form>

<?
  include("includes/footer.php");
?>
