<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <link rel="stylesheet" href="port.css">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
        />

        <title>Lawrence's lesson-2, EXO 1 (portfolio)
               Class exercise during Doranco lesson
               NON-responsive, for big desktop screen practice only
               Based on pic chosen by teacher Lawrence:
               <!-- https://cms-assets.tutsplus.com/cdn-cgi/image/width=850/uploads/users/1997/posts/37445/image-upload/SAVIN.jpg -->
        </title>
        <meta name="description" content="Lawrence's lesson-2, EXO 1 (portfolio)">
    </head>
    
    <body>
        <header>
            <div class="header-left">TAN.</div>
            <div class="header-middle">
                    <div><li class="menu">Menu</li></div>
                    <div><li>About</li></div>
                    <div><li>Services</li></div>
                    <div><li>XXX</li></div>
                    <div><li>Portfolio</li></div>
                    <div><li>Team</li></div>
                    <div><li>Contact</li></div>
                    <div><li>Blog</li></div>
            </div>

            <div class="header-right">
                <div class="right right1">DOWNLOAD CV</div>
                <div class="right right2"><i class="fa-solid fa-crown"></i></div>
            </div>
        </header>

        <main>
            <div class="main-left">
                <div class="title1">
                    <?php
                    $title1 = "Get Every Single Solutions";
                    echo $title1 . "<br>";
                    ?>
                </div>
                <div class="title2">
                    <?php
                    $title2 = "I'm Junior Web Developer <br> Clémence TAN";
                    echo $title2 . "<br>";
                    ?>
                </div>

                <div class="lorem">
                    <?php
                        $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                    ?>
                    <?php
                        echo $lorem . "<br>";
                    ?>
                </div>

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
                <br>

                <div class="main-bottom">
                    <div class="btn-container">
                        <div class="bottom1">About Me</div>
                        <div class="bottom2">      
                            <i class=" fa fa-play-circle"></i>
                        </div>
                        <div class="bottom3">Play Video</div>
                    </div>

                    <div class="line-container">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </div>

            <div class="main-right">
                <?php 
                    echo ' <img src="clem.png" alt="my pic" /> '; 
                ?>
            </div>
        </main>

        <!-- footer was not required in this exercise -->
        <footer>
            <br>
            <br>
        </footer>
    </body>
</html>