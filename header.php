<!DOCTYPE html>
<html lang="en">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0"/>-->
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>
	
	<!-- Header -->
	<header id="home">

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo" src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/thatviz-logo-no-bg.png" width="30" alt="logo">
							<img class="logo-alt" src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/thatviz-logo-no-bg.png" width="30" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<!--<li><a href="/media">Media</a></li>-->
					<!--<li><a href="https://thatviz.myshopify.com/">Shop</a></li>-->
						<ul class="dropdown">
							<!--<li><a href="media">Media</a></li>-->
						</ul>
					</li>
					<li><a href="/contact">Contact</a></li>
					
					
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->