<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
            crossorigin="anonymous"
        /> 
        <!-- font awesome -->
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" 
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="style.css">
        <title>Lawrence's lesson-3-exo 2&3 - Fruggies (clémence)</title>
        <meta name="description" content="Lawrence's lesson-3-exo 2&3 - Fruggies (clémence)">
    </head>

    <body class="container-fluid d-flex flex-column justify-content-center align-items-center text-center">

        <header>
            <h1>EXO 3 <br>(Lawrence's PHP lesson)
        </header>
    

        <div class="container-fluid">
        <main class="w-75 container-fluid d-flex flex-column justify-content-center align-items-center">

            <?php
                $paris = new DateTime('now', new DateTimeZone('Europe/Paris'));
                echo "Current time of Paris is: ", $paris->format("d-m-Y H:i:s"),'<br>';
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
            ?>



            <h2>Welcome to my List of Fruggies</h2>
            <?php
            // Connexion à la base de données (paramètres de connexion)
            // (MY path) http://localhost/y.doranco-5-PHP/3-vitamines/index.php
            // (pr Gwenn) https://www.php.net/manual/fr/function.round.php
            $adresseBdd = "localhost:3306"; // Mac: 8889, Windows:3306 (moi)
            $utilisateurBdd = "root";
            $mdpUtilisateurBdd = "root"; // Mac: "root", Windows: ""
            $nomBdd = "vitamines";
            
            
            // pour tester si la connexion est bonne, exécuter la connexion
            // "$connexion" est une variable de connexion
            try {
                        // méthode de connexion, PDO (PHP Data Objects)
                $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd, $utilisateurBdd, $mdpUtilisateurBdd); 
                echo "Congrats!", '<br>';
                echo "Seeing this message means you are connected to my Fruggies Database :)";
            }
            catch(PDOException $erreur){
                echo "Erreur: " . $erreur->getMessage();
            }
            ?>
            

            <!-- FORM -->
            <form action="https://public.herotofu.com/v1/d5377820-0cf0-11ed-9bdb-53c785fa3343" method="POST" class="container-fluid d-flex flex-column">
                <h2>Fruggies Subscription Form</h2>
                <p>Which one would you prefer? fruit or veggie?</p>
                <p>Please subscribe so we can contact you for further information.</p><br>
                <input type="text" name="prenom" placeholder="Your first name">
                <input type="text" name="email" placeholder="Your email">
                <input type="password" name="mdp" placeholder="Set your password">
                <input type="password" name="mdp-confirmation" placeholder="Confirme your password">
                <textarea name="message" id="message" cols="28" rows="5" placeholder="Your Message"></textarea>
                <input type="submit" name="inscription" value="Subscribe" class="submit">
            </form>
            <br>
            <br>

            <!-- on va vérifier si le formulaire est soumis -->
            <?php 
            if ($_POST["inscription"]){
                // récupération des champs
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $mdp = $_POST["mdp"];
                $message = $_POST["message"];
                $mdpConfirmation = $_POST["mdp-confirmation"];

                echo "L'utilisateur a bien été enregistré:<br>";
                echo $prenom . "<br>" . $email . "<br>" . $mdp . "<br>" . $message . "<br>" .$mdpConfirmation;


                // CRÉATION des COOKIES utilisateurs
                // 3600 = (1 hour)
                setcookie("prenom", $prenom, time() + (3600*30) );
                setcookie("email", $email, time() + (3600*30) );
                setcookie("mdp", $mdp, time() + (3600*30) );
                setcookie("message", $message, time() + (3600*30) );
            }
            ?>


            <!-- ******************************************************** -->
            <!-- pour "GET" récupérer les deux articles qu'on a créés -->
            <!-- exécuter une requête SQL, pour les afficher sur le browser -->
            <!-- faire un boucle pour parcourir chaque article -->
            <?php
                // $articles = $connexion->query("SELECT * FROM articles WHERE id = 1 OR id = 2");
                $fruggies = $connexion->query("SELECT * FROM fruggies");

                echo "<ul>";
                foreach($fruggies as $fruggie) {
                    echo "<li class='container-fluid'>
                    <h3 class='name'>" . $fruggie['name'] . "</h3>
                    <p class='category'>Fruggie category: " . $fruggie['category'] . "</p>
                    <img src=" . $fruggie['image'] . ">
                    <p class='descript'>" . $fruggie['description'] . "</p>
                        </li>";
                }
                echo "</ul>";
                echo "<br>";
                echo "<br>";
            ?>

            <div class="attribution text-center">
            PHP Exercise Project<br>
            Coded by <a target="_blank" href="https://portfolio-clemence.netlify.app">Clémence TAN</a>
            <p>&copy; Copyright 2022 - All rights reserved</p>
            </div>

        </main>
        </div>
       

        <!-- ******************************************************** -->
        <footer>
            <p>Find us on social media</p>
            <div class="social-container">

                <div>
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100079029092235" class="social-media-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.linkedin.com/in/clemence-0802/" class="social-media-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://github.com/clem0802?tab=repositories&q=&type=&language=&sort=name" class="social-media-icon">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>
        </footer>

    </body>
</html>



