<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
</head>

<body>
    <h1>Cours PHP</h1>
    <!-- (myPATH) http://localhost/y.doranco-5-PHP/2-exo-articles/index.php -->

    <?php
    // Connexion à la base de données
    $adresseBdd = "localhost:3306"; // Mac: 8889, Windows: 3307
    $utilisateurBdd = "root";
    $mdpUtilisateurBdd = "root"; // Mac: "root", Windows : ""
    $nomBdd = "blog";

    try {
        // Connexion
        $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd);

        echo "Connexion réussie :)";
    } catch (PDOException $erreur) {

        // Message d'erreur
        echo "Erreur: " . $erreur->getMessage();
    }
    ?>



    <!-- ************************************************* -->
    <!-- JOURS 5 (INSERTION) -->
    <form method="POST">
        <h2>Publier un article</h2>
        <input type="text" name="titre" placeholder="Titre de l'article">
        <textarea name="contenu"></textarea>
        <input type="submit" name="publier-article" value="Publier">
    </form>

    <?php
    // si le formulaire de publication d'article est soumi
    if ($_POST['publier-article']){

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $date = date('d/m/Y h:i');

        $connexion->query("INSERT INTO articles (titre, contenu, date) VALUES ('$titre', '$contenu','$date')");

        echo "L'article a bien été publié";
    }
    ?>



    <!-- ************************************************* -->
    <h2>Articles</h2>
    <?php
    $articles = $connexion->query("SELECT * FROM articles");

    echo "<ul>";

    foreach ($articles as $article) {

        echo "<li>
            <h3>" . $article['titre'] . "</h3>
            <p>Publié le: " . $article['date'] . "</p>
        </li>";
    }

    echo "</ul>";
    ?>
</body>

</html>