<?php
include 'testdb.php';  //DB연결을 위한 config.php를 로딩합니다.
    session_start();   //세션의 시작

    $message = "로그인을 하고 서비스를 이용하세요";
    echo "<script type='text/javascript'>alert('$message');</script>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $myusername=$_POST['id'];
    $mypassword=$_POST['pw1'];
    $sqli="SELECT * FROM tester WHERE id = '$myusername' and pw1 = '$mypassword'";
    $result=mysqli_query($conn, $sqli);
    $row=mysqli_num_rows($result);



    // If result matched $myusername and $mypassword, table row must be 1 row
    if($row==1)  
    {
       $_SESSION['login_user']=$myusername;
        if($myusername == 'adminxX1'){
            header("location:userinfo.php");
        }else{
        header("location: index2.php");} 
    }
    else
    {
        $error="아이디나 비밀번호가 잘못되었습니다 ";
            }


}
?>
<!DOCTYPE html>
<html>
  <head>
    
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- External style sheet -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo:800i" rel="stylesheet">
  <!-- Bootstrap CDN and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Chosen -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
  <style>
  
/* Set backfround image for full size */

.navbar {
  position: relative;
}
.bg1 {
  background-color: #1a1a1a;
  padding: 100px 0;
}
.box {
  padding-bottom: 50px;
  background-color: #1a1a1a;
  text-align: center;
}

 

 input[type=submit] {
    border: 2px solid #e6e6e6;
    background-color: gold;
    color: white;
    width: 140px;
    height: 50px;
  }
  input:focus {
  
  }
input[type=text], input[type=password], input[type=date], input[type=phonenum] {
      background-color: white;
      width: 200px;
      color: black;
  }
  input[type=text], input[type=password] {
        background-color: white;
        color:black;
      width: 300px;
  }

  button {
    border: 2px solid #e6e6e6;
    border-radius: 5px;
    background-color: gold;
    color: white;
    width: 150px;
    height: 50px;
  }

  
  </style>
  </head>

<body id="CabZzang" data-spy="scroll" data-target=".navbar" data-offset="20">

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html" style="color: white;">CabZzang</a>
    </div>
  </div>
</nav>


<div class="container-fluid bg1 text-center">
    <form action= ""  method="post">
        <div class="box">
            <div class="form-group">
                <input type="text" name="id" class="box" placeholder="아이디" /><br>
            </div>
            <div class="form-group">
                <input type="password" name="pw1" class="box" placeholder="비밀번호" />
            </div>
        </div>
        <input type="submit" value="로그인"/><br/>
        <a href = "index.html">[-홈 화면-]</a>
    </form>
</div>

  <!-- Footer -->
<footer class="bg4 text-center">
  <p>Copyright &copy;CabZzang</p> 
</footer>
</body>
</html>
