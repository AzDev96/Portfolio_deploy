<?php include "bd.php" ?>
<?php include "inc/header.php" ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <?php include "inc/sidebar.php" ?>

</aside>
<style>
    .img__portfolio{
        width: 200px;
        height: 200px;
    }
    .list__group_ul{
        margin-bottom: 50px;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 alert alert-danger">Посмотреть Портфолио</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li><a class="btn btn-warning mr-3" href="#">Главный</a></li>
                        <li><a class="btn btn-danger mr-3" href="#">Выйти</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php 
     $sql = "SELECT * FROM portfolio";
     $query = $pdo->prepare($sql);
     $query->execute();
     $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
 ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php foreach($tasks as $task) : ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <ul class="list-group list__group_ul">
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>ID:</u>
                            <?= $task['id'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Заголовкa:</u>
                            <?= $task['title'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Фронт :</u>
                            <?= $task['front'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Бекенд :</u>
                            <?= $task['back'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Админ :</u>
                            <?= $task['admin'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Сылкa :</u>
                            <?= $task['link'] ?></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><u>Картинкa :</u>
                            <img class="img__portfolio" src="./uploads/<?= $task['img'] ?>" alt="img"></li>
                        <div class="buttons">
                            <a class="btn btn-warning" href="editProtfolio.php?id=<?= $task['id']; ?>">Изменить</a>
                            <a class="btn btn-danger" href="delete-port.php?id=<?= $task['id']; ?>">Удалить</a>
                        </div>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?php include "inc/footer.php" ?>