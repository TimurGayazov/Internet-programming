<?php 
    session_start();
    require_once 'connect.php';
    if (!$connect){
        die('Connection Error');
    }
    $_SESSION['message']='';
    $id = $_POST['id'];
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    $l=0;
    $pass1=$_POST['pass'];
    if (mb_strlen($login) < 5 || mb_strlen($login)> 20){
        $_SESSION['message'] = 'Недопустимая длина логина';
        header('Location: changepage.php');   
        $l++;
    }
    if (mb_strlen($pass1) < 5 || mb_strlen($pass1)> 30){
        $_SESSION['message'] = 'Недопустимая длина пароля (от 5 до 30 символов)';
        header('Location: changepage.php');       
        $l++;
    }
    if ($l==0){
    $pass1 = md5($pass1."jvb3n8ew21q");
    mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `pass` = '$pass1' WHERE `users`.`id` = '$id'");
    header('Location: myprofile.php');
}
    