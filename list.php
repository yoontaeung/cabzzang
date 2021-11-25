<?php
session_start();
include 'db.php';


$sqli = "SELECT id, start, end, time, count FROM room";
$resulti = mysqli_query($conn, $sqli);


  echo "<!-- Navbar -->
<nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='index2.php' style='color: white;'>CabZzang</a>
    </div>
  </div>
</nav>";

echo "<body style = 'background-color:#1a1a1a'></body>";

echo "<h2>방 목록이 아래와 같이 있습니다. </h2>";
$list_num = 1;

  if (mysqli_num_rows($resulti) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($resulti)) {
         echo '<p><a href = w/00'. $list_num.'/index.php>'.$list_num. " 출발지: " . $row["start"]. ", 도착지: " . $row["end"].", 시간: " . $row["time"].", 최대 동승자 수 : " . $row["count"]. "<br>".'</a></p>';
          $list_num++;
          
      }
  } else {
      echo "만들어진 방이 없습니다. 새로운 택시팟을 구성해보세요!";
  }
  echo"<h4><a href = 'index2.php'>[홈 화면]</a></h4>";
  mysqli_close($conn);
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Search</title>
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
}
.box {
  max-width: 100%;
}

 .container-fluid {
      padding: 10px 10px;
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

  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  </style>
  </head>
  <body id="CabZzang" data-spy="scroll" data-target=".navbar" data-offset="20" >



<div class="container-fluid bg1 text-center">
 
  
  </div>

  <!-- Footer -->
<footer class="container-fluid bg4 text-center">
  <p>Copyright &copy;CabZzang</p> 
</footer>
</body>
</html>