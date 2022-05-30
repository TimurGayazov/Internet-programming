<?php 
    session_start();
    require_once 'connect.php';
    $id = $_GET['id'];
    $role = $_GET['type'];
    if ($role === 'admin') {
        header('Location: panel.php');
    }
    else{
          mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
    header('Location: panel.php');
    }
  