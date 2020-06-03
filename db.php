<?php
$host='localhost';
$database = "beaty-spa";
$user='root';
$password='nata1234';
$link = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($link, 'utf8');
if (mysqli_connect_errno())
{
  echo 'Ошибка подлючения к базе данных ('.mysqli_connect_errno().'): ('.mysqli_connect_error().')';
  exit();
}
?>
