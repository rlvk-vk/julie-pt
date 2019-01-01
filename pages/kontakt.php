<?php 
$PAGE_TITLE = 'Kontakt | Julie Personlig Træner';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main>
	<h1 id="p-t">Kontakt</h1>

	<div class="d-f-lg fw-w-lg jc-sa-lg desktop-container">
		<div class="q ta-c pr-1 pl-1 mb-2 w-6-lg o-1-lg">“Fitness handler ikke om at være bedre end nogen andet. Det handler om at være bedre end du plejede at være.”</div>

		<div class="ta-c pr-1 pl-1 mb-2 w-6-lg o-2-lg">
			Julie Bechmann Jensen<br />
			Byskov Allé 19, 3 Tv<br />
			4200 Slagelse, Danmark<br />
			Juliebech95@gmail.com
		</div>

		<div class="twi w-6-lg o-4-lg">
			<div class="i" style="background-image: url('/assets/images/kontakt.jpg');">
				<div class="if"></div>
			</div>
			<div class="c">
				<div class="b">Jeg elsker at kunne gøre noget godt for andre og give et skub i den rigtige retning og at få  har succes med deres mål. Succes og mål kan være en udfordring men med en hjælpende hånd kan være netop det man har brug for. Skal jeg være en del af din rejse?</div>
			</div>
		</div>

		<form action="/kontakt" method="POST" class="w-6-lg o-3-lg">
			<h3 class="mb-1">Kontakt mig herunder</h3>
			<div class="form-element">
				<label for="form-name">Navn</label>
				<input id="form-name" type="text" name="name" placeholder="Navn">
			</div>

			<div class="form-element">
				<label for="form-email">E-mail</label>
				<input id="form-email" type="text" name="email" placeholder="E-mail">
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