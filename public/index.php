<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/style.css">
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
    <section class="background-container">
        <section class="box1">
            <div class="content">
                <h1>Achetez, Louez et Vendez avec sérénité</h1>
                <p>Notre objectif :</p>
                <ul>
                    <li>– <strong>vous assurer</strong> la perception des loyers et augmenter le rendement locatif,</li>
                    <li>– <strong>vous permettre d’acquérir et louer</strong> le bien qui, correspond à vos besoins,</li>
                    <li>– <strong>vous garantir</strong> de bonnes conditions de ventes,</li>
                    <li>– <strong>vous libérer</strong> des contraintes administratives, juridiques et fiscales.</li>
                </ul>
                <a href="projet.php" class="btn">Confiez-nous votre projet immobilier</a>
            </div>
        </section>
    </section>
</main>

<!-- Footer -->
<?php include('includes/footer.php'); ?>

</body>
</html>
