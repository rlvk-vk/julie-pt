<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $PAGE_TITLE; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/main.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.vkmedia.dk/vk-css-utility-1.0.0.css" />
		
		<!-- Online assets -->
		<!-- TODO: Should be downloaded so they are not dependent on an internet connection -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-t0iPfoyIjBoVR2Kw/65HArpRWQy0/xKBUmdEVTs5VYBb/yiPZxMY6egc9MROr/Og" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-srL3Qh9R/n855m4o5fegS//B2q0R1md7z6ndDYaPj8iEp0j0IuKdFVWMY0JosKPF" crossorigin="anonymous">
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
					<li><a href="/personlig-traening">Personlig træning</a></li>
					<li><a href="/online-forloeb">Online forløb</a></li>
					<li><a href="/guides">Guides</a></li>
					<li><a href="/om-mig">Om mig</a></li>
					<li><a href="/kontakt">Kontakt</a></li>
				</ul>
			</nav>
		</header>