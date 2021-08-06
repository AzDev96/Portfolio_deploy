<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logoImg" src="./images/LogoPNG.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto smooth-scroll">
             <?php 
                $sql = "SELECT * FROM top_menu";
                $query = $pdo->prepare($sql);
                $query->execute();
                $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
             ?>
             <?php foreach($tasks as $task) : ?>
            <li class="nav-item">
              <a class="nav-link" href="#home"><?= $task['title'] ?></a>
            </li>
            <?php endforeach; ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#about" data-offset="100">Обо мне</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills" data-offset="100">Навыки</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#works" data-offset="100">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-offset="100">Контакты</a>
            </li> -->
            <li class="nav-item nav__item-icons">
              <i class="fas fa-language"></i>
              <a class="nav-link" href="../../indexuz.php" data-offset="100">UZ</a>
              <a class="nav-link" href="../../index.php" data-offset="100">RU</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>