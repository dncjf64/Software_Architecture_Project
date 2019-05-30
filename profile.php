<?php 
  include "./db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>어벤져스</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <link rel="stylesheet" href="css/profile.css">

    <!--
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Roboto+Slab:700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
-->





    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/logo.css">


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>

    <link rel="stylesheet" href="css/avengers.css">


</head>



<body>

    <header class="site-header" role="banner">

        <div class="topbar">
            <h1 class="site-title"><a href="index_login.php">

                    <!-- Logo begin -->
                    <a href="index_login.php">
                        <div class="lg">
                            <h1 class="mar">MARVEL</h1>
                            <h1 class="stu">STUDIO</h1>
                        </div>
                    </a>
                    <!-- Logo end -->

                </a></h1>

            <nav class="top-navigation" role="navigation">
                <ul class="inline-list padded-list">
                    <li><a href="profile.php" class="icon ion-university">Profile</a></li>
                    <li><a href="board.php" class="icon ion-map">Board</a></li>
                    <li><a href="chat.php" class="icon ion-chatbubbles">Chat</a></li>
                    <li><a href="avengers.php" class="icon ion-paper-airplane">Avengers</a></li>
                    <li><a href="casting.php" class="icon ion-edit">Cast</a></li>


                    <?php
error_reporting(E_ALL&~E_NOTICE&~E_WARNING);session_start();
    if(isset($_SESSION["username"]))
    {
        ?>
                    <li><a href="mypage.php" class="icon ion-android-exit button button-red button-login ">
                            <?php echo $_SESSION["username"];?>님</a></li>
                    <?php
    }else
    {
        ?>
                    <?php
    }
            ?>


                    <li><a href="php/logout.php" class="icon ion-android-exit button button-blue  button-login">Log-out</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <body>

        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        </head>
        <div id='nav'>

        </div>
        <section>
            <div class="title"><span>About Me</span><span>college student and<a target="_blanck" href="salfia.com">Web Developer</a>

                    <h3><br>Hello, my name is HNDR.
                        I am a fan of Marvel Studios and a site manager.</h1>


                        <!--    <p>Social Links</p>-->



                </span></div>
        </section>



        <script src="js/profile.js"></script>

    </body>