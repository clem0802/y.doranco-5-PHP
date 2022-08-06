<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header class="p-3">
        <h1>Cours PHP</h1>
    </header>

    <main class="container p-3">
        <?php
        // Connexion à la base de données
        $adresseBdd = "localhost:3306"; // Mac: 8889, Windows: 3307
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root"; // Mac: "root", Windows : ""
        $nomBdd = "blog";

        try {
            // Connexion
            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);

            echo "<div class='alert alert-success'>Connexion réussie :)</div>";
        } catch (PDOException $erreur) {

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
        <h1>Cours PHP</h1>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>