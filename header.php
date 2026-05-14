<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Basic -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Nova Digital — Creative Marketing Agency</title>
	<meta name="description"
		content="Nova Digital helps brands grow faster with performance marketing, branding, web design and creative digital strategies.">
	<meta name="keywords"
		content="nova digital, marketing agency, performance marketing, branding, web design, digital strategy, creative agency">
	<meta name="author" content="Nova Digital">
	<meta name="robots" content="index, follow">

	<!-- Theme -->
	<meta name="theme-color" content="#ffffff">

	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:title" content="Nova Digital — Creative Marketing Agency">
	<meta property="og:description"
		content="Nova Digital helps brands grow faster with performance marketing, branding, web design and creative digital strategies.">
	<meta property="og:image" content="./assets/images/preview.jpg">
	<meta property="og:url" content="https://example.com">
	<meta property="og:site_name" content="Nova Digital">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Nova Digital — Creative Marketing Agency">
	<meta name="twitter:description"
		content="Nova Digital helps brands grow faster with performance marketing, branding, web design and creative digital strategies.">
	<meta name="twitter:image" content="./assets/images/preview.jpg">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="./images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicons/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="192x192" href="./images/favicons/android-chrome-192x192.png">
	<link rel="manifest" href="./images/favicons/site.webmanifest">
	<link rel="mask-icon" href="./images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap"
		rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container header__container">
			<a href="#hero" class="header__logo">Nova Digital</a>

			<nav class="header__nav nav" aria-label="Main navigation">
				<ul class="nav__list">
					<li class="nav__item"><a class="nav__link" href="#about">About us</a></li>
					<li class="nav__item"><a class="nav__link" href="#services">Services</a></li>
					<li class="nav__item"><a class="nav__link" href="#cases">Cases</a></li>
					<li class="nav__item"><a class="nav__link" href="#process">Process</a></li>
					<li class="nav__item"><a class="nav__link" href="#reviews">Testimonials</a></li>
					<li class="nav__item"><a class="nav__link" href="#contacts">Contacts</a></li>
				</ul>
			</nav>

			<div class="header__actions">
				<button class="theme-toggle" aria-label="Switch theme">
					☼
				</button>
				<div class="header__burger">
					<span></span>
				</div>
			</div>
		</div>
	</header>