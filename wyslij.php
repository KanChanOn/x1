<?php
$imie = $_POST['imie'];
$email = $_POST['email'];
$wiadomosc = $_POST['wiadomosc'];
$do = "IKwietowicz@uczen.eduwarszawa.pl";
$temat = "Wiadomość ze strony x1";
$tresc = "Imię: $imie\n";
$tresc .= "E-mail: $email\n\n";
$tresc .= $wiadomosc;
$naglowki= "From: $email";
if(mail($do, $temat, $temat, $tresc, $naglowki)){
	echo "Wiadomość została wysłana.";
} else {
	echo "Wystąpił błąd podczas wysyłania.";
}
?>