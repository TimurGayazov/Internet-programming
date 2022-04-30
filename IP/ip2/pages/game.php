<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: ../pages/login.php');
    }

    require_once '../inc/connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/style/game.css">
    <link id="favicon" rel="icon" href="..//images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Game</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <main>
    <nav class="navbar" style="background: #c0c0c0;">
            <div class="container-fluid">
              <a class="navbar-brand"><h3>Timur Gayazov | Frontend developer</h3></a>
              <form class="d-flex">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="../pages/about.php">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="../pages/hobbies.php">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="../pages/gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="../pages/myprojects.php">My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </a>
                      </li>
                  </ul>
              </form>
            </div>
    </nav>
    <?php

        $idid = $_SESSION['user']['id'];
        $list = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$idid' ");
        $list = mysqli_fetch_all($list);
        foreach($list as $li){

        }
    ?>


    <div class="game" id="start">
        
        <div id="bird"></div>
        
        <div id="croco"></div>
        <div id="dinobird"></div>
        <div id="score">
            <h3>Your score: <b>00</b></h3>
        </div>
        <h3>Your record: <?=  $li[7] ?> </h3>
        
    </div>
    <br>
    <div class="but_cl">
        <button type="button" id="start_game" class="first_butt">Start game</button>
    </div>
    
    <br>

    <div id="result">
    <div id="score">
            <h3>Your score: <input class="output_res" id="out" value="0"></h3>
        </div>
    <h3>Your record: <?= $li[7] ?> </h3>
    </div>

    <form class="text-center" action="../inc/update_res.php" method="post" id="form_up">
        <input type="hidden" name="id" value="<?= $_SESSION['user']['id']?>">
        <input type="hidden" name="score" id="scr" value="<?= $li[7] ?>">
        <br>
        <button type="submit" class="save" id="save">Save new record</button>
    </form>
    <!-- <a href="../inc/profile.php" style="color:blue; text-decoration:none; border:2px solid blue; padding:5px; border-radius: 10px;">Go back to the profile page</a> -->

    </main>
    <!-- <footer>

    </footer>  -->
    <script src="/scripts/game.js"></script>
    <script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>
  <!-- Modal -->

</body>
</html>