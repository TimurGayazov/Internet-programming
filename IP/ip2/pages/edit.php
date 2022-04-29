<?php
    session_start();
    if(!$_SESSION['user']){
      header('Location: ../pages/login.php');
    }
    if($_SESSION['user']['role'] === "User" || $_SESSION['user']['role'] === "Main Admin"){
      header('Location: ../inc/profile.php');
    }
    require_once '../inc/connect.php';
    $li_id = $_GET['id'];
    $li_full_name = $_GET['full_name'];
    $li = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` = '$li_id'"); 
    $li = mysqli_fetch_assoc($li);
      
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
    <title>Edit info an account № <?= $li_id ?></title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <main>

        <!-- <p class="positioned"> 123123123 </p> -->
        


        <div class="text-center">
          <form class="text-center" action="../inc/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $li['id']?>">
            <label>Name</label>
            <input type="text" name="full_name" placeholder="Enter new name" value="<?= $li['full_name']?>">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter new login" value="<?= $li['login']?>">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter new email" value="<?= $li['email']?>">
            <label>Password</label>
            <input type="password" required name="password" placeholder="Enter new password" value="<?= $li['password']?>">
            <br>
            <button type="submit">Update information</button>
            <br>
            <a href="../inc/users.php" style="color:red; border:2px solid red; text-decoration:none;"><h5>Cancel</h5></a>
            
          </form>
        </div>
        <?php
          
            if ($_SESSION['error_pass']){
                echo '<p class="err">' .$_SESSION['error_pass']. '</p>';
            }
            unset($_SESSION['error_pass']);
        ?>


    </main>

</body>
</html>