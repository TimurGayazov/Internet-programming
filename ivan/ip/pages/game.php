<?php session_start(); 
if (!$_SESSION['user']){
  header('Location: login.php');
}
require_once('connect.php');
$idid = $_SESSION['user']['id'];
$list = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$idid' ");
$list = mysqli_fetch_all($list);
foreach($list as $li){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/game.css">
    <title>
        Game
    </title>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/game.css"> 
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
<div>
  <div class="border"> 
  <div class="module">
<img src="../images/icons/grif.png" alt="" class="grifpos" >
<img src="" class="droppable left" width="81" height="100" style="opacity:0">
<img src="" class="droppable right" width="81" height="100" style="opacity:0">
<img src="../images/icons/strelka.png" alt="" class="strelka">
</div>
<div class="game-score">    
    <p>Mg=<span class="mass">200</span></p>
     <p id="mass"></p> 
     <span class="score-count" style="visibility:hidden;">0</span>
    <p id="score"></p> 
</div>
<div class="mpos">
<img src="../images/icons/5.png" alt="" id="mas5" class="blin" draggable="true" value="5" width="70">
<img src="../images/icons/10.png" alt="" id="mas10" class="blin" draggable="true" value="10" width="85">
<img src="../images/icons/15.png" alt="" id="mas15" class="blin" draggable="true" value="15" width="100">
</div>
</div>
<div class="buttons">
  <button class = "butt" id="butt1" type="button" onclick="window.location.reload( true );">Начать заново</button>
  <button class = "butt" id="butt2">Записать результат</button>  
</div>

<form action="result.php" method="post" id="results">
<input type="hidden" name="id" value="<?= $_SESSION['user']['id']?>">
<input type="hidden" name="score" id="scr" value="<?= $li[5] ?>">
<br>
<button type="submit" class="save text-center" id="save" style="height:auto;">Сохранить результат</button>
</form>
</div>
<?php 
if (isset($_POST['sendscore']))
{
  $score = filter_var(trim($_POST['score']),
  FILTER_SANITIZE_STRING);
  mysqli_query($connect,"INSERT INTO `users` (`score`)
  VALUES('$score')");  
}
?>
<script src="/scripts/jquery-3.6.0.js"></script>
<script src="/scripts/game.js"></script>
<script src="../scripts/rotate.js"></script>
<script src="../scripts/rotate1.js"></script>


<form method="POST">


</form>
</body>
</body>
</html>