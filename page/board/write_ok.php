<?php
//include "../../db.php";

session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 

$date = date('Y-m-d');
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "../../upload/".$filename;
move_uploaded_file($tmpfile,$folder);

//$sql = mysqli_query($mysqli, "insert into board(null, name,pw,title,content,date,lock_post,file) values('".$_POST['name']."','".$_POST['pw']."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."','".$o_name."')");

$sql = "insert into board(idx, name,pw,title,content,date,lock_post,file) values(null, '".$_SESSION['username']."','".$_POST['pw']."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."','".$o_name."')";

$result = $mysqli->query($sql);

if($result){
echo "<script>alert('글쓰기 완료되었습니다.');</script>"; 
    }
else{
    echo "<script>alert('글을 등록하지 못했습니다.');</script>";
}
?>
<script>
    location.replace("../../board.php");
</script>
<!--<meta location.href="../../board.php" content="0 url=/" />-->