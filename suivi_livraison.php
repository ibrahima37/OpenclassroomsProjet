<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "f2b_ecom"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

$trackingNumber = "";
$livraisonInfo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trackingNumber = $_POST['tracking_number'];

    $sql = "SELECT * FROM livraisons WHERE numero_suivi = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $trackingNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $livraisonInfo = $result->fetch_assoc();
    } else {
        $livraisonInfo = "Aucune information trouvée pour ce numéro de suivi.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi de Livraison</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Suivi de Livraison</h1>

    <!-- Formulaire de saisie du numéro de suivi -->
    <form method="post" action="">
        <label for="tracking_number">Numéro de suivi :</label>
        <input type="text" id="tracking_number" name="tracking_number" required>
        <button type="submit">Suivre</button>
    </form>

    <hr>

    <?php if (!empty($livraisonInfo)) : ?>
        <h2>Informations sur la livraison</h2>
        <?php
        if (is_array($livraisonInfo)) {
            echo "<p><strong>Numéro de suivi:</strong> " . $livraisonInfo['numero_suivi'] . "</p>";
            echo "<p><strong>Statut:</strong> " . $livraisonInfo['statut'] . "</p>";
            echo "<p><strong>Date de livraison estimée:</strong> " . $livraisonInfo['date_livraison_estimee'] . "</p>";
            echo "<p><strong>Dernière mise à jour:</strong> " . $livraisonInfo['derniere_mise_a_jour'] . "</p>";
        } else {
            echo "<p>" . $livraisonInfo . "</p>";
        }
        ?>
    <?php endif; ?>
</body>
</html>
