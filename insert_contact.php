<?php

if(empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['sujet']) || empty($_POST['message'])) {
echo "errouuuur";
}

$nom=$_POST['nom'];
$email=$_POST['email'];
$tel=$_POST['phone'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];

$to='ayoubovsky@gmail.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$sujet = $sujet;
$body='Vous avez reçu un nouveau message à partir du formulaire de notification sur votre site web.'."\n\n";
$body.='Nom: '.$nom."\n";
$body.='Email: '.$email."\n";
$body.='Telephone: '.$tel."\n";
$body.='Sujet: '.$sujet."\n";
$body.='Message: '."\n".$message."\n";
$url='message envoye.php';
$url1='erreur.php';
ini_set('SMTP','smtp.numericable.fr');
ini_set($email,$to);
mail($to, $subject, $body);
if(mail($to, $subject, $body)) {
	 echo "mchaaaaaaaaaa";

} else {
	 echo "ch blan".$nom;
}

?>