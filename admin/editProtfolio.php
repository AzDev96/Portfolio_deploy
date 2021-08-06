<?php require "functions.php" ?>
<?php include "inc/header.php" ?>
<?php 
    $task = getPort(); 
?>
<style>
.img__portfolio {
    width: 200px;
    height: 200px;
}
</style>
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
                    <h1 class="m-0 alert alert-info">Изменить Портфолио</h1>
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
            <h2 class="alert alert-primary">Изменить</h2>
            <form action="./edit-Port.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Заголовкa <input type="text" value="<?= $task['title'] ?>" name="title" id="title_menu"
                            class="form-control" />
                    </div>
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Фронт <input type="text" value="<?= $task['back'] ?>" name="back" class="form-control" />
                    </div>
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Бекенд<input type="text" value="<?= $task['front'] ?>" name="front" class="form-control" />
                    </div>
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Админ <input type="text" value="<?= $task['admin'] ?>" name="admin" class="form-control" />
                    </div>
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Сылкa<input type="text" value="<?= $task['link'] ?>" name="link" class="form-control" />
                    </div>
                    <div class="form-outline col-md-3 col-sm-6 col-12">
                        Картинкa <img class="img__portfolio" src="./uploads/<?= $task['img'] ?>" alt="">
                        <input class="form-control" type="file" name="img">
                    </div>
                </div>
                <button type="submit" class="mt-3 btn btn-success">Изменить</button>

            </form>
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