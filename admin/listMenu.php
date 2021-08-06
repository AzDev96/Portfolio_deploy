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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 alert alert-danger">Посмотреть Меню</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <h2 class="alert alert-primary">Посмотреть</h2>
                    <ul class="list-group">
                        <?php 
                            $sql = "SELECT * FROM top_menu";
                            $query = $pdo->prepare($sql);
                            $query->execute();
                            $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <?php foreach($tasks as $task) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <i><?= $task['title'] ?></i>
                            <div class="buttons">
                                <a class="btn btn-warning" href="editMenu.php?id=<?= $task['id']; ?>">Изменить</a>
                                <a class="btn btn-danger" href="delete-menu.php?id=<?= $task['id']; ?>">Удалить</a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
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