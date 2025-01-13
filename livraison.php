<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "f2b_ecom"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

$nomDestinataire = $adresseLivraison = $codePostal = $ville = $dateLivraison = "";
$statutCommande = "En cours"; 

$to = 'client@example.com'; 
$subject = 'Confirmation de votre commande';
$message = "Merci pour votre commande ! Voici les détails de votre livraison :\n\n";
$message .= "Nom: $nomDestinataire\n";
$message .= "Adresse: $adresseLivraison\n";
$message .= "Code Postal: $codePostal\n";
$message .= "Ville: $ville\n";
$message .= "Date: $dateLivraison\n";
$headers = 'From: votre_email@example.com' . "\r\n" .
           'Reply-To: votre_email@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomDestinataire = $_POST['nom_destinataire'];
    $adresseLivraison = $_POST['adresse_livraison'];
    $codePostal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $dateLivraison = $_POST['date_livraison'];

    $sql = "INSERT INTO commandes (nom_destinataire, adresse_livraison, code_postal, ville, date_livraison, statut_commande)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nomDestinataire, $adresseLivraison, $codePostal, $ville, $dateLivraison, $statutCommande);
    
    if ($stmt->execute()) {
        echo "<p>La commande a été enregistrée avec succès !</p>";
    } else {
        echo "<p>Erreur lors de l'enregistrement de la commande : " . $stmt->error . "</p>";
    }
    if (empty($nom_destinataireErr) && empty($adresse_livraisonErr) && empty($code_postalErr) && empty($villeErr) && empty($date_livraisonErr)) {
    
        if (mail($to, $subject, $message, $headers)) {
            echo "<h3>Email de confirmation envoyé !</h3>";
        } else {
            echo "<h3>Erreur d'envoi de l'email.</h3>";
        }
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Livraison</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Formulaire de Livraison</h1>

    <form method="post" action="">
        <label for="nom_destinataire">Nom du destinataire :</label>
        <input type="text" id="nom_destinataire" name="nom_destinataire" required><br><br>

        <label for="adresse_livraison">Adresse de livraison :</label>
        <textarea id="adresse_livraison" name="adresse_livraison" required></textarea><br><br>

        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="date_livraison">Date de livraison estimée :</label>
        <input type="date" id="date_livraison" name="date_livraison" required><br><br>

        <button type="submit">Enregistrer la livraison</button>
    </form>

</body>
</html>
