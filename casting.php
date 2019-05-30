<?php 
  include "./db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Casting</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />



    <!--
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Roboto+Slab:700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
-->




 <link rel="stylesheet" href="css/casting.css">
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
    
   
  
  
  
  
 <section id="elenco" class="marvel-cast">
			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/2290f0b14d31789cee471c21a3ab488b/tumblr_pcaxeqzsO81wjqf0ao7_400.jpg" />
					<span><strong>Robert Downey Jr</strong></span>
					<span>Iron Man</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/1d747f3cdb98078b33f506bdc669671f/tumblr_p91zg6gcOG1wjqf0ao2_400.jpg" />
					<span><strong>Chris Evans</strong></span>
					<span>Captain America</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/c5f2d8f87cde3e8aeda1729d6bfe8e1e/tumblr_p1ovmjoRJd1wr03doo6_400.png" />
					<span><strong>Scarlett Johansson</strong></span>
					<span>Black Widow</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/df9ecac77a73b4ba3ae8b4b91ff48786/tumblr_op1dik7NHo1slj0zno8_400.png" />
					<span><strong>Chris Hemsworth</strong></span>
					<span>Thor</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/0542dfbbf0dbb4d34d079ef8620ec1c7/tumblr_pdbatf8TaQ1xpjiuvo8_250.png"/>
					<span><strong>Mark Rufallo</strong></span>
					<span>Hulk</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/79f1af6c601ea6ff9186d502c1b304b6/tumblr_pae2lrLpcJ1wr1mryo7_400.png" />
					<span><strong>Jeremy Renner</strong></span>
					<span>Hawkeye</span>
				</div>
			</div>


			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/9b18580677b59caff7e558cf22e10e57/tumblr_pb66f2XBZJ1wjqf0ao2_400.jpg" />
					<span><strong>Tom Hiddleston</strong></span>
					<span>Loki</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/8290da8ca3510a52523b895586dad6f0/tumblr_pf96bt9y5D1tb6y8do7_400.png" />
					<span><strong>Brie Larson</strong></span>
					<span>Captain Marvel</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/976c78e843eb1909c6f44518d69639a1/tumblr_p8yoomXijc1wjqf0ao2_400.jpg" />
					<span><strong>Benedict Cumberbatch</strong></span>
					<span>Doctor Strange</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/cd9ee138e69d1ca46069749f89d9577e/tumblr_pd5tdph1YX1xpjiuvo1_250.png" />
					<span><strong>Chadwick Boseman</strong></span>
					<span>Black Panther</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/76aa39172e88cf067b41737534b732c3/tumblr_pd69wg9sCc1wjqf0ao3_r1_400.jpg" />
					<span><strong>Tom Holland</strong></span>
					<span>Spider-Man</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/3ac856458fcb7d63487c53118fed143e/tumblr_p1owa8SlEl1wr03doo1_400.png" />
					<span><strong>Tessa Thompson</strong></span>
					<span>Valkyrie</span>
				</div>
			</div>

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/137848e1f16876cd4299fa17262c532c/tumblr_pdkdfi9ZRd1wjqf0ao2_400.jpg" />
					<span><strong>Sebastian Stan</strong></span>
					<span>Winter Soldier</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/fe05335c1baaca0869f5a169d2d26e00/tumblr_pbcss4RmRe1wjxteco3_400.jpg" />
					<span><strong>Anthony Mackie</strong></span>
					<span>Falcon</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/15003dc5a2d4bced85293aacc5313835/tumblr_p8a733hdDF1wjqf0ao5_400.jpg" />
					<span><strong>Elizabeth Olsen</strong></span>
					<span>Scarlet Witch</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/87f60626b39f44b32ddf19dae8a4da99/tumblr_p8s7vyqBsl1upyaqco3_250.png" />
					<span><strong>Paul Bettany</strong></span>
					<span>Vision</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/aa6bc4da874e75170829c2751c92ecd7/tumblr_p93oja0S7i1wr1mryo5_400.png" />
					<span><strong>Paul Rudd</strong></span>
					<span>Ant-Man</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/6cac0170ecf07deb4fbae406c4c7ef83/tumblr_pa6185cUFq1wr1mryo1_400.png" />
					<span><strong>Evangeline Lilly</strong></span>
					<span>Wasp</span>
				</div>
			</div>
			

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/ff8ed5d209b8d0a59ab06c393be0563c/tumblr_p8wg6bwFYh1ttz7lno4_250.png" />
					<span><strong>Zoe Saldana</strong></span>
					<span>Gamora</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/e800432ce7cfa2381bbfea5e35861032/tumblr_ohqednkVi91rjj6tno3_1280.png" />
					<span><strong>Chris Pratt</strong></span>
					<span>Star Lord</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/76942b4a0d97d40c0097d5d86cb5838e/tumblr_p8bngdjefs1wjqf0ao3_400.jpg" />
					<span><strong>Karen Gillan</strong></span>
					<span>Nebula</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/94057c846980493d83856d012f5f6eb2/tumblr_p8dq02pClC1xpjiuvo3_250.png" />
					<span><strong>Bradley Cooper</strong></span>
					<span>Rocket (voice)</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/0fbf1ec683a57b9f31cbb6b9752632bb/tumblr_p41quiNJhC1vxzhcto2_1280.jpg" />
					<span><strong>Dave Bautista</strong></span>
					<span>Drax</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/dd9852c17961b838e379a0a8bb36ce32/tumblr_p41quiNJhC1vxzhcto1_1280.jpg" />
					<span><strong>Pom Klementieff</strong></span>
					<span>Mantis</span>
				</div>
			</div>

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/20dfa6cb8a7050e53dd42bb24afc3847/tumblr_p8unf0J3391wjqf0ao3_400.jpg" />
					<span><strong>Cate Blanchett</strong></span>
					<span>Hela</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/38b7e1e8bb74d05db4040e5e6bcbe54a/tumblr_otv2pmRxVT1rsqnlxo9_250.png" />
					<span><strong>Idris Elba</strong></span>
					<span>Heimdall</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/fa98941c3529cc6e86b866531b9cd889/tumblr_pa4o5gx63I1wr1mryo4_400.png" />
					<span><strong>Josh Brolin</strong></span>
					<span>Thanos</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/96dc729e64e940843839d06c34322e89/tumblr_pesrs8eHH31xpjiuvo1_250.png" />
					<span><strong>Don Cheadle</strong></span>
					<span>James Rhodes</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/c8f29b8334b9d3eec6cf6ec6a56cedd4/tumblr_pesr67eSOl1xpjiuvo8_250.png" />
					<span><strong>Gwayneth Paltrow</strong></span>
					<span>Pepper Potts</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/2ee6985706981bf25af50da29aee2ec0/tumblr_p8cwr7XGJW1wr1mryo3_400.png" />
					<span><strong>Michel B Jordan</strong></span>
					<span>Erick Killmonger</span>
				</div>
			</div>

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/d3743ee1b0edb97d99e18b7cc7d27b2a/tumblr_p9ig8pqIyd1t9xy9lo2_400.png" />
					<span><strong>Danai Gurira</strong></span>
					<span>Okoye</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/7f781c6c989d991b99dac1035e085877/tumblr_p76x359kxt1vu933lo2_1280.jpg" />
					<span><strong>Jaimie Alexander</strong></span>
					<span>Lady Sif</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/e006881d6c54d65862fdaf3a6ee6ee98/tumblr_p8638gwKrK1xop0a6o6_400.png" />
					<span><strong>Winston Duke</strong></span>
					<span>M'Baku</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/5841f9d23a0e4b14f2bc7257a744eb7a/tumblr_p76x359kxt1vu933lo7_1280.jpg" />
					<span><strong>Natalie Portman</strong></span>
					<span>Jane Foster</span>
				</div>
				

				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/651a11d4c819c8ec9ce40128ade10e31/tumblr_p8638gwKrK1xop0a6o9_400.png" />
					<span><strong>Daniel Kaluuya</strong></span>
					<span>W'Kabi</span>
				</div>
			
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/ce4e1a81a3e8ee41c3f1f5ee22b1c221/tumblr_p2ezn4oYq61vgy167o6_400.jpg" />
					<span><strong>Jeff Goldblum</strong></span>
					<span>Grandmester</span>
				</div>
				
			</div>

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/729330f098b3794c788c68affa463810/tumblr_pd0svlXsX81r2t9huo4_400.png" />
					<span><strong>Letitia Wright</strong></span>
					<span>Shuri</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/7d3fdd4194fd90260c13de7a78874e0c/tumblr_p7wnhceVTY1r2t9huo4_400.png" />
					<span><strong>Angela Bassett</strong></span>
					<span>Ramonda</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/0513558b3d0b2d002dc8c95d4ee50038/tumblr_padpvit2KA1wjxteco7_400.jpg" />
					<span><strong>Dominic Cooper</strong></span>
					<span>Howard Stark - 40's</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/a279da5f0056b9c6016f66722cebea79/tumblr_ooz3j3uws91t4osjeo6_400.png" />
					<span><strong>Emily VanCamp</strong></span>
					<span>Sharon Carter</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/f81a86fd591f5abcf2f92e9f51e39dbc/tumblr_p2rcaaKmcn1vu933lo9_1280.jpg" />
					<span><strong>Hayley Atwell</strong></span>
					<span>Peggy Carter</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/ea6e9e773388128556eb60421bea1705/tumblr_p36guuK6sS1tux3bho5_250.png" />
					<span><strong>Lupita Nyong'o</strong></span>
					<span>Nakia</span>
				</div>
			</div>
			

			<div class="marvel-cast__gallery-wrapper">
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/502b1a07f913dc206edf537e565a71b1/tumblr_pftrchj9Yr1w3q68eo9_400.jpg" />
					<span><strong>Samuel L Jackson</strong></span>
					<span>Nick Fury</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/0bbb12ab945014383b0c691681b37485/tumblr_p6fv9andRi1wxhqebo8_400.jpg" />
					<span><strong>Cobie Smulders</strong></span>
					<span>Maria Hill</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/3ffa75fd74c27f20632e73cab66a127c/tumblr_otjgw7zwhs1rsqnlxo2_250.png" />
					<span><strong>Clark Gregg</strong></span>
					<span>Agent Coulson</span>
				</div>

				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/b77fb2d97d2f4e65cef18e11209877d8/tumblr_p9rfa5Ucow1xpjiuvo7_250.png" />
					<span><strong>Martin Freeman</strong></span>
					<span>Everett Ross</span>
				</div>
				
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/e64483aac9992653d735d22249fe135a/tumblr_ossrc7Cn4S1w3pp7no6_400.png" />
					<span><strong>Zendaya</strong></span>
					<span>MJ</span>
				</div>
				<div class="marvel-cast__gallery-item">
					<img class="marvel-cast__gallery-item__img"
						src="https://66.media.tumblr.com/2204af7cfa6aac9ff9d24a7a88aed2e8/tumblr_p847n4jYrp1vu933lo3_1280.jpg" />
					<span><strong>Aaron Taylor Johsson</strong></span>
					<span>Quiksilver</span>
				</div>
			</div>
			
			<h1 class="marvel-cast__gallery-title">and so much more characters!</h1>
		</section>