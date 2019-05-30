<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 
//include "../db.php";

$sql =  mysqli_query($mysqli, "update user set email='".$_POST['email']."',password='".$_POST['password']."' where username='".$_SESSION['username']."'");

//echo "<script>alert('정보변경이 완료되었습니다'); history.back();</script>";

?>

<script>
    alert("정보변경이 완료되었습니다.");
    location.href = "../index_login.php";
</script>
