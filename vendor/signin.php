<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "role" => $user['role'],
            "message" => $user['message'],
            "howmessage" => $user['howmessage'],
            "messagetext" => $user['messagetext']
        ];

        header('Location: /panel/');

    } else {
        $_SESSION['message'] = 'Wrong login or password';
        header('Location: /login/');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
