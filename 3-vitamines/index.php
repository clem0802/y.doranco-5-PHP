<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EXO (Lawrence) - Fruggies (clémence)</title>
    </head>

    <body>
        <h1>EXO (Lawrence) <br> Fruggies (clémence)</h1>

        <?php
        // Connexion à la base de données (paramètres de connexion)
        // (MY path) http://localhost/y.doranco-5-PHP/3-fruggie/index.php
        $adresseBdd = "localhost:3306"; // Mac: 8889, Windows:3306 (moi)
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root"; // Mac: "root", Windows: ""
        $nomBdd = "vitamines";
        
        
        // pour tester si la connexion est bonne, exécuter la connexion
        // "$connexion" est une variable de connexion
        try {
                       // méthode de connexion, PDO (PHP Data Objects)
            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd); 

            echo "Bravo! Connexion aux 'fruggies' bien réussie :)";
        }
        catch(PDOException $erreur){
            echo "Erreur: " . $erreur->getMessage();
        }
        ?>


        <hr><br>

        <!-- FORM -->
        <form method="POST">
            <h2>Fruggie Subscription Form</h2>
            <p>Which one would you prefer? fruit or veggie?</p>
            <p>Please subscribe first and we will see.</p>
            <input type="text" name="prenom" placeholder="Votre prénom">
            <input type="text" name="email" placeholder="Votre email">
            <input type="password" name="mdp" placeholder="Votre mot de passe">
            <input type="password" name="mdp-confirmation" placeholder="Confirmez le mot de passe">
            <input type="submit" name="inscription" value="S'inscrire">
        </form>

        <!-- on va vérifier si le formulaire est soumis -->
        <?php 
        if ($_POST["inscription"]){
            // récupération des champs
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $mdp = $_POST["mdp"];
            $mdpConfirmation = $_POST["mdp-confirmation"];

            echo "L'utilisateur a bien été enregistré:<br>";
            echo $prenom . "<br>" . $email . "<br>" . $mdp . "<br>" . $mdpConfirmation;

            // forEach($maVar as $var){
            //     echo "," . $var;
            // }



            // CRÉATION des COOKIES utilisateurs
            // 3600 = (1 hour)
            setcookie("prenom", $prenom, time() + 3600);

            // ---------------------------------------
            setcookie("email", $email, time() + 3600);
            setcookie("mdp", $mdp, time() + 3600);
        }
        ?>



        <!-- ******************************************************** -->
        <!-- pour récupérer les deux articles qu'on a créés -->
        <!-- exécuter une requête SQL, pour les afficher sur le browser -->
        <!-- faire un boucle pour parcourir chaque article -->
        <?php
            // $articles = $connexion->query("SELECT * FROM articles WHERE id = 1 OR id = 2");
            $fruggies = $connexion->query("SELECT * FROM fruggies");

            echo "<ul>";
            foreach($fruggies as $fruggie) {
                echo "<li>
                <h3>" . $fruggie['name'] . "</h3>
                <p>Fruggie category: " . $fruggie['category'] . "</p>
                <p>Fruggie detail: " . $fruggie['description'] . "</p>
                     </li>";
            }
            echo "</ul>";
        ?>
       
    </body>
</html>