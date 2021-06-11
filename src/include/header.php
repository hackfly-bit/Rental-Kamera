
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Startup 4.0 - One Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="./asset/i/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,600,500,700,800,900|Inter:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Startup 3 CSS (Styles for all blocks) -->
		<link href="./asset/css/style.css" rel="stylesheet" />
		<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head> 
	<body>
		<!-- Navigation -->
        <?php ?>
		<nav class="pt-30 pb-30 bg-light lh-40 text-center navigation_8">
			<div class="container px-xl-0">
				<div class="row align-items-center">
					<div class="col-lg-3 text-lg-left">
						<a href="index.html" class="link logo color-main"> Rental kamera </a>
					</div>
					<div class="col-lg-6">
						<a href="#" class="link mr-15 color-main">Home</a>
						<a href="#" class="link mx-15 color-main">Equipment</a>
						<a href="#" class="link mx-15 color-main">Info</a>
						<a href="#" class="link mx-15 color-main">Contact Us</a>
					</div>
                    <?php 
                    session_start();
                    if($_SESSION['status']!="login") {?>
					<div class="mt-10 mt-lg-0 col-lg-3 text-lg-right">
						<a href="login.php" class="link mr-30 color-main">Login</a>
						<a href="./src/Sign up/index.html" class="btn sm border-gray color-main f-16">Sign Up</a>
					</div>
                    <?php }else{?>
                    <div class="mt-10 mt-lg-0 col-lg-3 text-lg-right">
						<a href="#" id="cart"><i class="fa fa-shopping-cart" style="margin-right: 40px;"></i></a>
						<a href="#" id="profile"><i class="fa fa-user" aria-hidden="true"></i></a><span style="margin-right: 30px; padding-left: 5px;"> <?php echo $_SESSION['nama']; ?> </span>
                        <a href="logout.php" class="link color-main">logout</a>
					</div>
                        <?php }?>
				</div>
			</div>
		</nav>