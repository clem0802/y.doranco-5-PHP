<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">

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

        
        <!-- info complètes pr ONGLET NAVIGATEUR -->
        <title>Lawrence's exo 3 - Fruggies (clémence)</title>
        <meta name="description" content="Lawrence's exo 3 - Fruggies (clémence)">
        <link rel="shortcut icon" href="https://images.unsplash.com/photo-1631209121750-a9f656d28f46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHZlZ2V0YWJsZXMlMjBhbmQlMjBmcnVpdHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" type="image/png">
    </head>

    <body class="container-fluid d-flex flex-column justify-content-center align-items-center text-center">

        <header>
            <h1>EXO 3 <br>(Lawrence's PHP lesson)
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    PHP Testing Site
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action1</a></li>
                    <li><a class="dropdown-item" href="#">Action2</a></li>
                    <li><a class="dropdown-item" href="#">Action3</a></li>
                </ul>
            </div>
        </header>
    

        <div class="container-fluid">
        <main class="w-75 container-fluid d-flex flex-column">

            <!-- (1) Manip Connection - phpMyAdmin -->
            <?php
                $paris = new DateTime('now', new DateTimeZone('Europe/Paris'));
                echo "Current time of Paris is: ", $paris->format("d-m-Y H:i:s"),'<br>';
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
            ?>

            <h2>Welcome to Clémence's Fruggies Database</h2>
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
                echo "Seeing this message means you are successfully connected to my Fruggies Database :)";
            }
            catch(PDOException $erreur){
                echo "Erreur: " . $erreur->getMessage();
            }
            ?>
            

            <!-- (2) FORM -->
            <form action="https://public.herotofu.com/v1/d5377820-0cf0-11ed-9bdb-53c785fa3343" method="POST" class="container-fluid d-flex flex-column">
                <h2>Fruggies Subscription Form</h2>
                <p>Which one would you prefer? fruit or veggie?</p>
                <p>Wanna contact me? Please test it, I will indeed reply.</p><br>
                <input type="text" name="prenom" placeholder="Your first name">
                <input type="text" name="email" placeholder="Your email">
                <input type="password" name="mdp" placeholder="Set your password">
                <input type="password" name="mdp-confirmation" placeholder="Confirm your password">
                <textarea name="message" id="message" cols="28" rows="5" placeholder="Your message"></textarea>
                <input type="submit" name="inscription" value="Subscribe" class="submit">
            </form>
            <br>
            <br>


            <!-- to check if the FORM is submitted + COOKIES -->
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


                // CRÉATION of COOKIES for users
                // 3600 = (1 hour)
                setcookie("prenom", $prenom, time() + (3600*30) );
                setcookie("email", $email, time() + (3600*30) );
                setcookie("mdp", $mdp, time() + (3600*30) );
                setcookie("message", $message, time() + (3600*30) );
            }
            ?>



            <!-- ************************************************* -->
            <!-- FROM2 - JOURS 5 (INSERTION) -->
            <form class="form2" method="POST">
                <h2>Publish your fruggie</h2>
                <input type="text" name="name" placeholder="Fruggie name">
                <input type="text" name="category" placeholder="Type 'fruit' or 'veggie'">
                <input type="text" name="image" placeholder="Paste your fruggie URL">
                <textarea name="description" placeholder="Describe your fruggie"></textarea>
                <input type="submit" name="publish-fruggie" value="Publish" class="submit">
            </form>
            <br>
            <br>

            <?php
            // si le formulaire de publication d'article est soumi
            if ($_POST['publish-fruggie']){

                $name = $_POST['name'];
                $description = $_POST['description'];
                $category = $_POST['category'];
                $image = $_POST['image'];
                
                $connexion->query("INSERT INTO fruggies (name, description, category, image) VALUES ('$name', '$description','$category', '$image')");

                echo "Your fruggie is published";
            }
            ?>
            <!-- An apple is red or green, sweet and slightly sour, this fruit is great. -->
            <!-- ************************************************* -->




            <!-- (3) GET -->
            <!-- to GET the fruggies created and stored in phpMyAdmin -->
            <!-- to run each SQL request, so to have them shown on the browser -->
            <!-- to loop over each fruggie -->
            <?php
                // $fruggies = $connexion->query("SELECT * FROM fruggies WHERE id = 1 OR id = 2");
                $fruggies = $connexion->query("SELECT * FROM fruggies");

                echo "<ul class='container-fluid flex-row flex-wrap'>";
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


            <!-- (4) ATTRIBUTION -->
            <div class="attribution text-center">
            PHP Exercise Project<br>
            Coded by <a target="_blank" href="https://portfolio-clemence.netlify.app">Clémence TAN</a>
            <p>&copy; Copyright 2022 - All rights reserved</p>
            </div>

        </main>
        </div>
       

        <!-- FOOTER -->
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>




