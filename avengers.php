<?php 
  include "./db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Avengers</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />



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

        <div class="wrap" id="avenge">
            <div class="screen">
                <div class="homepage">
                    <div class="banner-image" v-bind:style="{ backgroundImage: 'url(' + bannerImage + ')' }">
                        <div class="search" @click="focusSearch">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Find Your Hero" id="search-input" @focus='toggleFocus' @blur='toggleFocus' autocomplete="off" v-model="searchString">
                        </div>
                    </div>

                    <div class="heros">
                        <div class="hero" v-for="hero in heros" v-bind:data-hero-name="hero.name" @click="selectHero(hero.id)">
                            <div class="icon" v-bind:style="{backgroundPosition: hero.iconPos}"> </div>
                            <p>{{hero.name}}</p>
                        </div>
                    </div>
                </div>

                <div class="heropage">
                    <a class="go-back" @click='backToHome'><i class="fas fa-arrow-circle-left"></i></a>
                    <div class="banner-image" v-bind:style="{ backgroundImage: 'url(' + activeHero.bannerImage + ')' }">
                        <h1>{{activeHero.name}}<span>{{activeHero.identity}}</span></h1>
                    </div>
                    <div class="info">
                        <p class="quote"><em>{{activeHero.quote}}</em></p>
                        <div class="powers">
                            <label>Durability</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[0]/7)*100+'%'}"></div>
                            </div>
                            <label>Energy</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[1]/7)*100 + '%'}"></div>
                            </div>
                            <label>Fighting Skills</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[2]/7)*100 + '%'}"></div>
                            </div>
                            <label>Intelligence</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[3]/7)*100 + '%'}"></div>
                            </div>
                            <label>Speed</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[4]/7)*100 + '%'}"></div>
                            </div>
                            <label>Strength</label>
                            <div class="power-bar">
                                <div v-bind:style="{width: (activeHero.powers[5]/7)*100 + '%'}"></div>
                            </div>
                        </div>
                        <p class="bio" v-html="activeHero.bio"></p>
                    </div>
                </div>

                <div class="transition">
                    <span v-bind:style="{ backgroundImage: 'url(' + spanImage + ')' }"></span>
                    <span v-bind:style="{ backgroundImage: 'url(' + spanImage + ')' }"></span>
                    <span v-bind:style="{ backgroundImage: 'url(' + spanImage + ')' }"></span>
                    <span v-bind:style="{ backgroundImage: 'url(' + spanImage + ')' }"></span>
                    <span v-bind:style="{ backgroundImage: 'url(' + spanImage + ')' }"></span>
                </div>

            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>



        <script src="js/avengers.js"></script>

    </body>