<?php
if(isset($_POST['mailform'])) {
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
	   $header="MIME-Version: 1.0\r\n";
	   $header.='From:"nom_d\'expediteur"<yann.decorce@gmail.com>'."\n";
	   $header.='Content-Type:text/html; charset="uft-8"'."\n";
	   $header.='Content-Transfer-Encoding: 8bit';
	   $message='
	   <html>
		  <body>
			 <div align="center">
			
				<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
				<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
				<u>Objet :</u>'.$_POST['objet'].'<br />
				<br />
				'.nl2br($_POST['message']).'
		   
			 </div>
		  </body>
	   </html>
	   ';
	   mail("yann.decorce@gmail.com", $_POST['objet'], $message, $header);
	   $msg="Votre message a bien été envoyé !";

	} else {
	   $msg="Tous les champs doivent être complétés !";
	}
 }
 if(isset($msg)) {
	echo $msg;
 	$delai=1;
	$url='http://yannd.promo-44.codeur.online/';
	header("Refresh: $delai;url=$url");}
?>