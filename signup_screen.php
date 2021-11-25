<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CabZzang</title>
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
  <script src="regist_c.js"></script>
  <style>
  
/* Set backfround image for full size */

  .button {
    background-opacity: 0;
    color: black;
    padding: 5px 50px;
    border: 1.1px solid gold;
    border-radius: 40px;
    text-align: center;
    margin: 7px 2px;
    display: inline-block;
    width: 150px;
  }
  .button:hover {
    background-color: gold;
    color: white;
  }
.navbar-inverse .navbar-toggle .icon-bar {
      background-color: gold;
  }

input[type=submit], input[type=text], input[type=password] {

      width: 300px;
  }
  .bg1 { 
      background-color: #1a1a1a;
      margin-top: 60px;
      padding-top: 50px;
  }
  .bg2 {
    background-color: #1a1a1a;
  }
  input {
padding: 0 50px;  }

  </style>
</head>

<body id="CabZzang" data-spy="scroll" data-target=".navbar" data-offset="20">

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                     
      </button>
      <a class="navbar-brand" href="index.html" style="color: white;">CabZzang</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container (Search Section) -->
<div class="container-fluid bg1 text-center">
   <form name = "f" action = "signup.php" method = "POST">
    <div class="form-group">
      <input type = "text" name = "first" placeholder = "Firstname">
    </div>
    <div class="form-group">
      <input type = "text" name = "last" placeholder = "Lastname">
    </div>
    <div class="form-group">
      <input type = "text" name = "uid" placeholder = "Username">
    </div>
    <div class="form-group">
      <input type = "password" name = "pwd" placeholder = "Password">
    </div>
   </form>
   
  
</div>
<div class="container-fluid bg2 text-center">
 
   <td colspan=2 align=center>
   <A HREF="javascript:sendIt()">[회원가입 하기]</A>&nbsp;&nbsp;
   <A HREF="javascript:document.f.reset()">[취소]</A>&nbsp;&nbsp;
   <a href="index.html">[홈 화면]</a>
   </td>
</div>

<!-- Footer -->
<footer class="bg4 text-center">
  <p>Copyright &copy;CabZzang</p> 
</footer>

</body>
</html>