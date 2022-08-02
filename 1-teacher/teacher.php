<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="teacher.css">
        <title>teacher's correction</title>
    </head>
    
    <body>

        <?php
            $prenom = "Isaac";
            $nom = mb_strtoupper("Tan"); 
            $age = 29;
            $metier = "Collégien";
            $image = "teacher.jpg";
            $titreExperience1 = "collégien - Collège International NLG";
            $descriptionExperience1 = "Collège Int'l NLG - Éducation Nationale";
            $titreExperience2 = "collégien - Section Américaine";
            $descriptionExperience2 = "Collège Int'l NLG - Éducation Nationale";
        ?>


        <!-- HAUT de la page -->
        <header>
            <h1>Portfolio</h1>
            <!-- Menu prinicipal -->
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>
        </header>


        <!-- CONTENU de la page -->
        <main>
            <!-- Présentation -->
            <section id="presentation">
                <div>
                    <!-- <h2>Lawrence Terpin</h2> -->
                    <h2><?php echo $prenom; ?> <?php echo $nom; ?></h2>
                    <!-- <p>Formateur Web</p> -->
                    <p><?php echo $metier; ?></p>
                </div>
                <div>
                    <!-- <img src="images/<?php echo $image; ?>"> -->
                    <img src="teacher.jpg">
                </div>
            </section>

            <!-- Expériences -->
            <section id="experiences">
                <ul>
                    <li>
                        <!-- <h2>Formation Web - Doranco</h2> -->
                        <h2><?php echo $titreExperience1; ?></h2>
                        <!-- <p>Formations dans le domaine du web pour l'École Doranco</p> -->
                        <p><?php echo $descriptionExperience2; ?></p>
                    </li>
                    <li>
                        <!-- <h2>Concepton d'applications</h2> -->
                        <h2><?php echo $titreExperience2; ?></h2>
                        <!-- <p>Conception d'applications</p> -->
                        <p><?php echo $descriptionExperience2; ?></p>
                    </li>
                </ul>
            </section>
        </main>

        <!-- BAS de la page -->
        <footer>Portfolio (FOOTER)</footer>
    </body>
</html>