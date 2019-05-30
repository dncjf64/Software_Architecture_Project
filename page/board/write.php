<?php
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 
 error_reporting(E_ALL&~E_NOTICE&~E_WARNING);session_start(); 
//include "db.php";
if(isset($_SESSION['username'])){
$id='';
if(isset($_POST['username'])) {
    $id = $_POST['username'];
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div id="board_write">
        <h1><a href="../../board.php">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
<!--                        <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>-->
                  
                   <textarea name="name" id="uname" rows="1" cols="55" placeholder="<?php echo $_SESSION['username'];?>" maxlength="100" required disabled></textarea>
                   
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />  
                    </div>
                    <div id="in_lock">
                        <input type="checkbox" value="1" name="lockpost" />해당글을 잠급니다.
                    </div>
                    <div id="in_file">
                        <input type="file" value="1" name="b_file" />
                    </div>
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
