<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport"
	      content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic"
	      rel="stylesheet">
	<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
	<!--	      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--	<link rel="stylesheet" href="css/media.css">-->
</head>
<body>
<header>
	<div class="container">
		<nav>
			<a href="?page=Home" class="nav__logo"><img src="images/logo.png" alt=""></a>
			<div class="nav__list">
				<ul>
					<li><a href="?page=About">About</a></li>
					<li><a href="?page=Features">Features</a></li>
					<li><a href="#">Testimonials</a></li>
				</ul>
			</div>
			<div class="nav__social-media">
				<ul>
					<li><a href="https://facebook.com/"><img src="images/facebook.png" alt=""></a></li>
					<li><a href="https://twitter.com/"><img src="images/twitter.png" alt=""></a></li>
					<li><a href="https://www.google.ru/"><img src="images/google.png" alt=""></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<?php
$page=$_GET["page"];
switch ($page){
    case "About": include_once ('about.php'); break;
    case "Features": include_once ('features.php'); break;
    default: include_once ('home.php'); break;
}
?>
<footer class="mobile-platforms">
	<div class="container">
		<div class="mobile-platforms__wrap">
			<a href="https://www.android.com/"><img src="images/android_icon.png" alt=""></a>
			<a href="https://www.apple.com/"><img src="images/ios_icon.png" alt=""></a>
			<a href="https://www.microsoft.com/"><img src="images/windows_icon.png" alt=""></a>
		</div>
		<p>© 2015&nbsp<a href="index.php">Capture.com</a>. All Rights Reserved</p>
	</div>
</footer>

<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"-->
<!--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"-->
<!--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"-->
<!--        crossorigin="anonymous"></script>-->
<script src="js/app.js"></script>
</body>
</html>
