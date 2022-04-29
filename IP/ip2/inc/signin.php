<?php
    session_start();
    require_once './connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email'],
            "avatar" => $user['avatar'],
            "login" => $user['login'],
            "password" => $user['password'],
            "score" => $user['score'],
            "role" => $user['role']

        ];
        header('Location: ../inc/profile.php');
        
    } else{
        $_SESSION['error_pass'] = "Invalid username or password";
        header('Location: ../pages/login.php');

    }