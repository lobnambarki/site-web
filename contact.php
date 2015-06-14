<?php
if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) &&!empty($_POST['message']))
{
	extract($_POST);
	if(!empty($nom) && !empty($email) && !empty($message)) {
	$destinataire ="mbarki_lobna@yahoo.fr";
	$sujet="Formulaire de contact";
	$msg="Une nouvelle question est arrivée \n
	Nom : $nom \n
	Courriel : $email \n
	Message : $message " ;
	$entete="From: $nom \n Reply-To: $email";
		mail($destinataire,$sujet,$msg,$entete);
	} 
else { echo "Formulaires non soumis ou des champs sont vides";
}
}
?>