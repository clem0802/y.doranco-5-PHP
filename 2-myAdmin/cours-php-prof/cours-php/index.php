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
</body>

</html>