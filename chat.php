<?php 
  include "./db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>채팅</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!--<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Roboto+Slab:700' rel='stylesheet' type='text/css'>-->
    <!--
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
-->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/logo.css">

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



    <div id="disqus_thread"></div>
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://uceolimeosjinsaingteu.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


    <!--밑에는 채팅-->


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5cc32c16ee912b07bec50587/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->