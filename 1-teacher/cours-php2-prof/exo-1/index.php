<!DOCTYPE html>
<html>

<head>
    <title>Exo 1 - PHP</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php
    $prenom = "Lawrence";
    $nom = "Terpin";
    $metier = "Formateur web";
    $image = "profil.png";
    $titreExperience1 = "Formations web - Doranco";
    $descriptionExperience1 = "Formations dans le domaine du web pour l'Ecole Doranco";
    $titreExperience2 = "Conception d'applications";
    $descriptionExperience2 = "Conception d'applications Android, IOS";
    ?>

    <!-- Haut de page-->
    <header>
        <h1>Portfolio</h1>
        <!-- Menu principal -->
        <nav>
            <ul>
                <li>
                    <a>Accueil</a>
                </li>
                <li>
                    <a>Portfolios</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Contenu de la page -->
    <main>
        <!-- Présentation -->
        <section id="presentation">
            <div>
                <h2><?php echo $prenom; ?> <?php echo $nom; ?></h2>
                <p><?php echo $metier; ?></p>
            </div>
            <div>
                <img src="images/<?php echo $image; ?>">
            </div>
        </section>
        <!-- Expériences -->
        <section id="experiences">
            <ul>
                <li>
                    <h2><?php echo $titreExperience1; ?></h2>
                    <p><?php echo $descriptionExperience1; ?></p>
                </li>
                <li>
                    <h2><?php echo $titreExperience2; ?></h2>
                    <p><?php echo $descriptionExperience2; ?></p>
                </li>
            </ul>
        </section>
    </main>
    <!-- Bas de page -->
    <footer>
        <h1>Portfolio</h1>
    </footer>
</body>

</html>