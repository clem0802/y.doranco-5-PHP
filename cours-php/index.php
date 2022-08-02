<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP</title>
    </head>
    <body>
        <h1>Cours PHP (test)</h1>
        <!-- (for Apple) localhost:8888/cours-php -->
        <!-- (Windows) localhost/cours-php -->
        <!-- (my path) http://localhost/y.doranco-5-PHP/cours-php/ -->
        <!-- PHP Intelephense (VScode extension, sth like validator) -->


        <!-- Date - PHP: -->
        <!-- https://www.php.net/manual/fr/function.date.php -->
        <!-- Echo - PHP: -->
        <!-- https://www.php.net/manual/fr/function.echo.php -->
        <!-- Concaténation - PHP: -->
        <!-- https://www.php.net/manual/fr/language.operators.string.php -->

        <!-- JOUR 1 -->
        <!-- ************************************ -->
        <?php
        echo "Bonjour tout le monde, je suis du texte en PHP<br>";
        echo "Nous sommes le <strong>" . date("d-m-Y H:i:s") . "</strong>"; 
        echo "<br>";
        echo "<br>";
        ?>

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


        <!-- JOUR 2 -->
        <!-- ************************************ -->
        
        <!-- Lawrence -->
        <!-- 29 ans, Formateur Web -->

        <?php
        $prenom = "Lawrence";
        $age = 29;
        $job = "Formateur Web";
        ?>

        <br>

        <?php
        echo $prenom . "<br>";
        echo $age . " ans, " . $job;
        ?>


    </body>
</html>

<!-- le "echo" me fait penser à un truc drôle, quand je fais la cuisine, si je ne les apporte pas à la salle manger, mon mari et mon fils pensent tjrs qu'il n'y a rien à manger... je dois faire des "echo" sur les plats :) -->