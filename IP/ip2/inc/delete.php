<?php
    session_start();
    require_once './connect.php';
    // require_once './users.php';
    $id = $_GET['id'];
    if ($id != 1) {
        mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
        if($_SESSION['user']['role'] === "Admin"){
            header('Location: ./users.php');
        }
        else{
            header('Location: ../inc/users_for_adm.php');
        }
    }
    else{
        if($_SESSION['user']['role'] === "Admin"){
            header('Location: ./users.php');
        }
        else{
            header('Location: ../inc/users_for_adm.php');
        }
    }