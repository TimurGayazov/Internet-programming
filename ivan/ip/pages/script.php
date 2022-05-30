<?php
session_start();
require_once 'connect.php';
$uploaddir = '../galery/users';
$uploadfile = $uploaddir . basename($_FILES['user']['avatar']);
echo '<pre>';
if (move_uploaded_file($_FILES['user']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Ошибка загрузки файла\n";
}
print_r($_FILES);
print "</pre>";
?>