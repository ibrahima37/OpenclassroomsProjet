<?php
// Configuration des paramètres
$whatsapp_number = "221773855062"; 
$base_url = "r https://whatsapp.com/dl/ "; 

// Récupération des données du formulaire
$REF_PRODUIT = intval($_POST['REF_PRODUIT']);
$DESIGNATION = intval($_POST['DESIGNATION']);
$QUANTITE = htmlspecialchars($_POST['QUANTITE']);
$PRIX = htmlspecialchars($_POST['PRIX']);
$PHOTO = intval($_POST['PHOTO']);
$DISPONIBLE = intval($_POST['DISPONIBLE']);
$PROMOTION = intval($_POST['PROMOTION']);
$SELECTIONNE = htmlspecialchars($_POST['SELECTIONNE']);
$CODE_CAT = htmlspecialchars($_POST['CODE_CAT']);

// Préparation du message à envoyer
$message = "Nouvelle commande reçue :\n\n";
$message .= "Ref du produit : $REF_PRODUIT\n";
$message .= "Designation : $DESIGNATION\n";
$message .= "Quantité du produit : $QUANTITE\n";
$message .= "Prix du produit : $PRIX\n";

// Encodage du message pour l'URL
$encoded_message = urlencode($message);

// Création du lien WhatsApp
$whatsapp_link = "$base_url?phone=$whatsapp_number&text=$encoded_message";

// Redirection vers WhatsApp
header("Location: $whatsapp_link");
exit();
?>
