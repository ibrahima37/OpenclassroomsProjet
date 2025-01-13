<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Client - Vente de Voitures</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>Service Client - Vente de Voitures</h1>
        <p>Nous sommes là pour vous aider !</p>
    </header>

    <div class="container">
        <section class="service-section">
            <h2>Comment pouvons-nous vous aider ?</h2>
            <p>Notre équipe de service client est prête à répondre à vos questions et préoccupations. Que vous ayez une
                question sur un produit, une demande de support technique ou une information sur une commande, nous
                sommes là pour vous accompagner.</p>

            <div class="contact-info">
                <div>
                    <h3>Par téléphone</h3>
                    <p>Appelez notre service client au <strong>(+221) 77 385 50 62</strong> du lundi au vendredi, de
                        9h à 18h et les weekend-ends de 10h à 17h.</p>
                </div>
                <div>
                    <h3>Par Email</h3>
                    <p>Envoyez-nous un email à <strong>support@venteduvoiture.com</strong>. Nous vous répondrons dans
                        les plus brefs délais.</p>
                </div>
                <div>
                    <h3>Chat en ligne</h3>
                    <p>Discutez directement avec notre équipe via le chat en ligne disponible en bas à droite de votre
                        écran.</p>
                </div>
            </div>

            <div class="contact-form">
                <h3>Envoyez-nous votre message</h3>
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" id="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="input-group">
                        <input type="email" id="email" placeholder="Votre email" required>
                    </div>
                    <div class="input-group">
                        <textarea id="message" rows="5" placeholder="Votre message" required></textarea>
                    </div>
            
                    <a id="whatsapp-link" href="#" target="_blank">
                        <button>Envoyer Message</button>
                    </a>
                </form>
            </div>
        </section>
    </div>
    <script>
        
        document.querySelector('button').addEventListener('click', function(event) {
            event.preventDefault();

            var nom = document.getElementById('nom').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            var messageWhatsApp = `Bonjour, j'ai une question. \nNom: ${nom}\nEmail: ${email}\nMessage: ${message}`;

            var numeroWhatsApp = "221773855062"; 
            var urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(messageWhatsApp)}`;
            document.getElementById('whatsapp-link').setAttribute('href', urlWhatsApp);

            window.open(urlWhatsApp, '_blank');
        });
    </script>

    <footer>
        <p>&copy; 2025 Vente de Voitures | Tous droits réservés</p>
        <strong><a href="index.php" style="color: blue;">Retour Index</a></strong>
    </footer>
</body>

</html>