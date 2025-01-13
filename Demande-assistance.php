<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Assistance</title>
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
            background-color: #25D366; 
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
        <h1>Demander de l'Assistance</h1>
        <p>Si vous avez besoin d'assistance, remplissez les informations ci-dessous et nous vous répondrons via WhatsApp.</p>

        <div class="input-group">
            <input type="text" id="nom" placeholder="Votre nom" required>
        </div>
        <div class="input-group">
            <input type="email" id="email" placeholder="Votre email" required>
        </div>
        <div class="input-group">
            <input type="text" id="probleme" placeholder="Décrivez votre problème ou demande" required>
        </div>

        <a id="whatsapp-link" href="#" target="_blank">
            <button>Envoyer Demande d'Assistance</button>
        </a>
    </div>

    <script>
        document.querySelector('button').addEventListener('click', function(event) {
            event.preventDefault();

            var nom = document.getElementById('nom').value;
            var email = document.getElementById('email').value;
            var probleme = document.getElementById('probleme').value;

            var message = `Bonjour, j'ai besoin d'assistance. \nNom: ${nom}\nEmail: ${email}\nProblème: ${probleme}`;

            var numeroWhatsApp = "221773855062"; 
            var urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(message)}`;
            document.getElementById('whatsapp-link').setAttribute('href', urlWhatsApp);

            window.open(urlWhatsApp, '_blank');
        });
    </script>

</body>
</html>
