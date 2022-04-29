<?php
    session_start();
    require_once './connect.php';
    if(!$_SESSION['user']){
        header('Location: ../pages/login.php');
      }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/profile.css">
    <link id="favicon" rel="icon" href="..//images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile | <?= $_SESSION['user']['full_name'] ?></title>
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
<div class="profile_block">
    <div class="row g-0 bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="<?= $li[5] ?>" width="430" height="430" alt="">
        </div>

        <div class="col-md-6 p-4 ps-md-0">
            <!-- <h2 style="text-align:center;"><?= $_SESSION['user']['full_name'] ?></h2>
            <hr>
            <h5>Account number: #<?= $_SESSION['user']['id']?></h5>
            <h5>Role: <?= $_SESSION['user']['role'] ?></h5>
            <h5>Login: <?= $_SESSION['user']['login'] ?></h5>
            <h5>Email: <?= $_SESSION['user']['email'] ?></h5>
            <h5>Record in the game: <?= $_SESSION['user']['score'] ?></h5>
            <br> -->

            <h2 style="text-align:center;"><?= $li[1] ?></h2>
            <hr>
            <h5>Account number: #<?= $li[0]?></h5>
            <h5>Role: <?= $li[6] ?></h5>
            <h5>Login: <?= $li[2] ?></h5>
            <h5>Email: <?= $li[3] ?></h5>
            <h5>Record in the game: <?= $li[7] ?></h5>
            <br>
            <?php
                if($_SESSION['user']['role'] === "User"){
                    $users_for_users = "/inc/users_for_user.php";
                }
                elseif($_SESSION['user']['role'] === "Main Admin"){
                    $users_for_users = "./users_for_adm.php";
                }
                else{
                    $users_for_users = "/inc/users.php";
                }
              ?>
            
            <a href="../pages/edit_profile.php" class="btn btn-outline-primary" style="text-decoration:none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>
                Edit Profile
            </a>
            
            <a href="<?= $users_for_users ?>" class="btn btn-outline-success" style="text-decoration:none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                List of users
            </a>

            <a href="../pages/game.php" class="btn btn-outline-info" style="text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                    <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                    <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                </svg>

            </a>
            

            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exit_acc">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                Sign out
            </button>

        </div>
    </div>
</div>


    </main>
    <!-- <footer>

    </footer>  -->
  <script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>
  <!-- Modal -->
<div class="modal fade" id="exit_acc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>
        Are you sure you want to log out of your account?
        </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="/inc/logout.php" type="button" class="btn btn-danger">Exit</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>