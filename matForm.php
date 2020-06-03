<?php
session_start();
require_once "db.php";
$role = $_SESSION['role'];
$id = $_SESSION['id'];
$valid = $_SESSION['valid'];
$search = $_POST['search'];
$search = trim($search);
if (isset($_POST['serchButton']) && $search != " " && !empty($search)) {    
    $sql = "SELECT * FROM materials WHERE `information` LIKE '%$search%' AND `name` LIKE '%$search%' AND id_sot != 0 ORDER BY id DESC";
} else
    $sql = "SELECT * FROM materials WHERE id_sot != 0 ORDER BY id DESC";
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
                                echo "<li><a href='mat.php' style='color: white'>Новый Товар</a></li>";
                                if ($_SESSION['role'] == "klient" && empty($rowi['id']))
                                    echo "<li><a href='#' style='color: white'>Записи</a></li>
                                    <li><a href='authForm.php' style='color: white'>Косметология</a></li>";
                                if ($_SESSION['role'] == "sot" && $_SESSION['valid'] == 1)
                                    echo "<p><a href='eventForm.php'>Создать событие</a></p>
                                    <p><a href='add.php'>Посмотреть заявки</a></p>
                                    <p><a href='add.php?free=1'>Свободные волонтеры</a></p>";
                                if ($_SESSION['role'] == "sot" && $_SESSION['valid'] == 0)
                                    echo "<p><b  style='color: red'>ВАША АКАУНТ НЕ ПОДТВЕРЖДЁН!</b></p>";
                                    echo "<li><a href='matForm.php' style='color: white'>Косметология</a></li>
                                    <li><a href='exit.php' style='color: white'>Выход</a></li>";
                            }
                            else
                                echo "<li><a href='authForm.php' style='color: white'>Авторизация</a></li>
                                <p><a href='authForm.php'>Войти</a>"
                            ?>
                    </ul>
            </div>
            
        </div>
    </nav>
    <?php
                        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
                        while ($row = mysqli_fetch_array($result)) {                            
                            $name = $row['name'];
                            $information = $row['information'];
                            $phone = $row['phone'];
                            $phone = "<a href='tel:".$phone."'><h6 style='display: inline; color: blue'>".$phone."</h6></a>";
                            $id_sot = $row['id_sot'];
                            echo "
                                <div class='card' style='margin: 20px 0; border-radius: 20px;'> 
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col'>
                                                <h4>Название: <b>$name</b></h4>
                                                <div class='alert alert-dark'>
                                                    <h6>$information</h6>
                                                </div>
                                                <h6>Телефон: $phone </h6>";
                                                if ($role == "admin") {
                                                    echo "<a style='position: absolute; bottom: 0; right: 15px;' href='no.php?id=$id_serv'><button class='btn btn-danger'>Удалить</button></a>";
                                                } 
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