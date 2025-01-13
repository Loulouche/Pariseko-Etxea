<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/pro-style.css">
</head>
<body>

<!-- Header -->
<header class="header">
    <!-- Logo -->
    <div class="logo">
        <img src="../asset/logo.png" alt="PARISEKO ETXEA" class="logo-img">
    </div>

    <!-- Navigation -->
    <nav class="nav">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="biens.php">Biens</a></li>
            <li><a href="honoraire.php">Honoraire</a></li>
            <li><a href="about.php">À propos</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<!-- BODY -->
<main>
    <section class="box1">
        <div class="content">
            <h1>PROJET IMMOBILIER</h1>
            <p>Vous avez un projet d’achat, de vente ou de location ? Nous serions ravis de vous accompagner pour ce projet ! 
               Afin que nous puissions prendre contact avec vous dans les plus brefs délais, le formulaire ci-dessous est à votre disposition.
            </p>                
        </div>
    <form action="process_form.php" method="POST">
        <div>
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Votre e-mail</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="subject">Objet de votre demande</label>
            <select id="subject" name="subject">
                <option value="location">Je recherche un bien à louer</option>
                <option value="purchase">Je recherche un bien à acheter</option>
                <option value="sale">J'ai un bien à vendre</option>
                <option value="other">Autre demande</option>
            </select>
        </div>
        <div>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit">Envoyer</button>
</form>
    </section>
</main>
</html>