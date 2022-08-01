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

        <?php
        echo "Bonjour tout le monde, je suis du texte en PHP<br>";
        echo "Nous sommes le " . date("d-m-Y H:i:s"); // cours d'auj
        echo "<br>";
        echo "<br>";


        $nyc = new DateTime('now', new DateTimeZone('America/New_York'));
        echo "Current time of NYC = ", $nyc->format("d-m-Y H:i:s"),'<br>'; 

        $paris = new DateTime('now', new DateTimeZone('Europe/Paris'));
        echo "Current time of Paris = ", $paris->format("d-m-Y H:i:s"),'<br>';

        $sydney=new DateTime('now', new DateTimeZone('Australia/Sydney'));
        echo "Current time of Sydney = ", $sydney->format("d-m-Y H:i:s"),'<br>';

        $tokyo=new DateTime('now', new DateTimeZone('Asia/Tokyo'));
        echo "Current time of Tokyo = ", $tokyo->format("d-m-Y H:i:s"),'<br>';

        ?>
    </body>
</html>