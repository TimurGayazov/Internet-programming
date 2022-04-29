<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: ../pages/login.php');
    }


    if($_SESSION['user']['role'] === "User" || $_SESSION['user']['role'] === "Admin"){
      header('Location: ../inc/profile.php');
    }

    require_once './connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styles.css">
    <link id="favicon" rel="icon" href="..//images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List of users</title>
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

        <div class="text-center">
            <br>
            <h1>
            Admin panel
            </h1>
        </div>
        <br>

        <div class="list_us">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Top score</th>
      <th scope="col">Role</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $list = mysqli_query($connect, "SELECT * FROM `users`");
        $list = mysqli_fetch_all($list);
        foreach($list as $li){
            ?>
            <tr>
    <th scope="row"><?= $li[0] ?></th>
    <td><?= $li[1] ?></td>
    <td><?= $li[2] ?></td>
    <td><?= $li[3] ?></td>
    <td><img src="<?= $li[5] ?>" width="100" height="100"></td>
    <td><?= $li[7] ?></td>
    <td><?= $li[6] ?></td>
    <!-- Modal -->
<div class="modal fade" id="modal<?= $li[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Do you really want to delete this account?</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Account details: </h3>
        <h5>Account number: <?= $li[0] ?></h5>
        <h5>Account name: <?= $li[1] ?></h5>
        <h5>Login: <?= $li[2] ?></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="./delete.php?id=<?= $li[0]?>" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
    <td>
        <a href="../pages/mainedit.php?id=<?= $li[0]?>" style="color:blue;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
        </svg>
        </a>
    </td>
    <td>
        <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#modal<?= $li[0] ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
        </svg>
        </button>
    </td>
    </tr>        
        <?php
        }
    ?>
  </tbody>
</table>
            <a href="./profile.php" style="color:blue; text-decoration:none; border:2px solid blue; padding:5px; border-radius: 10px;">Go back to the profile page</a>
        </div>


    </main>
    <!-- <footer>

    </footer>  -->
  <script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>
  


</body>
</html>