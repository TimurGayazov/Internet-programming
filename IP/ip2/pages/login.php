<?php
    session_start();
    if($_SESSION['user']){
      header('Location: ../inc/profile.php');

      
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/reg_log.css">
    <link id="favicon" rel="icon" href="..//images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <main>
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">             
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="btn btn-light" href="../index.php" type="submit" style="float: inline-start; margin-left: 5px; margin-top: 5px; align-items: center; background: #d3d3d3; border-color: #d3d3d3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
              </a>  
            </div>
          </div>
        </nav>

        <div class="text-center">
          <form class="text-center" action="../inc/signin.php" method="post">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter your login">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <br>
            <button type="submit">Log in</button>
            <p>
            Don't you have an account? - <a href="./regist.php" class="hint">Create an account</a>
            </p>
          </form>
        </div>
        <?php
          
            if ($_SESSION['error_pass']){
                echo '<p class="err">' .$_SESSION['error_pass']. '</p>';
            }
            unset($_SESSION['error_pass']);
        ?>


    </main>
    <!-- <footer>

    </footer>  -->
  <script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>