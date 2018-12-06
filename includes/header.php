<?php echo $_SERVER[REQUEST_URI]; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $PAGE_TITLE; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400i,700" rel="stylesheet">
	</head>
	<body <?php echo $_SERVER[REQUEST_URI] === '/' ? 'class="landing-page"' : null; ?>>
		<header>
			<a href="/" id="m-l">Logo</a>
			<div id="toggle-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav>
				<ul>
					<li><a href="/pages/personlig-traening">Personlig træning</a></li>
					<li><a href="/pages/online-forloeb">Online forløb</a></li>
					<li><a href="/pages/guides">Guides</a></li>
					<li><a href="/pages/om-mig">Om mig</a></li>
					<li><a href="/pages/kontakt">Kontakt</a></li>
				</ul>
			</nav>
		</header>