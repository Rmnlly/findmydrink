<?php
session_start();
include("includes/header.php");
include('includes/navbar.php');
echo($_SESSION['user_id']);
?>
    <h1>Find your drink</h1>
<?
  include("includes/footer.php");
?>
