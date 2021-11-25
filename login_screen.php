<?php
  session_start();
?>
<!DOCTPYE html>
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
    width: 50px;
    height: 50px;
  }
  input:focus {
  
  }

  input[type=submit], input[type=text], input[type=password] {

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
      <a class="navbar-brand" href="index2.html" style="color: white;">CabZzang</a>
    </div>
  </div>
</nav>


<div class="container-fluid bg1 text-center">
  <form action = "login.php" method = "POST">
    <div class="box">
      <div class="form-group">
        <input type = "text" name = "uid" placeholder = "Username">
      </div>
      <div class="form-group">
       <input type = "password" name = "pwd" placeholder = "Password">
      </div>
    </div>
    <button type = "submit">Login</button>
  </form>
  
  
  </div>

  <!-- Footer -->
<footer class="bg4 text-center">
  <p>Copyright &copy;CabZzang</p> 
</footer>

</body>
</html>