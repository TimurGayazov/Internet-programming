<?php
session_start();
require_once 'connect.php';
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$avatar=$_POST['avatar'];
$j=0;
$path = 'users/' .time() . $_FILES['avatar']['name'];
$query = "SELECT * FROM users WHERE login='$login'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);
if ($count!=0){
    $_SESSION['message'] = 'Такой пользователь уже существует';
    header('Location: registration.php');
    $j++;
}
if (mb_strlen($login) < 5 || mb_strlen($login)> 20){
    $_SESSION['message'] = 'Недопустимая длина логина';
    header('Location: registration.php');
    $j++;
}
if (mb_strlen($name) < 2 || mb_strlen($name)> 15){
    $_SESSION['message'] = 'Недопустимая длина имени';
    header('Location: registration.php');
    $j++;
}
if (mb_strlen($pass) < 5 || mb_strlen($pass)> 30){
    $_SESSION['message'] = 'Недопустимая длина пароля (от 5 до 30 символов)';
    header('Location: registration.php');
    $j++;
}
if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
    $_SESSION['message'] = 'Отсутствует изображение';
    header('Location: registration.php');
    $j++;

}
$pass = md5($pass."jvb3n8ew21q");
if ($j==0){
mysqli_query($connect,"INSERT INTO `users` (`login`, `pass`, `name`, `avatar`)
VALUES('$login', '$pass', '$name', '$path')");
header('Location: login.php');}
?>