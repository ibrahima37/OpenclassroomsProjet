<?php
$pdo = new PDO('mysql:host=localhost;dbname=f2b_ecom', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nomDestinataire = $adresseLivraison = $codePostal = $ville = $dateLivraison = "";
$statutCommande = "En cours";
$nomDestinataireErr = $adresseLivraisonErr = $codePostalErr = $villeErr = $dateLivraison = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["nom"])) {
        $nomDestinataireErr = "Le nom est requis";
    } else {
        $nomDestinataire = htmlspecialchars($_POST["nom"]);
    }

    if (empty($_POST["adresse"])) {
        $adresseLivraisonErr = "L'adresse est requise";
    } else {
        $adresseLivraison = htmlspecialchars($_POST["adresse"]);
    }

    if (empty($_POST["code_postal"])) {
        $codePostalErr = "Le code postal est requis";
    } else {
        $codePostal = htmlspecialchars($_POST["code_postal"]);
    }

    if (empty($_POST["ville"])) {
        $villeErr = "La ville est requise";
    } else {
        $ville = htmlspecialchars($_POST["ville"]);
    }
    if (empty($_POST["dateLivraison"])) {
        $dateLivraisonErr = "La date est requise";
    } else {
        $dateLivraison = htmlspecialchars($_POST["dateLivraison"]);
    }

    if (empty($nomDestinataireErr) && empty($adresseLivraisonErr) && empty($codePostalErr) && empty($villeErr) && empty($dateLivraisonErr)) {
        echo "<h3>Votre commande a bien été reçue !</h3>";
        echo "<p>Nom: $nomDestinataire</p>";
        echo "<p>Adresse: $adresseLivraison</p>";
        echo "<p>Code Postal: $codePostal</p>";
        echo "<p>Ville: $ville</p>";
        echo "<p>Date: $dateLivraison</p>";
    }
    $sql = "INSERT INTO commandes (nom_destinataire, adresse_livraison, code_postal, ville, date_livraison, statut_commande) 
    VALUES (:nom_destinataire, :adresse_livraison, :code_postal, :ville, :date_livraison, :statut_commande)";
$stmt = $pdo->prepare($sql);

// Lier les paramètres pour éviter les injections SQL
$stmt->bindParam(':nom', $nomDestinataire);
$stmt->bindParam(':adresse', $adresseLivraison);
$stmt->bindParam(':code_postal', $codePostal);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':date', $dateLivraison);

// Exécuter la requête
$stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Livraison</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Fonction pour valider le formulaire avant soumission
        function validerFormulaire() {
            // Récupérer les valeurs des champs
            var nom = document.getElementById('nom_destinataire').value;
            var adresse = document.getElementById('adresse_livraison').value;
            var codePostal = document.getElementById('code_postal').value;
            var ville = document.getElementById('ville').value;
            var date = document.getElementById('date_livraison').value;
            var errorMessage = '';

            // Vérification que chaque champ est rempli
            if (nom == '') {
                errorMessage += 'Le champ "Nom" est requis.\n';
            }
            if (adresse == '') {
                errorMessage += 'Le champ "Adresse" est requis.\n';
            }
            if (codePostal == '') {
                errorMessage += 'Le champ "Code Postal" est requis.\n';
            } else if (!/^\d{5}$/.test(codePostal)) {
                // Vérification du format du code postal (ici, 5 chiffres)
                errorMessage += 'Le "Code Postal" doit contenir 5 chiffres.\n';
            }
            if (ville == '') {
                errorMessage += 'Le champ "Ville" est requis.\n';
            }
            if (date == '') {
                errorMessage += 'Le champ "date" est requis.\n';
            }

            // Si des erreurs sont trouvées, afficher les messages et empêcher l'envoi du formulaire
            if (errorMessage != '') {
                alert('Erreur:\n' + errorMessage);
                return false; // Empêche l'envoi du formulaire
            }
            return true; // Le formulaire est valide, on peut l'envoyer
        }
    </script>
</head>
<body>
    <h2>Formulaire de Livraison</h2>

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

    <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>">
        <span class="error"><?php echo $nomErr; ?></span><br><br>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $adresse; ?>">
        <span class="error"><?php echo $adresseErr; ?></span><br><br>

        <label for="code_postal">Code Postal:</label>
        <input type="text" id="code_postal" name="code_postal" value="<?php echo $code_postal; ?>">
        <span class="error"><?php echo $code_postalErr; ?></span><br><br>

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" value="<?php echo $ville; ?>">
        <span class="error"><?php echo $villeErr; ?></span><br><br>

        <input type="submit" value="Envoyer">
    </form> -->

</body>
</html>
