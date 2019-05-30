<meta charset="utf-8" />
<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 

$userid = $_POST['username'];
//$email = $_POST['email'];

if($userid == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{
	
$sql =  mysqli_query($mysqli, "select * from user where username='".$_POST['username']."'");
$result =mysqli_fetch_array($sql);
    
if($result["username"] == $userid){
	echo "<script>alert('회원님의 비밀번호는 ".$result['password']."입니다.'); history.back();</script>";


}else{
	echo "<script>alert('아이디를 잘못 입력하셨습니다.'); history.back();</script>";

}
}
?>