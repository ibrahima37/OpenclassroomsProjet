<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistance et Dépannage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            padding: 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .service-item {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .service-item h3 {
            margin-top: 0;
            color: #28a745;
        }
        .contact-form label {
            margin: 10px 0 5px;
        }
        .contact-form input, .contact-form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .contact-form button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .contact-form button:hover {
            background-color: #218838;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Assistance et Dépannage</h1>
        <p>Nous vous fournissons une assistance rapide et efficace pour tous vos problèmes techniques.</p>
    </header>

    <section>
        <h2>Nos Services de Dépannage</h2>
        <div class="service-item">
            <h3>Dépannage Mécanique</h3>
            <p>Nos experts sont à votre disposition pour toute réparation ou dépannage mécanique. Que ce soit pour un problème moteur, une panne de transmission ou d'autres composants de votre véhicule, nous intervenons rapidement pour vous dépanner.</p>
        </div>

        <div class="service-item">
            <h3>Dépannage Électrique</h3>
            <p>Si vous rencontrez des problèmes électriques, tels que des pannes de batterie, des dysfonctionnements d'alternateur, ou des problèmes de système de démarrage, notre équipe est prête à intervenir pour réparer votre véhicule dans les meilleurs délais.</p>
        </div>

        <div class="service-item">
            <h3>Assistance sur Route</h3>
            <p>Si vous êtes bloqué en pleine route, notre service d'assistance est disponible 24/7. Nous vous fournissons un dépannage rapide et nous vous aidons à remettre votre véhicule en état pour reprendre la route.</p>
        </div>

        <h2>Formulaire de Demande d'Assistance</h2>
        <p>Si vous avez besoin d'assistance ou si vous souhaitez signaler un problème, remplissez le formulaire ci-dessous pour nous contacter. Nous traiterons votre demande dans les plus brefs délais.</p>
        
        <form class="contact-form" action="/demande-assistance" method="POST">
            <form action="demande">
            <a href="Demande-assistance.php"></a>
            <label for="name">Nom Complet</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Adresse E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Numéro de Téléphone</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="issue">Problème rencontré</label>
            <textarea id="issue" name="issue" rows="4" placeholder="Décrivez le problème rencontré..." required></textarea>

            <button type="submit">Envoyer la Demande</button>
            </form>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Assistance Dépannage - Tous droits réservés</p>
        <strong><a href="ServiceApresVente.php" style="color: blue;">Retour ServiceApresVente</a></strong>
    </footer>
</body>
</html>
