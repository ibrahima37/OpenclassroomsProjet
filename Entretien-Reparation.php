<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entretien et Réparations</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Services d'Entretien et de Réparations</h1>
        <p>Nous vous offrons des services complets pour entretenir et réparer votre véhicule.</p>
    </header>

    <section>
        <h2>Nos Services</h2>
        <div class="services">
            <div class="service-item">
                <h3>Entretien Moteur</h3>
                <p>Assurez la longévité de votre moteur grâce à notre service d'entretien régulier, y compris les vidanges, les changements de filtres, et les contrôles de performance.</p>
            </div>
            <div class="service-item">
                <h3>Réparations des Freins</h3>
                <p>Nous intervenons sur les systèmes de freinage pour garantir votre sécurité. Remplacement de plaquettes, disques et contrôle complet du système.</p>
            </div>
            <div class="service-item">
                <h3>Réparations Électriques</h3>
                <p>Diagnostic et réparation des problèmes électriques, tels que les batteries, les alternateurs et les systèmes électroniques.</p>
            </div>
            <div class="service-item">
                <h3>Réparation de la Suspension</h3>
                <p>Assurez-vous d'une conduite confortable et sûre grâce à notre service de réparation de la suspension, incluant les amortisseurs et les ressorts.</p>
            </div>
        </div>

        <h2>Demander un Devis</h2>
        <p>Remplissez le formulaire ci-dessous pour demander un devis pour les services d'entretien ou de réparation de votre véhicule.</p>
        <!-- <form class="contact-form" action="Demande-devis.html" method="POST"> -->
            <a href="Demande-devis.php"></a>
            <label for="name">Nom Complet</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Adresse E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="service">Service Souhaité</label>
            <select id="service" name="service">
                <option value="entretien-moteur">Entretien Moteur</option>
                <option value="reparation-freins">Réparation des Freins</option>
                <option value="reparation-electrique">Réparation Électrique</option>
                <option value="reparation-suspension">Réparation de la Suspension</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Détaillez votre demande ici..."></textarea>

            <button type="submit">Envoyer la Demande</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Entretien et Réparations - Tous droits réservés</p>
        <strong><a href="ServiceApresVente.php" style="color: blue;">Retour ServiceApresVente</a></strong>
    </footer>
</body>
</html>
