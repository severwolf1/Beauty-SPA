<?php
session_start();
require_once "db.php";
$role = $_SESSION['role'];
$id = $_SESSION['id'];
$valid = $_SESSION['valid'];
$search = $_POST['search'];
$search = trim($search);
if (isset($_POST['serchButton']) && $search != " " && !empty($search)) {    
    $sql = "SELECT * FROM services WHERE `information_serv` LIKE '%$search%' AND `name_serv` LIKE '%$search%' AND id_sot != 0 ORDER BY id DESC";
} else
    $sql = "SELECT * FROM services WHERE id_sot != 0 ORDER BY id DESC";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="screen,projection" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <title>Beauty&SPA</title>
    <style>
        #menu, #menu li {

margin: 0; /* убрать внутренние отступы */

padding: 0; /* убрать внешние отступы */

}

#menu {
background: rgb(95, 6, 6); /* цвет фона навигационной панели */
}

#menu li{
display:inline-block; /* расположить пункты горизонтально */

text-align: center; /* текст горизонтально по центру */
}
#menu a {

display: block; /* ссылка растягивается на весь пункт li */
padding: 5px 15px; /* задаем внутренние отступы */
color: #fff; /* цвет текста */
text-decoration: none; /* убрать нижнее подчёркивание у ссылок */
}
#menu a:hover {
background: rgb(148, 64, 64); /* фон пунктов при наведении */
}
</style>
</head>
<body>
<header>
		
				
<nav class="navbar navbar-expand-sm pk-color">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo starts -->
					<a class="navbar-brand" href="#">
						<img src="images/logo1.png" alt="Logo" />
					</a>
                <!-- Для телефона!!! --> 
            </div>
            <div>
                    <ul id="menu">
                            <li class="active"><a href="index.php" style='color: white'>Главная </a></li>
                            <?php
                            if ($_SESSION['online'] == 1) {
                                $sqli = "SELECT * FROM klients WHERE id_sot = 0 AND id_klient=$id";
                                $resulti = mysqli_query($link, $sqli) or die("Ошибка " . mysqli_error($link));
                                $rowi = mysqli_fetch_array($resulti);
                                if ($_SESSION['role'] == "admin")
                                    echo "<li><a href='newWrite.php' style='color: white'>Новая Запись</a></li>";
                                if ($_SESSION['role'] == "klient" && empty($rowi['id']))
                                    echo "<li><a href='#' style='color: white'>Записи</a></li>";
                                if ($_SESSION['role'] == "sot")
                                    echo "<li><a href='newWrite.php' style='color: white'>Новая Запись</a></li>";
                                echo "<li><a href='matForm.php' style='color: white'>Косметология</a></li>
                                <li><a href='exit.php' style='color: white'>Выход</a></li>";
                            }
                            else
                                echo "<li><a href='authForm.php' style='color: white'>Авторизация</a></li>"
                            ?>
                    </ul>
            </div>
            
        </div>
    </nav>
    <?php
                        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
                        while ($row = mysqli_fetch_array($result)) {                            
                            $name_serv = $row['name_serv'];
                            $information_serv = $row['information_serv'];
                            $phone = $row['phone'];
                            $phone = "<a href='tel:".$phone."'><h6 style='display: inline; color: blue'>".$phone."</h6></a>";
                            $email = $row['email'];
                            $email = "<a href='mailto:".$email."'><h6 style='display: inline; color: blue'>".$email."</h6></a>";
                            
                            $id_serv = $row['id'];
                            $id_sot = $row['id_sot'];
                            echo "
                                <div class='card' style='margin: 20px 0; border-radius: 20px;'> 
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col'>
                                                <h4>Название: <b>$name_serv</b></h4>
                                                <div class='alert alert-dark'>
                                                    <h6>$information_serv</h6>
                                                </div>
                                                <h6>Телефон: $phone | E-mail: $email</h6><h6 style='display: inline;'>";
                            if (!empty($role)) {
                                $sqli = "SELECT * FROM klients WHERE id_serv = $id_serv";
                                $resulti = mysqli_query($link, $sqli) or die("Ошибка " . mysqli_error($link));
                                $num = mysqli_num_rows($resulti);
                                if ($num==0 ) 
                                    echo " | <b style='color: green'>Запись свободна</b>
                                    <a style='position: absolute; bottom: 0; right: 15px;' href='klientForm.php?id=$id_serv&id_sot=$id_sot'><button class='btn btn-success'>Записаться</button></a>";
                                    else 
                                    echo " | <b style='color: red'>Засись невозможна</b>";                                
                            }
                            if ($role == "klient") {
                                $sqli = "SELECT * FROM klients WHERE id_klient = $id AND id_serv = $id_serv";
                                $resulti = mysqli_query($link, $sqli) or die("Ошибка " . mysqli_error($link));
                                $rowi = mysqli_fetch_array($resulti);
                                if (!empty($rowi)) {
                                    
                                    if ($rowi['valid'] == 1)
                                        echo "<p></p><b style='color: green; '>Вы записаны</b>";
                                    if ($rowi['valid'] == 0)
                                        echo "<p></p><b style='color: red; '>Данная запись занята</b>";
                                }}
                                
                        else if ($role == "admin") {
                                echo "<a style='position: absolute; bottom: 0; right: 15px;' href='no.php?id=$id_serv'><button class='btn btn-danger'>Удалить</button></a>";
                            }                            
                            else if (empty($role))
                                echo "<p></p><small><b style='color: red'>Авторизируйтесь или пройдите регистрацию, чтобы оставить заявку</b></small>";
                                        echo "</div>
                                        </div>
                                    </div>
                                </div>   
                            ";
                        }
                    ?>
	</header>
</body>
</html>