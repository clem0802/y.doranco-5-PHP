<!DOCTYPE html>
<html>

    <head>
        <title>Cours PHP / jour5 (POST-GET)</title>
        <link 
            rel="shortcut icon" 
            href="https://images.unsplash.com/photo-1599507593354-2b6d036eab4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGhwfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" 
            type="image/png"
        >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <!-- (myPATH) http://localhost/y.doranco-5-PHP/5-articles/index.php -->
        </header>

        <main class="container p-3">
            <?php
            // Connexion à la BDD
            // ************************************************* 
            $adresseBdd = "localhost:3306"; // Mac: 8889, Windows: 3307
            $utilisateurBdd = "root";
            $mdpUtilisateurBdd = "root"; // Mac: "root", Windows : ""
            $nomBdd = "blog";

            try {
                // Connexion
                $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);

                echo "<div class='alert alert-success'>Connexion réussis :)</div>";
            } catch (PDOException $erreur) {

                // Message d'erreur
                echo "Erreur: " . $erreur->getMessage();
            }
            ?>


            <!-- JOURS 5 (LOGIN) -->
            <!-- ************************************************* -->
            <?php
            if (!$_COOKIE['login']) {
            ?>

                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <h2>Connexion</h2>
                            <input type="text" name="login" placeholder="Login" class="mb-3 form-control">
                            <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <br>

            <?php
            }
            ?>


            <?php
            if ($_POST['connexion']){
                setcookie('login', $_POST['login'], time() + 3600);
            }
            ?>

            <?php
            if ($_COOKIE['login']){
            ?>
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <h2>Publier un article</h2>
                            <input type="text" name="title" placeholder="Titre de l'article" class="mb-3 form-control">
                            <textarea name="contenu" class="mb-3 form-control"></textarea>
                            <input type="submit" name="publier-article" value="Publier l'article" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <br>
            <?php
            }
            ?>

        
            <!-- JOURS 5 (INSERTION !!) -->
            <!-- ************************************************* -->
            <!-- <form method="POST">
                <h2>Publier un article</h2>
                <input type="text" name="titre" placeholder="Titre de l'article">
                <textarea name="contenu"></textarea>
                <input type="submit" name="publier-article" value="Publier">
            </form> -->

            <?php
            // si le formulaire de publication d'article est soumis
            if ($_POST['publier-article']){

                // RÉCUPÉRATION des champs
                $titre = $_POST['titre'];
                $contenu = $_POST['contenu'];
                $date = date('d/m/Y h:i');

                // INSERTION d'un article
                $connexion->query("INSERT INTO articles (titre, contenu, date) VALUES ('$titre','$contenu','$date')");

                echo "L'article a bien été publié";
            }
            ?>



            <!-- ************************************************* -->
            <h2>Articles</h2>
            <?php
            $articles = $connexion->query("SELECT * FROM articles");
            // $articles = $connexion->query("SELECT * FROM articles ORDER BY id DESC LIMIT 0,2");

            echo "<ul class='row'>";

            foreach ($articles as $article) {

                echo "<li class='col-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h3>" . $article['titre'] . "</h3>
                            <p>Publié le: " . $article['date'] . "</p>
                            <a href='article.php?id=" . $article['id'] . "'>Lire l'article</a>
                        </div>
                    </div>
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