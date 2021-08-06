<?php 
    function addMenu($date) {
       $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
       $sql = "INSERT INTO top_menu (title) VALUES (:title)"; // Мы тут добовляем в базу данных 
       $query = $pdo->prepare($sql);     // подготовка к запрасу 
       $query->execute($date);
    }
    function addPort($date) {
       $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
       $sql = "INSERT INTO portfolio (title,front,back,admin,link, img) VALUES (:title,:front,:back,:admin,:link,:img)"; // Мы тут добовляем в базу данных 
       $query = $pdo->prepare($sql);     // подготовка к запрасу 
       $query->execute($date);
    }

    function deleteMenu($id) {
        $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql = "DELETE FROM top_menu WHERE id=:id";                                        // Написали Запрос 
        $query = $pdo->prepare($sql);    // Подготовка к запросу  
        $query->bindParam(":id", $id);
        $query->execute();
    }
    
    function deletePort($id) {
        $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql = "DELETE FROM portfolio WHERE id=:id";                                        // Написали Запрос 
        $query = $pdo->prepare($sql);    // Подготовка к запросу  
        $query->bindParam(":id", $id);
        $query->execute();
    }
    
    function updateTask($data) {
        $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql = "UPDATE top_menu SET title=:title WHERE id=:id" ;
        $query = $pdo->prepare($sql);        
        $query->execute($data);   //   выполнить
    }
 

    function getAllMenu () {
         $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql = "SELECT * FROM top_menu";                                        // Написали Запрос 
        $query = $pdo->prepare($sql);                                       // Подготовка к запросу  
        $query->execute();   //   выполнить
        $tasks = $query->fetchAll(PDO::FETCH_ASSOC); // получать виде асециативного массива 
        return  $tasks;
    }

    function getMenu () {
         $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql ="SELECT * FROM top_menu WHERE id=:id";
        $query = $pdo->prepare($sql);    // Подготовка к запросу  
        $query->bindParam("id", $_GET['id']);
        $query->execute();
        return $task = $query->fetch(PDO::FETCH_ASSOC);
        return $task;
    }
    function getPort () {
         $pdo = new PDO('mysql:host=localhost;dbname=azizbek1_port', 'azizbek1_port', 'ZD2Iy9%m'); // bazaga ulandik 
        $sql ="SELECT * FROM portfolio WHERE id=:id";
        $query = $pdo->prepare($sql);    // Подготовка к запросу  
        $query->bindParam("id", $_GET['id']);
        $query->execute();
        return $task = $query->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    
?>