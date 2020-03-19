<?php 
/*alussa luetaan  lomakkeen kentistä tiedot */
mb_internal_encoding('UTF-8');
$etunimi=$_POST['nimet'];
$email=$_POST['email'];
$palaute=$_POST['palaute'];



/*yhdistetään tiedot txt-muuttujaan, joka lähetään viestinä */
$txt='<b>Nimet:</b>'.$etunimi.'<br /><b>Sähköposti:</b>'.$email.'<br /><b>palaute:</b>'.$palaute;

/*to -kenelle lähetetään. Huom! OLKAA VAROVAISIA*/
$to = "antti.v.peltola@tuni.fi";
$subject = "Palautteen anto";
$body = $txt;
$headers = "From: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-Type: text/html; charset="utf-8" \r\n';
$url="mobile/index.html";
mb_send_mail($to, $subject, $body, $headers);

/*Ohjataan lopuksi selain kiitos-sivulle*/
header("Location: formsent.html");
 /* muuta siihen tiedostoon, mihin haluat, että selaimen siirtyvän */
exit();
?> 