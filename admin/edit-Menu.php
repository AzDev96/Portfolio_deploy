<?php 
   require "./functions.php";

  $data = [
    'title' => $_POST['title'],
    'id' => $_GET['id']
   ];

    updateTask($data);
    header("Location: /admin/listMenu.php");
?>