<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez RestoQR</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #4A90E2;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        .content {
            padding: 40px 20px;
        }
        .info-box {
            background-color: #f9f9f9;
            border-left: 4px solid #4A90E2;
            padding: 15px;
            margin-bottom: 20px;
        }
        .info-box h2 {
            margin-top: 0;
            color: #4A90E2;
        }
        .info-list {
            list-style-type: none;
            padding: 0;
        }
        .info-list li {
            margin-bottom: 10px;
        }
        .benefits {
            background-color: #e9f2fe;
            padding: 20px;
            border-radius: 5px;
        }
        .benefits h3 {
            color: #4A90E2;
            margin-top: 0;
        }
        .benefits ul {
            padding-left: 20px;
        }
        .cta {
            text-align: center;
            margin-top: 30px;
        }
        .cta-button {
            display: inline-block;
            background-color: #4A90E2;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #3a7bc8;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenue chez RestoQR, {{ $user->name }} !</h1>
        </div>
        <div class="content">
            <p>Nous sommes ravis de vous accueillir dans la communauté RestoQR. Votre inscription marque le début d'une nouvelle ère pour votre restaurant, où la digitalisation rencontre l'excellence du service.</p>

            <div class="info-box">
                <h2>Vos informations</h2>
                <ul class="info-list">
                    <li><strong>Nom :</strong> {{ $user->name }}</li>
                    <li><strong>Email :</strong> {{ $user->email }}</li>
                    <li><strong>Établissement :</strong> {{ $user->structure->name }}</li>
                    <li><strong>Téléphone :</strong> {{ $user->structure->tel }}</li>
                    <li><strong>Adresse :</strong> {{ $user->structure->address }}</li>
                </ul>
            </div>

            <div class="benefits">
                <h3>Avec RestoQR, vous allez :</h3>
                <ul>
                    <li>Simplifier la gestion de vos menus</li>
                    <li>Améliorer l'expérience de vos clients</li>
                    <li>Optimiser vos opérations quotidiennes</li>
                    <li>Accéder à des analyses détaillées pour prendre des décisions éclairées</li>
                </ul>
            </div>

            <p>Notre équipe est là pour vous accompagner à chaque étape. N'hésitez pas à nous contacter si vous avez des questions ou besoin d'assistance.</p>

            <div class="cta">
                <p><strong>Prochaine étape :</strong></p>
                <a href="#" class="cta-button">Votre compte est en cours de validation</a>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 RestoQR. Tous droits réservés.</p>
            <p>Pour toute assistance, contactez-nous à contact@restoqr.site</p>
        </div>
    </div>
</body>
</html>
