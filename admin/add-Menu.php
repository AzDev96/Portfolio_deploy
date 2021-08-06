<?php 
require "functions.php";

$date = [
    'title' => $_POST['title'],
];

addMenu($date);
header('Location: /admin/listMenu.php'); 
?>