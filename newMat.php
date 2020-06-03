<?php
session_start();

require_once "db.php";
require_once "salt.php";
$name = $_POST['name'];
$information = $_POST['information'];
$phone = $_POST['phone'];
$id = $_POST['id'];
$id_sot = $_POST['id_sot'];

$sql = "INSERT INTO materials (`name`, `information`, `phone`, `id_sot`) VALUES('$name', '$information', '$phone', '$id')";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
if ($result==true) {
    echo "success";
    exit();
} else {
    echo "Данные введены неверно!";
    exit();
}