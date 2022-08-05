<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
</head>

<body>
    <h1>Cours PHP</h1>

    <?php
    // Connexion à la base de données
    $adresseBdd = "localhost:8889"; // Mac: 8889, Windows: 3307
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

    <form method="POST">
        <h2>Connexion</h2>
        <input type="text" name="login" placeholder="Login">
        <input type="submit" name="connexion" value="Se connecter">
    </form>

    <?php
    if ($_POST['connexion']) {

        setcookie('login', $_POST['login'], time() + 3600);
    }
    ?>

    <?php
    if ($_COOKIE['login']) {
    ?>
        <form method="POST">
            <h2>Publier un article</h2>
            <input type="text" name="titre" placeholder="Titre de l'article">
            <textarea name="contenu"></textarea>
            <input type="submit" name="publier-article" value="Publier l'article">
        </form>
    <?php
    }
    ?>

    <?php
    // Si le formulaire de publication d'article est soumis
    if ($_POST['publier-article']) {

        // Récupération des champs
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $date = date('d/m/Y h:i');

        // Insertion d'un article
        $connexion->query("INSERT INTO articles (titre, contenu, date) VALUES ('$titre','$contenu','$date')");

        echo "L'article a bien été publié";
    }
    ?>

    <h2>Articles</h2>
    <?php
    $articles = $connexion->query("SELECT * FROM articles");

    echo "<ul>";

    foreach ($articles as $article) {

        echo "<li>
            <h3>" . $article['titre'] . "</h3>
            <p>Publié le: " . $article['date'] . "</p>
            <a href='article.php?id=" . $article['id'] . "'>Lire l'article</a>
        </li>";
    }

    echo "</ul>";
    ?>
</body>

</html>