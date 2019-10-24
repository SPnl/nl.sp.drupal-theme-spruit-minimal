<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 */

$facebook = "https://www.facebook.com";
$twitter = "https://www.twitter.com";
$whatsapp = "https://www.whatsapp.com";
$email = "mailto:?subject=Iiets";
?>

<?php print $progressbar; ?>

<div class="container">
	<div class="webform-confirmation">
		<h1 class="title">Bedankt!</h1>
		<p><?php print $confirmation_message; ?></p>
		<h3>Help mee door deze actie te delen</h3>
		<ul class="share">
		  <li><a target="_blank" class="btn small facebook" href="<?php print $facebook; ?>">Facebook</a></li>
		  <li><a target="_blank" class="btn small twitter" href="<?php print $twitter; ?>">Twitter</a></li>
		  <li><a class="btn small email" href="<?php print $email; ?>">E-mail</a></li>
		  <li><a target="_blank" class="btn small whatsapp" href="#">WhatsApp</a></li>
		</ul>
		<h4>Jouw gegevens</h3>
		<p>De gegevens die je op het formulier hebt ingevuld zijn opgeslagen door de SP. We gebruiken ze voor deze actie, op de wijze zoals je zelf op het formulier hebt aangegeven. Als je verder nog vragen hebt over hoe we omgaan met je gegevens, kun je dat lezen op onze <a href="https://www.sp.nl/privacy">privacy pagina</a> of neem contact op met <a href="mailto:privacy@sp.nl">privacy@sp.nl</a></p>
	
	</div>

		
	</div>
</div>