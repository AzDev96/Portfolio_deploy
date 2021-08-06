<?php 
require "functions.php";

$date = [
    'title' => $_POST['title'],
    'front' => $_POST['front'],
    'back' => $_POST['back'],
    'admin' => $_POST['admin'],
    'link' => $_POST['link'],
    'img' => ($_FILES['img']['name']),
    
];
move_uploaded_file($_FILES['img']['tmp_name'], "./uploads/".$date['img']);
addPort($date);
header('Location: /admin/listPort.php'); 
?>