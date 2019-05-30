<!DOCTYPE html>
<html lang="en">
<?php 
 error_reporting(E_ALL&~E_NOTICE&~E_WARNING);session_start(); ?>

<head>
    <meta charset="UTF-8">
    <title>Marvel Fan Page</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Roboto+Slab:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <!--

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
-->

    <!--  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css'>-->

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/logo.css">


</head>

<body>

    <header class="site-header" role="banner">

        <div class="topbar">
            <h1 class="site-title"><a href="#">


                    <!-- Logo begin -->
                    <a href="index.php">
                        <div class="lg">
                            <h1 class="mar">MARVEL</h1>
                            <h1 class="stu">STUDIO</h1>
                        </div>
                    </a>
                    <!--    <script  src="js/logo.js"></script>-->
                    <!-- Logo end -->


                </a></h1>

            <nav class="top-navigation" role="navigation">
                <ul class="inline-list padded-list">
                    <!--
                    <li><a href="#" class="icon ion-university">Learn</a></li>
                    <li><a href="#" class="icon ion-map">Map</a></li>
                    <li><a href="#" class="icon ion-chatbubbles">Chat</a></li>
                    <li><a href="#" class="icon ion-paper-airplane">News</a></li>
                    <li><a href="#" class="icon ion-edit">Wiki</a></li>
-->
                    <li><a href="#" class="icon ion-university">로그인 후 메뉴 이용 가능</a></li>



                    <?php
error_reporting(E_ALL&~E_NOTICE&~E_WARNING);session_start();
    if(!isset($_SESSION["username"]))
    {
        ?>
                    <li><a href="#login" class="icon ion-android-exit button button-red button-login toggle-hide">Sign In</a></li>
                    <?php
    }else 
    {
        ?>
                    <li><a href="#login" class="icon ion-android-exit button button-red button-login toggle-hide">
                            <?php echo $_SESSION["username"];?>님</a></li>
                    <li><a href="php/logout.php" class="icon ion-android-exit button button-blue  button-login">Log-out</a></li>

                    <?php
    }
            ?>



                </ul>
            </nav>
        </div>

        <div class="header-image">
            <div class="header-image-text">
                <h2 class="header-title">Avengers : Endgame</h2>
                <p class="header-description">
                    The Great Avengers<br>
                    The last war to change destiny spreads!</p>

                <a class="button button-yellow" href="http://www.cgv.co.kr/ticket/">Get Tickets</a>

                <a class="button button-blue" href="https://movie.naver.com/movie/bi/mi/point.nhn?code=136900">
                    Movie Reviews</a>
            </div>
        </div>

    </header>

    <main role="main" class="site-main">

        <section class="fixed-width highlighted-bg">
            <h2>Summary</h2>

            <div class="col fourth">
                <h3>
                    Representation</h3>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/197359/landingIcons_connect.svg" alt="" class="landing-icon">
                <p>Kevin Feige<br> Luis Desforge</p>
            </div>

            <div class="col fourth">
                <h3>Establishment</h3>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/197359/landingIcons_nonprofits.svg" alt="" class="landing-icon">
                <p>1993</p>
            </div>

            <div class="col fourth">
                <h3>
                    Original</h3>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/197359/landingIcons_learn.svg" alt="" class="landing-icon">
                <p>
                    Marvel Comics</p>
            </div>
            <div class="col fourth">
                <h3>Best profitability</h3>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/197359/landingIcons_portfolio.svg" alt="" class="landing-icon">
                <p>
                    The world's most successful filmmaker</p>
            </div>


        </section>

<!--
        <section class="fixed-width">
            <h2>Skills You'll Learn</h2>

            <div class="col fourth highlighted-bg small-box">
                <h3>HTML5</h3>
                <div class="icon icon-large ion-social-html5"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>CSS3</h3>
                <div class="icon icon-large ion-social-css3"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>JavaScript</h3>
                <div class="icon icon-large ion-social-javascript"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>Databases</h3>
                <div class="icon icon-large ion-stats-bars"></div>
            </div>
-->



<!--
            <div class="col fourth highlighted-bg small-box">
                <h3>Git</h3>
                <div class="icon icon-large ion-social-github"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>Node.js</h3>
                <div class="icon icon-large ion-social-nodejs"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>Angular.js</h3>
                <div class="icon icon-large ion-social-angular"></div>
            </div>

            <div class="col fourth highlighted-bg small-box">
                <h3>Agile</h3>
                <div class="icon icon-large ion-ios-loop-strong"></div>
            </div>

        </section>
-->

 <section class="fixed-width">
<!--        <section class="fixed-width highlighted-bg">-->
            <h2>Admin a Favorite MCU Character</h2>

            <div class="col third">
                <img src="https://i.imgur.com/xikrdv9.png%22%20title=%22%EC%88%98%EC%A0%95%EB%90%A8_2018051915421729241_1.png" alt="" class="landing-icon testimonial-avatar">
                <p>
Advantages of Marvel Comics. Tinnitus is dead pool. Mercenary from Canada
                    <br>
                    <a href="https://namu.wiki/w/%EB%8D%B0%EB%93%9C%ED%92%80(%EC%97%91%EC%8A%A4%EB%A7%A8%20%EC%8B%A4%EC%82%AC%EC%98%81%ED%99%94%20%EC%8B%9C%EB%A6%AC%EC%A6%88)">@Dead-Pool</a>
            </div>

            <div class="col third">
                <img src="https://i.imgur.com/zNIuvlh.png" title="수정됨_2016100502113_0 (2).png" alt="" class="landing-icon testimonial-avatar">
                <p>
The character of Marvel Cinematic Universe and the protagonist of the Guardians of Galaxy series
                   <br>
                    <a href="https://namu.wiki/w/%EC%8A%A4%ED%83%80%EB%A1%9C%EB%93%9C(%EB%A7%88%EB%B8%94%20%EC%8B%9C%EB%84%A4%EB%A7%88%ED%8B%B1%20%EC%9C%A0%EB%8B%88%EB%B2%84%EC%8A%A4)">@Star-Lord</a>
            </div>

            <div class="col third">
                <img src="https://i.imgur.com/9P8JayI.png" title="수정됨_2017030909141427948_1.png" alt="" class="landing-icon testimonial-avatar">
                <p>
Thor, the god of thunder and the king of Asgard. Odin, the King of Asgard, is the firstborn son of Frega.<br>
                     <a href="https://namu.wiki/w/%ED%86%A0%EB%A5%B4(%EB%A7%88%EB%B8%94%20%EC%8B%9C%EB%84%A4%EB%A7%88%ED%8B%B1%20%EC%9C%A0%EB%8B%88%EB%B2%84%EC%8A%A4)">@Thor</a>
                </p>
            </div>

        </section>

       
       
        <section class="fixed-width highlighted-bg">
<!--        <section class="fixed-width">-->
            <h2>Why the world is crazy about MCU movie?</h2>

            <ul class="large-list">
                <li class="icon ion-code">Simple and light expression of a complex world</li>
                <li class="icon ion-code">Balance between freshness and stability</li>
                <li class="icon ion-code">The action is excellent.</li>
                <li class="icon ion-code">
Humor Codes, Wit, and Hero's Romance</li>
                <li class="icon ion-code">The performances of the actors are prominent.</li>
                <li class="icon ion-code">Huge and colorful movie scale</li>
                <li class="icon ion-code">
Superhero one well 'Marvel' brand</li>
                <li class="icon ion-code">Cookie images that cause questions</li>
            </ul>

<!--            <a href="" class="button button-yellow">Learn to code today (it's free!)</a>-->
        </section>

        <section class="fixed-width">
            <h2>As featured in</h2>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/197359/as-seen-on.png" alt="" class="featured-in-image">
        </section>


    </main>

    <footer class="site-footer" role="contentinfo">
        <ul class="inline-list">
            <li><a href="" class="icon ion-speakerphone">Blog</a></li>
            <li><a href="https://github.com/" class="icon ion-social-github">Github</a></li>
            <li><a href="https://www.twitch.tv/" class="icon ion-social-twitch">Twitch</a></li>
            <li><a href="" class="icon ion-social-linkedin">LinkedIn</a></li>
            <li><a href="https://www.facebook.com/" class="icon ion-social-facebook">Facebook</a></li>
            <li><a href="https://twitter.com/?lang=ko" class="icon ion-social-twitter">Twitter</a></li>
            <li><a href="" class="icon ion-locked">Privacy</a></li>
        </ul>
    </footer>







    <!--##############################################-->







    <!-- Login -->
    <div id="modal-bg" class="login-modal-bg toggle-hide"></div>
    <div id="login" class="login-container">
        <div class="col half">
            <h3>Sign in with email</h3>
            <form method="post" class="login-form" action="php/login.php">
                <div class="input-group">
                    <input id="username" type="text" name="username" placeholder="username">
                    <label class="icon-label" for="email"><i class="icon ion-person"></i></label>
                </div>
                <!--#https://ionicons.com/ 여기참고하서 이름만 바꾸면됨.-->
                <div class="input-group">
                    <input id="password" type="password" name="password" placeholder="Password">
                    <label class="icon-label" for="password"><i class="icon ion-key"></i></label>
                </div>
                <input type="submit" value="Sign In" class="button button-red full-width">




                <p class="small"><a href="password_find.php">Forgot your password?</a>
                    <br><a href="signup2.php">Sign up using your email address</a></p>
            </form>
        </div>
        <div class="col half highlighted-bg">
            <button class="button full-width button-twitter"><i class="icon ion-social-twitter"></i>Sign in with Twitter</button>
            <button class="button full-width button-github"><i class="icon ion-social-github"></i>Sign in with Github</button>
            <button class="button full-width button-facebook"><i class="icon ion-social-facebook"></i>Sign in with Facebook</button>
            <button class="button full-width button-google"><i class="icon ion-social-google"></i>Sign in with Google</button>
            <button class="button full-width button-linkedin"><i class="icon ion-social-linkedin"></i>Sign in with LinkedIn</button>
        </div>
        <button class="button button-red close-button toggle-hide"><i class="icon ion-close-circled"></i> Close</button>
    </div>




    <script src="js/main.js"></script>




</body>

</html>