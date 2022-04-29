<?php

    session_start();
    require_once './connect.php';
    // require_once './';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $avatar = $_POST['avatar'];

    if ($password === $password_confirm) {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './'. $path)) {
            $_SESSION['error_pass'] = "Error loading the image";
        header('Location: ../pages/regist.php');
        }
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
        $_SESSION['error_pass'] = "Registration was successful";
        header('Location: ../pages/login.php');
    }
    else{
        $_SESSION['error_pass'] = "Passwords don't match";
        header('Location: ../pages/regist.php');
        
    }

?>