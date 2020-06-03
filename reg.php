<?php
session_start();

require_once "db.php";
require_once "salt.php";
$login = $_POST['login'];
$login = preg_replace('/\s+/', '', $login);
$_SESSION['login'] = $login;
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$proff = $_POST['proff'];
if (empty($proff) )
    $proff = "Не указана специальность!";
$phone = $_POST['phone'];
$information = $_POST['information'];
if (empty($information) )
    $information = "Описания нет!";
$role = $_POST['role'];
if (empty($password) || empty($login)) { 
                    exit();
}
$sql = "SELECT * FROM users WHERE login='$login'";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
$isLoginFree = mysqli_fetch_assoc($result);
if (!empty($isLoginFree)) {
    echo "Занят";
    exit();
}

$salt = generateSalt();

$pass = md5(md5($salt).md5($password));

$sql = "INSERT INTO users (`login`, `password`, `salt`, `role`, `name`, `proff`, `information`, `phone`, `email`) VALUES('$login','$pass','$salt', '$role', '$name', '$proff', '$information', '$phone', '$email')";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
if ($result==true) {
    echo "success";
    exit();
} else {
    echo "Данные введены неверно!";
    exit();
}
?>