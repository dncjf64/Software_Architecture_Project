<?php
//include "../db.php";
//     session_start();
//  
//  $db = new mysqli("localhost","root","rladncjf1!","webservice");
//  $db->set_charset("utf8");
//
//  function mq($sql){
//    global $db;
//    return $db->query($sql);
//  }

session_start();
header("Content-Type: text/html;charset=UTF-8");
$mysqli=mysqli_connect("localhost","root","rladncjf1!","webservice"); 

	session_destroy();
?>
<meta charset="utf-8">

<script>
    alert("로그아웃되었습니다.");
    location.href = "../index.php";
</script>