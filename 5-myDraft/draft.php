<!DOCTYPE html>
<html lang="en">
<head>
  <title>2022.08.05 - PROJECT-PHP-"TP" - (Lawrence)</title>
  <meta name="description" content="Here I work on PROJECT-PHP-'TP', Lawrence's PHP lessons">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link 
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" 
      rel="stylesheet"
  />
  <!-- for google font, ex "crown" -->
  <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" 
  />
  <!-- bootstrap -->
  <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
      crossorigin="anonymous"
  /> 
  <!-- google font, (à voir) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Outfit" rel="stylesheet">

  <link rel="stylesheet" href="draft.css">
</head>

        <!-- (for Apple) localhost:8888/cours-php -->
        <!-- (Windows, camarades) localhost/cours-php -->
        <!-- (MY path) http://localhost/y.doranco-5-PHP/0-myDraft/ -->
        <!-- PHP Intelephense (VScode extension, sth like validator) -->

<body>
  <header>
      <nav class="d-flex">
          <div class="header-links hide">
              <div class="links">
                <a href="#">LOGO</a>
              </div>
              <div class="links">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
              </div>
          </div>

          <div class="close">
                <h3>x</h3>
          </div>
        
          <div class="burger">
            <i class="fa-solid fa-burger"></i>
          </div>
      </nav>
  </header>


  <!-- *************************************************** -->
  <main hidden>
    <h2>MAIN</h2>

    <!-- ex of PORTFOLIO-1 elements -->
    <div class="port">        
        <?php
            // $prenom = strtoupper("Clémence"); => CLéMENCE
            $prenom = mb_strtoupper("Clémence"); 
            $age = 100;
            $job = "Junior Web Developer";
            $trainings = "xxx, Mimo, Doranco";
            $languages = "HTML5, CSS3, JavaScript, Python, PHP...";
            $workingExp = "piano teacher, night receptionist";
            $hobbies = "coding, reading, piano-playing";
        ?>
        <?php
            echo "-first name : ", $prenom . "<br>";
            echo "-age : ", $age . " yo" . "<br>";
            echo "-searched job : ", $job . "<br>";
            echo "-training background : ", $trainings . "<br>";
            echo "-coding skills : ", $languages . "<br>";
            echo "-working experiences : ", $workingExp . "<br>";
            echo "-hobbies : ", $hobbies . "<br>";
        ?>
    </div>


    <!-- ex of PORTFOLIO-2 elements (teacher) -->
    <!-- Présentation -->
    <section id="presentation">
        <div>
            <!-- <h2>Lawrence Terpin</h2> -->
            <h2><?php echo $prenom; ?> <?php echo $nom; ?></h2>
            <!-- <p>Formateur Web</p> -->
            <p><?php echo $metier; ?></p>
        </div>
        <div>
            <!-- <img src="images/<?php echo $image; ?>"> -->
            <img src="teacher.jpg">
        </div>
    </section>

    <!-- Expériences -->
    <section id="experiences">
        <ul>
            <li>
                <!-- <h2>Formation Web - Doranco</h2> -->
                <h2><?php echo $titreExperience1; ?></h2>
                <!-- <p>Formations dans le domaine du web pour l'École Doranco</p> -->
                <p><?php echo $descriptionExperience2; ?></p>
            </li>
            <li>
                <!-- <h2>Concepton d'applications</h2> -->
                <h2><?php echo $titreExperience2; ?></h2>
                <!-- <p>Conception d'applications</p> -->
                <p><?php echo $descriptionExperience2; ?></p>
            </li>
        </ul>
    </section>



    <!-- ex of img SRC -->
    <div class="main-right">
        <?php 
            echo ' <img src="clem.png" alt="my pic" /> '; 
        ?>
    
    </div>



    <!-- ex of FORM -->
    <form method="POST">
        <h2>Formulaire d'inscription</h2>
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

        // CRÉATION des COOKIES utilisateurs

        // 86400*365*100 = (1 century) => this one doesn't make sense
        setcookie("prenom", $prenom, time() + 86400*365*100);
        // 86400*365*10 = (1 decade)
        setcookie("prenom", $prenom, time() + 86400*365*10);
        // 86400*365 = (1 year)
        setcookie("prenom", $prenom, time() + 86400*365);
        // 86400*30 = (1 month)
        setcookie("prenom", $prenom, time() + 86400*30);
        // 86400*7 = (1 week)
        setcookie("prenom", $prenom, time() + 86400*7);
        // 86400 = 3600*24 = (1 day)
        setcookie("prenom", $prenom, time() + 86400);
        // 3600 = (1 hour)
        setcookie("prenom", $prenom, time() + 3600);
        // default no expiry
        setcookie("prenom", $prenom);


        // ---------------------------------------
        setcookie("email", $email, time() + 3600);
        setcookie("mdp", $mdp, time() + 3600);
    }
    ?>



    <!-- ex of TIME -->
    <?php
        echo "Bonjour tout le monde, je suis du texte en PHP<br>";
        echo "Nous sommes le <strong>" . date("d-m-Y H:i:s") . "</strong>"; 
        echo "<br>";
        echo "<br>";
    ?>
    <!-- ex of TIME ZONE (fureau horaire) -->
    <?php
        $nyc = new DateTime('now', new DateTimeZone('America/New_York'));
        echo "Current time of NYC = ", $nyc->format("d-m-Y H:i:s"),'<br>'; 

        $paris = new DateTime('now', new DateTimeZone('Europe/Paris'));
        echo "Current time of Paris = ", $paris->format("d-m-Y H:i:s"),'<br>';

        $sydney = new DateTime('now', new DateTimeZone('Australia/Sydney'));
        echo "Current time of Sydney = ", $sydney->format("d-m-Y H:i:s"),'<br>';

        $tokyo = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
        echo "Current time of Tokyo = ", $tokyo->format("d-m-Y H:i:s"),'<br>';

        echo "<br>";
        echo "<br>";
        date_default_timezone_set("Europe/Paris");
        echo date("h : i : s");
        echo "<br>";
        echo "<br>";
    ?>



    <!-- connection to BDD (phpMyAdmin) -->
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

    <!-- ******************************************************** -->
    <!-- GET les 2 articles qu'on a créés -->
    <!-- exécuter une requête SQL, pour les afficher sur le browser -->
    <!-- faire un boucle pour parcourir chaque article -->
    <?php
        // $articles = $connexion->query("SELECT * FROM articles WHERE id = 1 OR id = 2");
        $articles = $connexion->query("SELECT * FROM articles");

        echo "<ul>";
        foreach($articles as $article) {
            echo "<li>
            <h3>" . $article['titre'] . "</h3>
            <p>Publié le: " . $article['date'] . "</p>
                </li>";
        }
        echo "</ul>";
    ?>

  </main>


  <!-- *************************************************** -->
  <footer>
    <h2>FOOTER</h2>
  </footer>

  <script src="draft.js"></script>
</body>
</html>