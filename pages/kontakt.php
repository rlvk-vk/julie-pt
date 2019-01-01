<?php 
$PAGE_TITLE = 'Kontakt | Julie Personlig Træner';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

if($_POST && isset($_POST['submit'])) {
	$email 		= htmlentities($_POST['email']);
	$name 		= htmlentities($_POST['name']);
	$subject 	= htmlentities($_POST['subject']);
	$message 	= htmlentities($_POST['message']);

	$dialog = [
		"show" => false,
		"message" => null,
		"type" => 'error'
	];

	if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
		$emailSubject 	= 'Ny henvendelse fra din kontaktformular!';
		$headers 		= "MIME-Version: 1.0" . "\r\n";
		$headers 		.= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers 		.= 'From: ' . $name . '<' . $email . '>' . "\r\n";
		$headers 		.= 'Sender: ' . $name . '<' . $email . '>' . "\r\n";
		$headers 		.= 'Reply-To: ' . $name . '<' . $email . '>' . "\r\n";
		$emailMsg		= "<html><head><meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;'><link href='https://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet'></head>";
		$emailMsg 		.= "<body style='font-family: Lato, sans-serif; font-size: 16px; padding: 10px; line-height: 1.5; margin: 0; width: 100%; height: 100vh; background-color: #fafafa;'>";
		$emailMsg 		.= "Navn:<br />" . $name . "<br />";
		$emailMsg 		.= "Email:<br />" . $email . "<br />";
		$emailMsg 		.= "Emne:<br />" . $subject . "<br />";
		$emailMsg 		.= "Besked:<br />" . $message;
		$emailMsg 		.= "</body></html>";
		
		if(mail('robin@vkmedia.dk', $emailSubject, $emailMsg, $headers)){
			$dialog['show'] = true;
			$dialog['message'] = 'Din besked er blevet sendt!';
			$dialog['type'] = 'success';
		} else {
			$dialog['show'] = true;
			$dialog['message'] = 'Øv! Noget gik galt, prøv igen senere.';
		}
	} else {
		$dialog['show'] = true;
		$dialog['message'] = 'Udfyld venligst alle felter!';
	}

}

?>

<main>
	<?php if(isset($dialog) && $dialog['show']){ ?>
		<div class="dialog w-10 w-4-lg fs-3 ta-r <?php echo $dialog['type']; ?>">
			<i class="far fa-times"></i>
			<p class="ta-c"><?php echo $dialog['message']; ?></p>
		</div>
	<?php } ?>

	<h1 id="p-t">Kontakt</h1>

	<div class="d-f-lg fw-w-lg jc-sb-lg desktop-container">
		<div class="w-5-lg o-1-lg">
			<div class="q ta-c pr-1 pl-1 mb-2 w-8-lg">“Fitness handler ikke om at være bedre end nogen andet. Det handler om at være bedre end du plejede at være.”</div>
			
			<div class="ta-c pr-1 pl-1 mb-2">
				Julie Bechmann Jensen<br />
				Byskov Allé 19, 3 Tv<br />
				4200 Slagelse, Danmark<br />
				Juliebech95@gmail.com
			</div>
		</div>

		<div class="twi w-5-lg o-2-lg">
			<div class="i" style="background-image: url('/assets/images/kontakt.jpg');">
				<div class="if"></div>
			</div>
			<div class="c">
				<div class="b">Jeg elsker at kunne gøre noget godt for andre og give et skub i den rigtige retning og at få  har succes med deres mål. Succes og mål kan være en udfordring men med en hjælpende hånd kan være netop det man har brug for. Skal jeg være en del af din rejse?</div>
			</div>
		</div>

		<form action="/kontakt" method="POST" class="w-5-lg o-3-lg">
			<h3 class="mb-1">Kontakt mig herunder</h3>
			<div class="form-element">
				<label for="form-name">Navn</label>
				<input id="form-name" type="text" name="name" placeholder="Navn">
			</div>

			<div class="form-element">
				<label for="form-email">E-mail</label>
				<input id="form-email" type="email" name="email" placeholder="E-mail">
			</div>

			<div class="form-element">
				<label for="form-subject">Emne</label>
				<input id="form-subject" type="text" name="subject" placeholder="Emne">
			</div>

			<div class="form-element">
				<label for="form-message">Besked</label>
				<textarea name="message" id="form-message" placeholder="Besked"></textarea>
			</div>

			<div class="form-element">
				<input type="submit" class="cta" name="submit" value="Send">
			</div>
		</form>
	</div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>