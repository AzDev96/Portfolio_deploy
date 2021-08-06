<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['name'];
    $password = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `adminuser` WHERE `name` = '$login' AND `pass` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id']
        ];

        header('Location: admin.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: /admin');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
