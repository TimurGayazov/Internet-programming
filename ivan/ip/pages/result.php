<?php
    require_once './connect.php';
    $id = $_POST['id'];
    $score = $_POST['score'];

    mysqli_query($connect, "UPDATE `users` SET `score` = '$score' WHERE `users`.`id` = '$id'");
    // unset($_SESSION['user']);
    // header("Location: ../pages/login.php");
    header("Location: game.php");
