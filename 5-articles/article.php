<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cours PHP / jour5 (POST-GET)</title>
        <link rel="shortcut icon" href="https://images.unsplash.com/photo-1599507593548-0187ac4043c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGhwfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <!-- Bootstrap CSS -->
        <link 
            rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
        >
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="p-3">
            <h1>Cours PHP - Jour5 (INSERT -- POST-GET)</h1>
            <!-- (myPATH) http://localhost/y.doranco-5-PHP/5-articles/article.php -->
        </header>

        <main class="container p-3">
            <?php
                // Connexion àà la BDD
                $adresseBdd = "localshot:3306"; // Mac: 8889, Windows: 3306 ou 3307
                $utilisateurBdd = "root";
                $mdpUtilisateurBdd = "root"; // Mac: "root", Windows: ""
                $nomBdd = "blog";

                try {
                    // Connexion
                    $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);
                    echo "<div class='alert alert-success'>Connexion réussis :)</div>";

                } catch (PDOException $erreur){
                    // Message d'erreur
                    echo "Erreur: " . $erreur->getMessage();
                }
            ?>


            <?php
            $id = $_GET['id'];
            $articles = $connexion->query("SELECT * FROM articles WHERE id = $id");
            echo "<ul>";

            foreach ($articles as $article) {
                echo "<li>
                <h3>" . $article['titre'] . "</h3>
                <p>" . $article['contenu'] . "</p>
                <p>Publié le: " . $article['date'] . "</p>
                </li>";
            }

            echo "</ul>";
            ?>
        </main>

        <footer class="p-3">
            <h1>Cours PHP - Jour5 (INSERT -- POST-GET)</h1>
        </footer>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>