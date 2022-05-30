<?
session_start();
session_destroy();
unset($_sESSION['user']);
unset($_sESSION['admin']);
header('Location: /');
exit();
?>