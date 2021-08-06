<?php 
  require "functions.php";
  header("Location: /admin/listMenu.php");

  deleteMenu($_GET['id']);
?>