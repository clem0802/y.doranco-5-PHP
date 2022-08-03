<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours PHP myAdmin</title>
    </head>

    <body>
        <h1>Cours PHP</h1>

        <?php
        // Connexion à la base de données (paramètres de connexion)
        // (MY path) http://localhost/y.doranco-5-PHP/2-myAdmin/myAdmin.php
        $adresseBdd = "localhost:3306"; // Mac: 8889, Windows:3306 (moi)
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root"; // Mac: "root", Windows: ""
        $nomBdd = "blog";
        
        

        // pour tester si la connexion est bonne, exécuter la connexion
        // "$connexion" est une variable de connexion
        try {
                       // méthode de connexion, PDO (PHP Data Objects)
            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd); 

            echo "Connexion réussie :)";
        }
        catch(PDOException $erreur){
            echo "Erreur: " . $erreur->getMessage();
        }
        ?>
    </body>
</html>