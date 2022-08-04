<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lawrence's lesson-3, phpMyAdmin</title>
        <meta name="description" content="Lawrence's lesson-3, phpMyAdmin">
        <link rel="stylesheet" href="myAdmin.css" type="text/css">
    </head>

    <body>
        <header>
            <h1>Exo3 PHP</h1>
        </header>

        <main>
        <?php
        // Connexion à la base de données (paramètres de connexion)
        // (MY path) http://localhost/y.doranco-5-PHP/2-myAdmin/myAdmin.php
        $adresseBdd = "localhost:3306"; // Mac: 8889, Windows:3306 (moi)
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root"; // Mac: "root", Windows: ""
        $nomBdd = "blog";
        
        // pour tester si la connexion est bonne, exécuter la connexion
        // "$connexion" est une variable de connexion
        // méthode de connexion, PDO (PHP Data Objects)
        try {
            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd); 
            echo "Connexion réussie :)";
        }
        catch(PDOException $erreur){
            echo "Erreur: " . $erreur->getMessage();
        }
        ?>

        <!-- ******************************************************** -->
        <!-- GET les deux articles qu'on a créés -->
        <!-- exécuter une requête SQL, pour les afficher sur le browser -->
        <!-- faire un boucle pour parcourir chaque article -->
        <h2>Articles</h2>
        <?php
            // $articles = $connexion->query("SELECT * FROM articles WHERE id = 1 OR id = 2");
            $articles = $connexion->query("SELECT * FROM articles");

            echo "<ul>";
            foreach($articles as $article) {
                echo "<li>
                <h3>" . $article['titre'] . "</h3>
                <p><i>Publié le: " . $article['date'] . "</i></p>
                <a href=''>Lire l'article</a>
                      </li>";
            }
            echo "</ul>";
        ?>
        </main>


        <footer>
            <h3>FOOTER</h3>
        </footer>
        <!-- JOUR 4 -->
        <!-- ******************************************************** -->

    </body>
</html>