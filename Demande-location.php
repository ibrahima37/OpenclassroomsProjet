<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Location</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background-color: #25D366; /* Couleur de WhatsApp */
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #128C7E;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Demander une Location</h1>
        <p>Veuillez remplir les informations ci-dessous pour envoyer votre demande de location via WhatsApp.</p>

        <!-- Formulaire pour la demande de location -->
        <div class="input-group">
            <input type="text" id="nom" placeholder="Votre nom" required>
        </div>
        <div class="input-group">
            <input type="email" id="email" placeholder="Votre email" required>
        </div>
        <div class="input-group">
            <input type="text" id="type-location" placeholder="Type de location (ex: voiture, appartement)" required>
        </div>
        <div class="input-group">
            <input type="date" id="date-debut" placeholder="Date de début" required>
        </div>
        <div class="input-group">
            <input type="date" id="date-fin" placeholder="Date de fin" required>
        </div>

        <!-- Lien WhatsApp -->
        <a id="whatsapp-link" href="#" target="_blank">
            <button>Envoyer Demande de Location</button>
        </a>
    </div>

    <script>
        // Fonction pour générer le lien WhatsApp avec les informations du formulaire
        document.querySelector('button').addEventListener('click', function(event) {
            event.preventDefault();

            // Récupérer les valeurs des champs
            var nom = document.getElementById('nom').value;
            var email = document.getElementById('email').value;
            var typeLocation = document.getElementById('type-location').value;
            var dateDebut = document.getElementById('date-debut').value;
            var dateFin = document.getElementById('date-fin').value;

            // Créer le message à envoyer via WhatsApp
            var message = `Bonjour, je souhaiterais louer un(e) ${typeLocation}. \nNom: ${nom}\nEmail: ${email}\nDate de début: ${dateDebut}\nDate de fin: ${dateFin}`;

            // Remplacer le lien WhatsApp avec le message généré
            var numeroWhatsApp = "221773855062"; // Remplacez par votre numéro WhatsApp
            var urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(message)}`;
            document.getElementById('whatsapp-link').setAttribute('href', urlWhatsApp);

            // Ouvrir le lien WhatsApp
            window.open(urlWhatsApp, '_blank');
        });
    </script>

</body>
</html>
