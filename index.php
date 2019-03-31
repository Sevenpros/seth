<?php 
session_start();
if (isset($_SESSION["uid"])) {
  header("location:profile.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>lenima hotel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php require "header1.php"; ?>
  
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <div style="height: 500px;overflow: scroll;position: fixed;left:0;right: 75%;">
            <div class="row">
              <div class="panel panel-default">
                <div class="panel-heading" style=" Coppler Plate Gothic Bold;">
                       <p style="font-family: Matura MT Script Capitals; font-size: 1.5em;color:#80bdff;">Campus Fast food</p>
                </div>
                <div class="panel-body">
                <div class="well">
         
                <h3 style="font-family: Matura MT Script Capitals; font-size: 1.5em;color:#80bdff;">Offered promotion</h3>
                <div style="font-family: Coppler Plate Gothic Bold;font-size: 1em;">
                    <table class="table">
                   <tr>
                <th>Product</th>
                <th>Percent</th>
              </tr> 
              <tr>
                <td>chicken meat</td>
                <td>7% reduced</td>
              </tr>
              <tr>
                <td>Italian Food</td>
                <td>24% reduced</td>
              </tr>
              <tr>
                <td>rwanda coffee</td>
                <td>10% reduced</td>
              </tr>
               <tr><td><a href="">View Details</a></td>
            </table>
                </div>
           
                </div> 
          <div class="well">
             <h3 style="font-family: Matura MT Script Capitals; font-size: 1.5em;color:#80bdff;">Most Popular Products</h3>
          <div style="font-family: Coppler Plate Gothic Bold;font-size: 1em;">
            <table class="table">
              <tr>
                <th>Product</th>
                <th>frequency</th>
              </tr>
              <tr>
                <td>Cappucino Coffee</td>
                <td>3.5/5</td>
              </tr>
              <tr>
                <td>Black Tea</td>
                <td>3.3/5</td>
              </tr>
               <tr><td><a href="">View Details</a></td>
            </table>
          </div>
          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:300px;'><div id='gmap_canvas' style='height:250px;width:300px;'></div><div><small><a href="embedgooglemaps.com/">https://embedgooglemaps.com/en/</a></small></div><div><small><a href=""></a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-1.9705786,30.10442880000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-1.9705786,30.10442880000005)});infowindow = new google.maps.InfoWindow({content:'<strong>Unilak Location</strong><br>Kigali, Rwanda<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
                </div>
                <div class="panel-footer">
                    
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-6">
        <div ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <img src="images/food2.jpg" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>5M $</h3>
            <p>Five Million Dollars.</p>
          </div>      
        </div>

        <div class="item">
          <img src="images/img2.jpg" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>800K $</h3>
            <p>Ferrary</p>
          </div>      
        </div>
        <div class="item">
          <img src="images/food1.jpg" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
        <div class="item">
          <img src="images/imge4.png" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
        <div class="item">
          <img src="images/img5.jpg" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
         <div class="item">
          <img src="images/img2.jpg" alt="Image" class="img-rounded" style="width: 100%;height: 400px;">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
        <div class="col-md-4">
        <h3 style="font-family: Matura MT Script Capitals; font-size: 2em;color:#80bdff;">Best Buyers Award</h3>
        <p style="font-family: Papyrus; font-size: 1em;padding: 1.5%; color: #800000"><b style="font-size: 2em">W</b>e
          Offer you the easy way to enroll your self to any desired course so that you can get notification Once the course is settled to timetable.
          You can Enroll your self Right Now Right <a href="enrollment.php"><b>Here</b></a> .


        </p>    
        </div>
        <div class="col-md-4">
        <h3 style="font-family: Matura MT Script Capitals; font-size: 2em;color:#80bdff;">Any Time Any Where</h3>
        <p style="font-family: Papyrus; font-size: 1em;padding: 1.5%; color: #800000"><b style="font-size: 2em">T</b>imetable
         Is easily accessed and navigated, you can search any class or any course you want.
          Click <a href="timetabling.php"><b>Here</b></a>To view current Timetable .


        </p>    
        </div>
        <div class="col-md-4">
        <h3 style="font-family: Matura MT Script Capitals; font-size: 2em;color:#80bdff;">Fast Service</h3>
        <p style="font-family: Papyrus; font-size: 1em;padding: 1.5%; color: #800000"><b style="font-size: 2em">Q</b>uick
        View any updated announcement from different department About upcoming events.  


        </p>    
        </div>
    </div>
   
   
    </div>
        </div>
        <div class="col-md-3">
             <div class="well">
                <h3 style="font-family: Coppler Plate Gothic Bold;font-size: 1.5em;">New Products</h3>
                <div style="font-family: Coppler Plate Gothic Bold;font-size: 1em;">
                    <table class="table">
                    
                        <tr>
                            <td>Banana split</td>
                            
                        </tr>
                         <tr>
                            <td><img src="images/food8.jpg" class="img-responsive"></td>
                        </tr>
                         <tr>
                            <td>Fajitas</td>
                            
                        </tr>
                        <tr>
                            <td><img src="images/food3.jpg" class="img-responsive"></td>
                        </tr>
                         <tr>
                            <td>sourdough bread</td>
                            
                        </tr>
                        <tr>
                            <td><img src="images/food7.jpg" class="img-responsive"></td>
                        </tr>
                    </table>
                </div>
                </div>
        </div>
    </div>
</div>
<footer class="container-fluid">
  <center><p>SevenPros &copy; 2015-<?php echo date("Y");?></p></center>
</footer>


</body>
</html>