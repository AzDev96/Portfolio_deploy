<?php 
    session_start();  
 if ($_SESSION['user']) {
    header('Location: admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <title>Войти</title>
    <style>
        .center__row{
            position: absolute;
            top: 40%;
            left: 0%;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form__center">
    <div class="container">
        <h2 class="alert alert-info text-center">Войти в Админку</h2>
        <div class="row center__row">
            <div class="col-12 col-sm-6 col-md-3">
                <form action="login.php" method="POST">
                    <h2 class="alert alert-success">Войти</h2>
                    <?php 
                          if ($_SESSION['message']) {
                            echo '<p class="alert alert-danger"> ' . $_SESSION['message'] . ' </p>';
                          }
                         unset($_SESSION['message']);
                    ?>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="name" type="text" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Имя</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input name="pass" type="password" id="form1Example2" class="form-control" />
                        <label class="form-label" for="form1Example2">Пароль</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>