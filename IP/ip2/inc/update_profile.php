<?php
    require_once './connect.php';
    // require_once './profile.php';
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = $_POST['avatar'];
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './'. $path)) {
            $_SESSION['error_pass'] = "Error loading the image";
        }

    mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password', `avatar` = '$path' WHERE `users`.`id` = '$id'");
    // unset($_SESSION['user']);
    // header("Location: ../pages/login.php");
    header("Location: ./profile.php");
