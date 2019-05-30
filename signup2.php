<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");

$user_id = '';
$email = '';
$user_pw = '';
$user_pw2 = '';


if (isset($_POST["username"])) {
    $user_id = $_POST['username'];
}

if (isset($_POST["email"])) {
    $email = $_POST['email'];
}

if (isset($_POST["password"])) {
    $user_pw = $_POST['password'];
}

if (isset($_POST["password2"])) {
    $user_pw2 = $_POST['password2'];
}


if( $user_id != '' && $email != '' && $user_pw != '') {
    
    $db = mysqli_connect("127.0.0.1", "root", "rladncjf1!", "webservice");
    $db ->set_charset("utf8");
    
    $sql = "SELECT * FROM user WHERE username='".$_POST['username']."'";

    $resource = mysqli_query($db, $sql);

    $num = mysqli_num_rows($resource);
    
//  echo "number of rows: $num";

  if( $num > 0 ) {
        echo "<script> alert('이미 존재하는 아이디입니다.');</script>";
        echo "<script>window.history.back();</script>";
    exit(0);
  }
    
    
     if($user_pw != $user_pw2) {
        echo "<script> alert('비밀번호가 다릅니다..');</script>";
        echo "<script>window.history.back();</script>";
        exit(0);
        }
    
     $data_stream = "'".$_POST['username']."','".$_POST['email']."','".$_POST['password']."'";
     $query = "insert into user(`username`, `email`, `password`) values (".$data_stream.")";
     $result = mysqli_query($db, $query);
    
   
    
//    if(!$db) {
//        die('MySQL connect ERROR :'.mysql_error());
//    }
//    $ret = mysqli_select_db($db, "webservice");
//    
//    if(!$ret) {
//        die('MySQL select ERROR:'.mysql_error());
//    }
    
//    $sql = "SELECT count(*) FROM user WHERE username = '".$_POST['username']."'";
//    
//    $resource = mysqli_query($db, $sql);
//    
//    $num = mysqli_fetch_array($resource);
//    
//    if($num > 0) {
//        echo "<script> alert('이미 존재하는 아이디입니다.);</script>";
//        echo "<script>window.history.back();</script>";
//        exit(0);
//    }
    

//      $sql = "SELECT count(*) FROM user WHERE username='".$_POST['username']."'";
//
//      $resource = mysqli_query($db, $sql);
//
//      $num = mysqli_num_rows($resource);
//    
//    echo "number of rows: $num";
//
////  if( $num > 0 ) {
////        echo "<script> alert('이미 존재하는 아이디입니다.);</script>";
////        echo "<script>window.history.back();</script>";
////    exit(0);
////  }
    
    if($result) {
        echo "<script> alert('회원가입이 완료되었습니다.');</script>";
        echo "<meta http-equiv='refresh'content=\"0;url='http://localhost/index.php'\">";
        exit(0);
    }else {
        die('MySQL Query ERROR:'.mysql_error());
    }
    }else
    
    
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<!--  <meta charset="UTF-8">-->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign-Up Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>

      <link rel="stylesheet" href="css/signup.css">
</head>

<body>



  <div class="wrapper">
  <form id = "my-form" action ="" method = "POST">
    <div class="form__header">
      <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 256 256" preserveAspectRatio="xMinYMin meet"><path d="M232.793 0H23.207C10.39 0 0 10.39 0 23.207v209.586C0 245.61 10.39 256 23.207 256h209.586C245.61 256 256 245.61 256 232.793V23.207C256 10.39 245.61 0 232.793 0" fill="#CCCDD1"/><path d="M85.555 80.545c8.51 0 15.639-6.67 15.639-15.412 0-8.736-7.129-15.405-15.639-15.405s-15.637 6.669-15.637 15.405c0 8.741 7.127 15.412 15.637 15.412M53.129 163.065c-.919 3.91-1.38 8.132-1.38 11.576 0 13.571 7.359 22.58 22.998 22.58 12.97 0 23.485-7.702 31.056-20.139l-4.623 18.553h25.755l14.72-59.039c3.68-14.948 10.809-22.707 21.619-22.707 8.509 0 13.798 5.292 13.798 14.028 0 2.531-.23 5.288-1.15 8.279l-7.59 27.137c-1.15 3.91-1.608 7.822-1.608 11.499 0 12.883 7.587 22.306 23.456 22.306 13.569 0 24.377-8.735 30.357-29.664l-10.118-3.906c-5.06 14.021-9.43 16.556-12.88 16.556-3.45 0-5.29-2.298-5.29-6.895 0-2.07.462-4.367 1.15-7.133l7.361-26.438c1.839-6.208 2.53-11.713 2.53-16.771 0-19.778-11.96-30.1-26.448-30.1-13.568 0-27.368 12.239-34.266 25.12l5.058-23.12H108.31l-5.52 20.364h18.399l-11.33 45.36c-8.897 19.778-25.24 20.099-27.291 19.64-3.368-.76-5.522-2.039-5.522-6.415 0-2.525.46-6.152 1.61-10.525l17.25-68.424H52.21l-5.52 20.364h18.167L53.13 163.065" fill="#323A45"/></svg>

      <div class="triangle"></div>
    </div>

   
   
    <div class="form__body">
      <p class="title">
        Get Started Absolutely
        <span>Free</span>
      </p>
      <p class="description">No Credit Card Required.</p>
      <input type="text" name="username" placeholder="username" required="" >
      <input type="email" name="email" placeholder="Email Address" required="">
      <input type="password" name="password" placeholder="Create a Password" required="">
      <input type="password" name="password2" placeholder="Confirm a Password" required="">
      <button type="submit">Sign Up Free</button>
<!--      <input type="submit" onclick="RegisterUser()" value="Sign Up Free" >-->
      <p class="disclaimer">
        By clicking "Sign Up Free" I agree to InVision's
        <span>Terms of Service</span>
      </p>
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

<?php

?>
    
    
    
