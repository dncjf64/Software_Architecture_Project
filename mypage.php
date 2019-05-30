<?php
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 
 error_reporting(E_ALL&~E_NOTICE&~E_WARNING);session_start(); 
include "db.php";
if(isset($_SESSION['username'])){
$id='';
if(isset($_POST['username'])) {
    $id = $_POST['username'];
}
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>member modifie</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>

      <link rel="stylesheet" href="css/signup.css">
</head>





<body>
	<div class="wrapper">
		<form  id = "my-form" method="post" action="php/member_update.php">
		
		<div class="form__header">
      <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 256 256" preserveAspectRatio="xMinYMin meet"><path d="M232.793 0H23.207C10.39 0 0 10.39 0 23.207v209.586C0 245.61 10.39 256 23.207 256h209.586C245.61 256 256 245.61 256 232.793V23.207C256 10.39 245.61 0 232.793 0" fill="#CCCDD1"/><path d="M85.555 80.545c8.51 0 15.639-6.67 15.639-15.412 0-8.736-7.129-15.405-15.639-15.405s-15.637 6.669-15.637 15.405c0 8.741 7.127 15.412 15.637 15.412M53.129 163.065c-.919 3.91-1.38 8.132-1.38 11.576 0 13.571 7.359 22.58 22.998 22.58 12.97 0 23.485-7.702 31.056-20.139l-4.623 18.553h25.755l14.72-59.039c3.68-14.948 10.809-22.707 21.619-22.707 8.509 0 13.798 5.292 13.798 14.028 0 2.531-.23 5.288-1.15 8.279l-7.59 27.137c-1.15 3.91-1.608 7.822-1.608 11.499 0 12.883 7.587 22.306 23.456 22.306 13.569 0 24.377-8.735 30.357-29.664l-10.118-3.906c-5.06 14.021-9.43 16.556-12.88 16.556-3.45 0-5.29-2.298-5.29-6.895 0-2.07.462-4.367 1.15-7.133l7.361-26.438c1.839-6.208 2.53-11.713 2.53-16.771 0-19.778-11.96-30.1-26.448-30.1-13.568 0-27.368 12.239-34.266 25.12l5.058-23.12H108.31l-5.52 20.364h18.399l-11.33 45.36c-8.897 19.778-25.24 20.099-27.291 19.64-3.368-.76-5.522-2.039-5.522-6.415 0-2.525.46-6.152 1.61-10.525l17.25-68.424H52.21l-5.52 20.364h18.167L53.13 163.065" fill="#323A45"/></svg>

      <div class="triangle"></div>
    </div>
		
			<?php
				$sql =  mysqli_query($mysqli, "SELECT * FROM user WHERE username='$id'");
//                $member = mysqli_fetch_array($sql)
//				while(!$member){
					?>
					
					
<div class="form__body">
         <p class="title">
        Get Started Absolutely
        <span>Free</span>
      </p>
        <p class="description">No Credit Card Required.</p>
      
<!--			<p><a href="index_login.php">홈으로</a></p>-->
            
								<input type="text" size="35" name="username" value="<?php echo $_SESSION['username'];?>" disabled>
								<input type="password" size="35" name="password" 
								placeholder="비밀번호">
								<input type="text" size="35" name="email" placeholder="이메일" value="<?php echo $member['email']; ?>">
                    <button type="submit" value="정보변경">정보변경</button>
			<p class="disclaimer">
        By clicking "Sign Up Free" I agree to InVision's
        <span>Terms of Service</span>
      </p>
			<?php
//            }
            ?>
            </div>
		</form>
		
		  <div class="login">
    <p>Already have an account?
      <a href="">Login</a>
    </p>
  </div>

  <div class="social">
    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-dribbble"></i>
    </a>
  </div>

	</div>
	
	
	
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
