<?php
session_start();

require_once "db.php";
require_once "salt.php";
$name_serv = $_POST['name_serv'];
$information_serv = $_POST['information_serv'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id = $_POST['id'];
$id_sot = $_POST['id_sot'];

$sql = "INSERT INTO services (`name_serv`, `information_serv`, `phone`, `email`, `id_sot`) VALUES('$name_serv', '$information_serv', '$phone', '$email', '$id')";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
if ($result==true) {
    echo "success";
    exit();
} else {
    echo "Данные введены неверно!";
    exit();
}
?>