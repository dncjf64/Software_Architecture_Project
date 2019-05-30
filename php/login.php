<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 

$id='';
$pw='';
if(isset($_POST['username'])) {
    $id = $_POST['username'];
}
if(isset($_POST['password'])) {
    $pw = $_POST['password'];
}


$check="SELECT * FROM user WHERE username='$id'";
$result=$mysqli->query($check);

  if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['password']==$pw){
                        $_SESSION['username']=$id;
                        if(isset($_SESSION['username'])){
                        ?>
<script>
    alert("로그인 되었습니다.");
    location.replace("../index_login.php");
</script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
                else {
        ?>
<script>
    alert("아이디 혹은 비밀번호가 잘못되었습니다.");
    history.back();
</script>
<?php
                }
        }
                else{
?>
<script>
    alert("아이디 혹은 비밀번호가 잘못되었습니다.");
    history.back();
</script>
<?php
        }
?>