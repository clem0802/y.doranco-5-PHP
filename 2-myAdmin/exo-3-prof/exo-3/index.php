<!DOCTYPE html>
<html>

<head>
    <title>Exo 3 - PHP</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header>
        <h1>Exo 3 - PHP</h1>
    </header>

    <main>

        <?php
        // Connexion à la base de données
        $adresseBdd = "localhost:8889";
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root";
        $nomBdd = "blog";

        try {
            // Connexion
            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);

            echo "Connexion réussie";
        } catch (PDOException $erreur) {

            echo "Erreur: " . $erreur->getMessage();
        }
        ?>

        <h2>Articles</h2>

        <ul>
            <?php
            $articles = $connexion->query("SELECT * FROM articles");

            foreach ($articles as $article) {

                echo "<li>
                <h3>" . $article['titre'] . "</h3>
                <p><i>Publié le " . $article['date'] . "</i></p>
                <a href=''>Lire l'article</a>
            </li>";
            }
            ?>
        </ul>

    </main>

    <footer>
        <h1>Exo 3 - PHP</h1>
    </footer>

</body>

</html>