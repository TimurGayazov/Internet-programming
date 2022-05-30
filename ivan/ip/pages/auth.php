<?php
session_start();
require_once 'connect.php';
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass = md5($pass."jvb3n8ew21q");
$check_user = mysqli_query($connect,"SELECT * FROM `users` 
    WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" =>$user ['id'],
            "login" => $user['login'],
            "pass"=> $user['pass'],    
            "score" => $user['score'],
            "type" => $user['type']
        ];
        header('Location: myprofile.php');
    }
    // (($login = ' ') || ($pass = ' '))
    else {
        $_SESSION['message'] = 'Проверьте правильность введенных данных';
        header('Location: login.php');
        $_SESSION['loginsave']=$login; 
    }
?>