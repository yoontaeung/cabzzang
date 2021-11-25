<?php

//include'counter.php';

  include 'lock.php';
 	
  //$message = $login_session."님의 ".$count." 번째 방문을 환영합니다";
  //echo "<script type='text/javascript'>alert('$message');</script>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
</head>

<body>
<h2>로그인을 환영합니다. <?php echo $login_session; ?> 님,</h2>
<h3><a href="logout.php">로그아웃</a></h3>
<h3><a href="index.html">홈화면으로</a></h3>
</body>

<!--DOM-->
<body>
	<div onmouseover="mOver(this)" onmouseout="mOut(this)" 
	style="background-color: royalblue ;width:100px;height:20px;padding:40px;">사이트를</div>

<script>
function mOver(obj) {
    obj.innerHTML = "마음껏 둘러보십시오";
}

function mOut(obj) {
    obj.innerHTML = "사이트를";
}
</script>

</body>

</html>
