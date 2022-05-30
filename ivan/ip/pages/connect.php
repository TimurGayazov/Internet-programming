<?php $connect = mysqli_connect('localhost', 'root', '', 'mysite');
if (!$connect){
    die('Connection Error');
}