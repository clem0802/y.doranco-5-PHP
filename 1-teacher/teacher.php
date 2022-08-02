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
            $prenom = mb_strtoupper("Lawrence"); 
            $nom = "Terpin";
            $age = 29;
            $metier = "Formateur Web";
            $image = "teacher.jpg";
            $titreExperience1 = "Formations web - Doranco";
            $descriptionExperience1 = "Formations dans le domaine du web dev";
            $titreExperience2 = "Conception d'applications";
            $descriptionExperience2 = "FConception d'applications Android, IOS";
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
                        <p><?php echo $descrioptionExperience2 ?></p>
                    </li>
                    <li>
                        <h2>Concepton d'applications</h2>
                        <p>Conception d'applications</p>
                    </li>
                </ul>
            </section>
        </main>

        <!-- BAS de la page -->
        <footer>Portfolio</footer>
    </body>
</html>