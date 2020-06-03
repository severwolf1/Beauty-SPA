<?php
session_start();
require_once "db.php";
$_SESSION['auth'] = true; 
$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['login'];
$_SESSION['role'] = $user['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
	<!-- Page Title -->
	<title>Secret</title>
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Merienda+One%7cMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/flaticon.css" rel="stylesheet" media="screen">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="css/slicknav.css">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen" >
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="71">
	<!-- Preloader starts -->
	<div class="preloader">
		<div class="browser-screen-loading-content">
			<div class="loading-dots dark-gray">
				<img src="images/hearts.svg" alt="Preloader" />
			</div>
		</div>
    </div>
	<!-- Preloader Ends -->
	
	<!-- Header Section Starts-->
	<header>
		<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo starts -->
					<a class="navbar-brand" href="#">
						<img src="images/logo1.png" alt="Logo" />
					</a>
					<!-- Logo Ends -->
					
					<!-- Responsive Menu button starts -->
					<div class="navbar-toggle">
					</div>
					<!-- Responsive Menu button Ends -->
				</div>
				
				<div id="responsive-menu"></div>
				
				<!-- Navigation starts -->
				<div class="navbar-collapse collapse" id="navigation">
					<ul class="nav navbar-nav navbar-right main-navigation" id="main-menu">
						<li class="active"><a href="#home">Главная</a></li>
						<li><a href="#about">О нас</a></li>
						<li><a href="#service">Услуги</a></li>
						<li><a href="#pricing">Наборы услуг</a></li>
						<li><a href="#ourteam">Наши сотрудники</a></li>
						<li><a href="#gallery">Галерея</a></li>
                        <li><a href="#contact">Контакты</a></li>
                        <li><a href='kabinet_lk.php'>Личный кабинет</a></li>
					</ul>
				</div>
				<!-- Navigation Ends -->
			</div>
		</nav>
	</header>
	<!-- Header Section Ends-->
	
	<!-- Banner Section Starts -->
	<div class="banner" id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-banner">
						<img src="images/logo.png" alt="Logo" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Section Ends -->
	
	<!-- About section starts -->
	<section class="aboutus" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="about-desc">
						<h2>Мы заботимся о вас в <span>beauty & spa</span></h2>
						
						<p>Наш салон BEAUTY & SPA предлагает вам расслабится душой и телом. Именно у нас вы получите профессиональный уход за вашим телом.</p>
						
						<a href="kabinet.php" class="btn-custom">Войти в личный кабинет</a>
					</div>
				</div>
				
				<div class="col-md-7">
					<div class="about-image">
						<img src="images/about-img.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section ends -->
	
	<!-- What do you section starts -->
	<section class="what-do-you">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="whatdoyou-heading">
						<h2>Что вы желаете?</h2>
						<p>У нас исполнятся ваши желания. Выбирайте нужную услугу и наслаждайтесь профессионализмом наших сотрудников.</p>
						
						<a href="kabinet.php" class="btn-custom"> Вход в личный кабинет</a>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4">
					<div class="whatdoyou-box">
						<figure>
							<img src="images/whatdoyou-1.jpg" alt="" />
						</figure>
						
						<div class="whatdoyou-body">
							<h3>Центр <span>Массажа</span></h3>
							<p>Наши специалисты сделают вам потрясающий массаж.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4">
					<div class="whatdoyou-box">
						<figure>
							<img src="images/whatdoyou-2.jpg" alt="" />
						</figure>
						
						<div class="whatdoyou-body">
							<h3>Spa <span>для тела</span></h3>
							<p>У нас также есть SPA, которым вы разумеется можете насладиться.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4">
					<div class="whatdoyou-box">
						<figure>
							<img src="images/whatdoyou-3.jpg" alt="" />
						</figure>
						
						<div class="whatdoyou-body">
							<h3>Косметический <span>макияж</span></h3>
							<p>Косметический макияж у нас не только красивый, но и полезный.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- What do you section ends -->
	
	<!-- Services Section starts -->
	<section class="services" id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Наши услуги</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-left">
						<div class="icon-box"><i class="flaticon-hand"></i></div>
						<h3>Массаж тела</h3>
						<p>Массаж раслабит и восстановит ваше тело</p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-right">
						<div class="icon-box"><i class="flaticon-lotus"></i></div>
						<h3>Расслабление</h3>
						<p>У нас вы придете в гармонию с самим собой</p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-left">
						<div class="icon-box"><i class="flaticon-bowl"></i></div>
						<h3>Детоксикация </h3>
						<p>Мы избавим ваш организм от токсинов</p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-right">
						<div class="icon-box"><i class="flaticon-essential-oil"></i></div>
						<h3>Душистые масла</h3>
						<p>Мы используем только натуральные и приятные вам масла</p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-left">
						<div class="icon-box"><i class="flaticon-barber"></i></div>
						<h3>Работа с вашими волосами</h3>
						<p>По вашему желаню мы сделаем вам стрижку, а также покраску ваших волос</p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6">
					<div class="service-box service-right">
						<div class="icon-box"><i class="flaticon-cosmetics"></i></div>
						<h3>Макияж</h3>
						<p>Наша косметика натуральная и безаллергенная</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services Section ends -->
	
	<!-- Membership section starts -->
	<section class="membership" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Membership Plan</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="membership-box">
						<div class="membership-header">
							<h3><span>01</span>Стартовый набор</h3>
							<h4>8 000 рублей</h4>
						</div>
						
						<div class="membership-body">
							<ul>
								<li>Стрижка</li>
								<li>Окрашивание волос</li>
								<li>Spa терапия</li>
								<li>Макияж</li>
							</ul>
						</div>
						
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="membership-box">
						<div class="membership-header">
							<h3><span>02</span>Уход за телом</h3>
							<h4>9 000 рублей</h4>
						</div>
						
						<div class="membership-body">
							<ul>
								<li>Массаж</li>
								<li>Маникюр</li>
								<li>Spa Терапия</li>
								<li>Педикюр</li>
							</ul>
						</div>
						
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="membership-box">
						<div class="membership-header">
							<h3><span>03</span>Красота</h3>
							<h4>5 000 рублей</h4>
						</div>
						
						<div class="membership-body">
							<ul>
								<li>Макияж</li>
								<li>Маникюр</li>
								<li>Педикюр</li>
								<li>Стрижка</li>
							</ul>
						</div>
						
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="membership-box">
						<div class="membership-header">
							<h3><span>04</span>VIP уход</h3>
							<h4>12 000 рублей</h4>
						</div>
						
						<div class="membership-body">
							<ul>
								<li>Массаж</li>
								<li>Макияж</li>
								<li>Spa Терапия</li>
								<li>Стрижка</li>
								<li>Окрашивание волос</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Membership section ends -->
	
	<!-- Our Team Section starts -->
	<section class="ourteam" id="ourteam">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Наши профессионалы</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="team-single">
						<figure>
							<img src="images/team-1.jpg" alt="" />
						</figure>
						
						<h3>Мария Иванова</h3>
						<p>Стилист-визажист</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="team-single">
						<figure>
							<img src="images/team-2.jpg" alt="" />
						</figure>
						
						<h3>Юлия Майснер</h3>
						<p>Парикмахер-стилист</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="team-single">
						<figure>
							<img src="images/team-3.jpg" alt="" />
						</figure>
						
						<h3>Кристина Львова</h3>
						<p>Специалист по массажу</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Team Section ends -->
	
	<!-- Photo Gallery section starts -->
	<section class="gallery" id="gallery">
		<div class="container-fluid">
			<div class="row no-pad">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Галерея</h2>
					</div>
				</div>
			</div>
			
			<div class="row no-pad">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-1.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Face Massage</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-2.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Leg Massage</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-3.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Body Massage</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-4.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Classic Facial</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-5.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Sea Salt Glow</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-6.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Anti Aging Facial</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-7.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Ginger Body Buff</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="images/gallery-8.jpg" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<h3>Waxing</h3>
								<p>Lorem Ispum Dummy Text</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Photo Gallery section ends -->
	
	<!-- Contact section starts -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Наши контакты</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="contact-box">
						<div class="contact-info">
							<p><i class="fa fa-mobile-phone"></i> 8 (912) 892 74 52</p>
							<p><i class="fa fa-map-marker"></i> Томск, ул. Красноармейская д. 12</p>
							<p><i class="fa fa-clock-o"></i> Пн – Сб 8:00 – 18:00 Вс Выходной</p>
						</div>
						
						
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section ends -->
	
	<!-- Footer section starts -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo">
						<a href="#">
							<i class="flaticon-lotus"></i>
						</a>
					</div>
						
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="footer-info">
						<p>Copyright &copy; Untitled. All rights reserved. Design By <a href="https://awaikenthemes.com/" target="_blank">Awaiken Theme</a> Images <a href="https://unsplash.com/" target="_blank">Unsplash</a>, <a href="https://pixabay.com/" target="_blank">Pixabay</a>, <a href="http://www.freepik.com" target="_blank">Freepik</a>, Icon <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></p>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="footer-menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Service</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section ends -->
	
    <!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- Parallax -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
    <!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap form validator -->
	<script src="js/validator.min.js"></script>
    <!-- Counterup js file -->
	<script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="js/isotope.min.js"></script>
    <!-- Slick Nav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- Owl Carousel js file -->
	<script src="js/owl.carousel.js"></script>
    <!-- Typed js file -->
	<script src="js/typed.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAsdzx6REuLqvQJC9VffvqM_84hUlKbWyM"></script> 
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
</body>
</html>