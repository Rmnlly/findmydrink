<?php
session_start();
include("includes/header.php");
include('includes/navbar.php');
?>
    <div class="search-wrapper">
      <form class= "search-form" name="frmSearch" method="post" action="process-search.php">
        <input name="search" type="text" id="search" placeholder="Search a food...">
        <input class="btn-search" type="submit" value="Search">
      </form>
    </div>

<?
  include("includes/footer.php");
?>
