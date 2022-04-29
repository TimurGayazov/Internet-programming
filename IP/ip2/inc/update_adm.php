<?php
    require_once './connect.php';
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $score = $_POST['score'];

    mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password', `role` = '$role', `score` = '$score' WHERE `users`.`id` = '$id'");
    header("Location: ./users_for_adm.php");