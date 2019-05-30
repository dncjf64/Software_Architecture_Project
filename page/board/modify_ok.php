<?php
//	include "../../db.php";
session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 

	$bno = $_POST['idx'];
	$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

	if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}

	$sql = "update board set name='".$_SESSION['username']."',pw='".$userpw."',title='".$_POST['title']."',content='".$_POST['content']."',lock_post='".$lo_post."' where idx='".$bno."'";

$result = $mysqli->query($sql);
if($result){
echo "<script>alert('수정 되었습니다.');</script>";
    }
else {
    echo "<script>alert('수정 실패했습니다.');</script>";
}
?>

<script>
    location.replace("../../board.php");
</script>
<!--<meta http-equiv="refresh" content="0 url=/page/board/read.php?idx=<?php echo $bno; ?>">-->