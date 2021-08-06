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
                    <h1 class="m-0 alert alert-dark">Добавить Портфолио</h1>
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
            <h2 class="alert alert-primary">Добавить</h2>
            <form action="./add-Port.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_menu">Добавть Заголовку</label>
                        <input type="text" name="title" id="title_menu" class="form-control" />
                    </div>
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_front">Добавть Фронт-название</label>
                        <input type="text" name="front" id="title_front" class="form-control" />
                    </div>
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_back">Добавть Бекенд-название</label>
                        <input type="text" name="back" id="title_back" class="form-control" />
                    </div>
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_admin">Добавть Админ-название</label>
                        <input type="text" name="admin" id="title_admin" class="form-control" />
                    </div>
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_link">Добавть Сылку-название</label>
                        <input type="text" name="link" id="title_link" class="form-control" />
                    </div>
                    <div class="form-outline col-12 col-sm-6 col-md-3">
                        <label class="form-label" for="title_img">Добавть Картинку</label>
                        <input type="file" name="img" id="title_img" class="form-control" />
                    </div>
                </div>
                <button type="submit" class="mt-3 btn btn-success">Добавить</button>
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