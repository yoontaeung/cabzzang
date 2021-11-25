<?php 
include 'lock.php';
 $message = $login_session." 님, 택시팟을 만들거나 이용해보세요!";
echo "<script type='text/javascript'>alert('$message');</script>";

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
  background-color: white;
}
.box {
  max-width: 100%;
  display: inline-block;
  text-align: left;
  margin-bottom: 20px;
}

 .container-fluid {
      padding: 10px 10px;
  }

 input[type=submit] {
    border: 2px solid #e6e6e6;
    background-color: gold;
    color: white;
    padding: 0 0;
    width: 150px;
    height: 30px;
  }
  input:focus {
  
  }
  p{
    font-weight: 700;
  }
  .btn {
    border: 2px solid #e6e6e6;
    background-color: gold;
    color: white;
    padding: 0 0;
    width: 150px;
    height: 30px;
  }
 .slideanim {
  padding-top: 20px;
 }

  body{
    color: #1a1a1a;
  }
  footer {
  padding: 100px 100px;
}
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
      </button>
      <a class="navbar-brand" href="index2.php" style="color: white;">CabZzang</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="main.php#">Search</a></li>
        <li><a href="index2.php#about">About</a></li>
        <li><a href="index2.php#team">Team</a></li>
        <li><a href="logout.php" style="color:#ffd700">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">
$(function() {
    $(".chzn-select").chosen();
});
</script>

<!-- First Container (Search Section) -->
<div class="container-fluid bg1 text-center">
<div class="row">
  <div class="col-sm-3">
    <div class="box">
      <form action = "go.php" method = "post" onsubmit = "return gogo();">
        <div class="form-group">
          <div class="form-inline">
           <p id = 'start'>From: </p>
           <p id = 'finish'>To: </p>
            <input type = "hidden" name = 'st' id = 'stt' value = "temp">
            <input type = "hidden" name = 'fi' id = 'fii' value = "temp">
          </div>
          <div class="form-inline">
             <label for="ti">Time</label>
             <input type = "time" id="ti" name = 'ti' step = "300">
             <br>

             <label for="co">People</label>
             <input type ="number" id="co" name = "co" value="2" min="2" max="4" >
          </div>
        </div>
        <input type = "submit" value = "Go" style="margin:auto;">
      </form>
      <form action="list.php" style="margin-left: -102px; margin-top: 10px"><input type="submit" value="Taxi List" /></form>
  </div>
  </div>

<!-- Second Container (Map Section) -->
  <div class="col-sm-9 slideanim">
    <div id="map" style="width:100%;height:350px;"></div>
  </div>
</div>
</div>
   <script src="//apis.daum.net/maps/maps3.js?apikey=eb45215aea65d9600fb372b661dbf47f"></script>
   <script>
      var mapContainer = document.getElementById('map'), // 지도를 표시할 div
          mapOption = {
              center: new daum.maps.LatLng(37.5739, 126.91007), // 지도의 중심좌표
              level: 10, // 지도의 확대 레벨
              mapTypeId : daum.maps.MapTypeId.ROADMAP, // 지도종류
                  draggable : false
          };

      // 지도를 생성한다
      var map = new daum.maps.Map(mapContainer, mapOption);
      var selectedMarker = null;
      var selectedMarker2= null;
      // 지도에 마커를 생성하고 표시한다
      var sincam = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.559965, 126.942345), // 신촌
          map: map // 마커를 표시할 지도 객체
      });
      var intcam = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.382800, 126.670977), // 국제 캠퍼스
          map: map // 마커를 표시할 지도 객체
      });
      var gangnamsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.498002, 127.027568), // 강남역
          map: map // 마커를 표시할 지도 객체
      });
      var gununi = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.540385, 127.069182), // 건대입구역
          map: map // 마커를 표시할 지도 객체
      });
      var nowonsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.656298, 127.063236), // 노원역
          map: map // 마커를 표시할 지도 객체
      });
      var boopyeongsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.489491, 126.724498), // 부평역
          map: map // 마커를 표시할 지도 객체
      });
      var sindorimsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.509443, 126.890805), // 신도림역
          map: map // 마커를 표시할 지도 객체
      });
      var anamsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.586264, 127.029027), // 안암역
          map: map // 마커를 표시할 지도 객체
      });

      var illsansta = new daum.maps.Marker({
            position: new daum.maps.LatLng(37.682146, 126.769467), // 일산역
            map: map // 마커를 표시할 지도 객체
      });
      var jamsilsta = new daum.maps.Marker({
          position: new daum.maps.LatLng(37.513304, 127.100134), // 잠실역
          map: map // 마커를 표시할 지도 객체
      });

      var iwContent = '<div style="text-align : right; padding:3px;">출발지</div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
      var infowindow = new daum.maps.InfoWindow({
          content : iwContent,
          removable : iwRemoveable
      });



      daum.maps.event.addListener(sincam, 'click', function(){
            if(selectedMarker==sincam)
            {
               alert('취소하였습니다.');
               document.getElementById('start').innerHTML = "From: "
               selectedMarker = null;
            }
            else if(selectedMarker!=sincam && selectedMarker2!=sincam)
            {
               if(selectedMarker==null)
               {
                  alert('신촌을 선택하셨습니다!');
                  document.getElementById('start').innerHTML = "From: 신촌"
                  stt.setAttribute('value', '신촌');
                  selectedMarker = sincam;
               }
               else {
                  alert('신촌을 선택하셨습니다!');
                  document.getElementById('finish').innerHTML = "To: 신촌"
            fii.setAttribute('value', '신촌');
                  selectedMarker2 = sincam;
               }
            }
            else if(selectedMarker2==sincam)
            {
               alert('취소하였습니다.');
               document.getElementById('finish').innerHTML = "To: "
               selectedMarker2=null;
            }
      });


      daum.maps.event.addListener(intcam, 'click', function() {
         if(selectedMarker==intcam)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "

            selectedMarker = null;
         }
         else if(selectedMarker!=intcam && selectedMarker2!=intcam)
         {
            if(selectedMarker==null)
            {
               alert('국제캠퍼스를 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 국제캠퍼스"
               stt.setAttribute('value', '국제캠퍼')
               selectedMarker = intcam;
            }
            else {
               alert('국제캠퍼스를 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 국제캠퍼스"
          fii.setAttribute('value', '국제캠퍼스');
               selectedMarker2 = intcam;
            }
         }
         else if(selectedMarker2==intcam)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(gangnamsta, 'click', function() {
         if(selectedMarker==gangnamsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=gangnamsta && selectedMarker2!=gangnamsta)
         {
            if(selectedMarker==null)
            {
               alert('강남역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 강남역"
          stt.setAttribute('value', '강남역');
               selectedMarker = gangnamsta;
            }
            else {
               alert('강남역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 강남역"
          fii.setAttribute('value', '강남역');
               selectedMarker2 = gangnamsta;
            }
         }
         else if(selectedMarker2==gangnamsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(gununi, 'click', function() {
         if(selectedMarker==gununi)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=gununi && selectedMarker2!=gununi)
         {
            if(selectedMarker==null)
            {
               alert('건대입구역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 건대입구역"
          stt.setAttribute('value', '건대입구역');
               selectedMarker = gununi;
            }
            else {
               alert('건대입구역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 건대입구역"
          fii.setAttribute('value', '건대입구역');
               selectedMarker2 = gununi;
            }
         }
         else if(selectedMarker2==gununi)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(nowonsta, 'click', function() {
         if(selectedMarker==nowonsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=nowonsta && selectedMarker2!=nowonsta)
         {
            if(selectedMarker==null)
            {
               alert('노원역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 노원역"
          stt.setAttribute('value', '노원역');
               selectedMarker = nowonsta;
            }
            else {
               alert('노원역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 노원역"
          fii.setAttribute('value', '노원역');
               selectedMarker2 =nowonsta;
            }
         }
         else if(selectedMarker2==nowonsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(boopyeongsta, 'click', function() {
         if(selectedMarker==boopyeongsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=boopyeongsta && selectedMarker2!=boopyeongsta)
         {
            if(selectedMarker==null)
            {
               alert('부평역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 부평역"
          stt.setAttribute('value', '부평역');
               selectedMarker = boopyeongsta;
            }
            else {
               alert('부평역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 부평역"
          fii.setAttribute('value', '부평역');
               selectedMarker2 =boopyeongsta;
            }
         }
         else if(selectedMarker2==boopyeongsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(sindorimsta, 'click', function() {
         if(selectedMarker==sindorimsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=sindorimsta && selectedMarker2!=sindorimsta)
         {
            if(selectedMarker==null)
            {
               alert('신도림역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 신도림역"
          stt.setAttribute('value', '신도림역');
               selectedMarker = sindorimsta;
            }
            else {
               alert('신도림역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 신도림역"
          fii.setAttribute('value', '신도림역');
               selectedMarker2 =sindorimsta;
            }
         }
         else if(selectedMarker2==sindorimsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(anamsta, 'click', function() {
         if(selectedMarker==anamsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=anamsta && selectedMarker2!=anamsta)
         {
            if(selectedMarker==null)
            {
               alert('안암역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 안암역"
          stt.setAttribute('value', '안암역');
               selectedMarker = anamsta;
            }
            else {
               alert('안암역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 안암역"
          fii.setAttribute('value', '안암역');
               selectedMarker2 =anamsta;
            }
         }
         else if(selectedMarker2==anamsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(illsansta, 'click', function() {
         if(selectedMarker==illsansta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=illsansta && selectedMarker2!=illsansta)
         {
            if(selectedMarker==null)
            {
               alert('일산역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 일산역"
          stt.setAttribute('value', '일산역');
               selectedMarker = illsansta;
            }
            else {
               alert('일산역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 일산역"
          fii.setAttribute('value', '일산역');
               selectedMarker2 =illsansta;
            }
         }
         else if(selectedMarker2==illsansta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });
      daum.maps.event.addListener(jamsilsta, 'click', function() {
         if(selectedMarker==jamsilsta)
         {
            alert('취소하였습니다.');
            document.getElementById('start').innerHTML = "From: "
            selectedMarker = null;
         }
         else if(selectedMarker!=jamsilsta && selectedMarker2!=jamsilsta)
         {
            if(selectedMarker==null)
            {
               alert('잠실역을 선택하셨습니다!');
               document.getElementById('start').innerHTML = "From: 잠실역"
          stt.setAttribute('value', '잠실역');
               selectedMarker = jamsilsta;
            }
            else {
               alert('잠실역을 선택하셨습니다!');
               document.getElementById('finish').innerHTML = "To: 잠실역"
          fii.setAttribute('value', '잠실역');
               selectedMarker2 =jamsilsta;
            }
         }
         else if(selectedMarker2==jamsilsta)
         {
            alert('취소하였습니다.');
            document.getElementById('finish').innerHTML = "To: "
            selectedMarker2=null;
         }
      });



      var content2 = ['신촌', '국제캠퍼스', '강남역', '건대입구역', '노원역', '부평역', '신도림역', '안암역', '일산역', '잠실역']
      // 마커에 mouseover 이벤트를 등록한다
      var infowindow2 = new daum.maps.InfoWindow({
          content : content2[0],
          removable : iwRemoveable
      });

      daum.maps.event.addListener(sincam, 'mouseover', function() {
         infowindow2.open(map, sincam);
      });
      daum.maps.event.addListener(sincam, 'mouseout', function(){
         infowindow2.close();
      });


      var infowindow3 = new daum.maps.InfoWindow({
          content : content2[1],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(intcam, 'mouseover', function() {
          infowindow3.open(map, intcam);
      });
      daum.maps.event.addListener(intcam, 'mouseout', function(){
         infowindow3.close();
      });


      var infowindow4 = new daum.maps.InfoWindow({
          content : content2[2],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(gangnamsta, 'mouseover', function() {
          infowindow4.open(map, gangnamsta);
      });
      daum.maps.event.addListener(gangnamsta, 'mouseout', function(){
         infowindow4.close();
      });

      var infowindow5= new daum.maps.InfoWindow({
          content : content2[3],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(gununi, 'mouseover', function() {
          infowindow5.open(map, gununi);
      });
      daum.maps.event.addListener(gununi, 'mouseout', function(){
         infowindow5.close();
      });

      var infowindow6 = new daum.maps.InfoWindow({
          content : content2[4],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(nowonsta, 'mouseover', function() {
          infowindow6.open(map, nowonsta);
      });
      daum.maps.event.addListener(nowonsta, 'mouseout', function(){
         infowindow6.close();
      });
      var infowindow7= new daum.maps.InfoWindow({
          content : content2[5],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(boopyeongsta, 'mouseover', function() {
          infowindow7.open(map, boopyeongsta);
      });
      daum.maps.event.addListener(boopyeongsta, 'mouseout', function(){
         infowindow7.close();
      });
      var infowindow8 = new daum.maps.InfoWindow({
          content : content2[6],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(sindorimsta, 'mouseover', function() {
          infowindow8.open(map, sindorimsta);
      });
      daum.maps.event.addListener(sindorimsta, 'mouseout', function(){
         infowindow8.close();
      });
      var infowindow9 = new daum.maps.InfoWindow({
          content : content2[7],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(anamsta, 'mouseover', function() {
          infowindow9.open(map, anamsta);
      });
      daum.maps.event.addListener(anamsta, 'mouseout', function(){
         infowindow9.close();
      });
      var infowindow10 = new daum.maps.InfoWindow({
          content : content2[8],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(illsansta, 'mouseover', function() {
          infowindow10.open(map, illsansta);
      });
      daum.maps.event.addListener(illsansta, 'mouseout', function(){
         infowindow10.close();
      });
      var infowindow11 = new daum.maps.InfoWindow({
          content : content2[9],
          removable : iwRemoveable
      });
      daum.maps.event.addListener(jamsilsta, 'mouseover', function() {
          infowindow11.open(map, jamsilsta);
      });
      daum.maps.event.addListener(jamsilsta, 'mouseout', function(){
         infowindow11.close();
      });
    function gogo()
    {
      if(selectedMarker == null || selectedMarker2 == null)
      {
        alert('출발지와 도착지를 제대로 설정해주십시오');
        return false;
      }
    }
   </script>
  




<!-- Footer -->
<footer class="bg4 text-center">
  <p>Copyright &copy;CabZzang</p> 
</footer>

</body>
</html>