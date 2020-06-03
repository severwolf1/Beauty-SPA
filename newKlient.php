<?php
session_start();

require_once "db.php";
require_once "salt.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$id = $_POST['id'];
$edit = $_POST['edit'];
$id_serv = $_POST['id_serv'];
$id_sot = $_POST['id_sot'];

if (empty($edit))
    $sql = "INSERT INTO klients (`id_klient`, `id_sot`, `id_serv`, `name`, `email`, `phone`) VALUES('$id', '$id_sot', '$id_serv','$name', '$email', '$phone')";
else 
    $sql = "UPDATE klients SET `name`='$name', `email`='$email', `phone`='$phone', WHERE id_volunteer=$id";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
if ($result==true) {
    echo "success";
    exit();
} else {
    echo "Данные введены неверно!";
    exit();
}
?>