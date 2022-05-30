<?php session_start(); 
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>
        About
    </title>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css"> 
    <title>
        My Site
    </title>
</head>
<body style="background-image:url(../images/1626192986_52-kartinkin-com-p-fon-dlya-messendzhera-krasivo-54.jpg); background-repeat: no-repeat;background-position: center center;background-attachment: fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Zer0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./about.php">Обо мне</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./galery.php">Галерея</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./hobby.php">Хобби</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./projects.php">Мои проекты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./game.php">Игра</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="#">Настройки</a>
<ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">

<?php $a='<li><a class="dropdown-item" href="./login.php" >Войти</a></li>';
$b='<li><a class="dropdown-item" href="./registration.php" >Зарегистрироваться</a></li>';
$c='';
if ($_SESSION['user']) {
$a='';
$b='';
$c='<li><a class="dropdown-item" href="./myprofile.php">Об аккаунте</a></li>';
}
?>
<?=$a?>
<?=$b?>
<?=$c?>
</ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>
<div class="textfield">
  <div class="container">
    <h1>
 Привет, меня зовут Иван 
    </h1>
  </div>
</div>
<p>
  <picture>
  <source media="(min-width:1000px)" srcset="../images/swag-1000.jpg" >  
  <source media="(min-width:650px)" srcset="../images/swag-650.jpg" >
  <source media="(min-width:200px)" srcset="../images/swag-300.jpg" >
   <img src="../images/swag.jpg" class="left">
   Давайте я расскажу вам немного о себе. Ну чтож, начнем. Мне 18 лет, в настоящее время я учусь в УлГТУ на 1-курсе.
    Я очень общительный и позитивный человек, люблю заводить новые знакомства, заниматься спортом, играть в компьютерные игры. Мне очень нраятся активные виды спорта, такие как баскетбол, футбол
    и хоккей, я люблю много гулять на улице.За последний год у меня появилось много новых 
    друзей, готовых помочь в любую минуту. Вместе с ними мы проводим почти каджый день, учимся вместе разбираем задачи, помогаем друг другу. Этим я очень обязан своим друзьям.
    <br> <br> 
    Естественно, как у любого студента ИВТ одно из моих любиых занятий программирование.Несмотря на то, что оно дается мне не так уж и легко, как хотелось бы, но свои результаты все же в том 
    есть.Как говорится: усердство и труд все перетрут. Например, почти за год учебы в ВУЗе я научился работать с массивами, обрабатывать данные из текстовых файлов, получил новый опыт в работе 
    с электронными таблицами. В данный момент я веду активное изуцение CSS и Javascript, изучаю механику работы сайтов. Надеюсь, что в будущем при должном усердии я получу 
    хорошее образование по своей специальности и буду создавать собственные большие проекты.
    <br> <br>
    Также говоря о себе, хотелось бы упомянуть, что я участвовал в студенческой весне этого года, где мы вместе с нашей командой ФИСТа заняли 2-е место. Работа над
    номером была долгой ии изнуритольной, однако посмотрев на финальный результат, понимаю, что оно того однозначно стоило.
    <br> <br>
    Я очень рад, что поступил именно в УлГТУ, ведь смотря на то, через что я прошел за этот год, могу сказать только одно, что о своем выборе я ни разу за все это время не пожалел
 </picture>
 </p>
</body>
</html>