<?php 
  require "functions.php";
  header("Location: /admin/listPort.php");

  deletePort($_GET['id']);
?>