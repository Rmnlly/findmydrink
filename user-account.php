<?php
session_start();
include("includes/header.php");
include('includes/navbar.php');
echo($_SESSION['user_id']);
?>

<?
  include("includes/footer.php");
?>
