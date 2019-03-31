<?php 
 
 ?>
<!DOCTYPE>
<html>
<head>
  <title>testing this</title>
<script type="text/javascript" src="js/alljs.js"></script>
		   <style>
		   #topmenu {
		    background:#cc3300;}
		   #topmenu ul li {
		       
			   font-size:1.4em;
			   color:yellow;
         padding: 0 5px;
		   }
		   #topmenu ul li a{
		     color:#ffdf80;
			 }
        #topmenu ul li a:hover{
         color:yellow;
         text-decoration: underline;
       }
       #topmenu span{
        margin-right: 5px;
       }
       #topmenu ul li ul li{
          font-family: Copper plate gothic bold;
          font-size: 1.5em;
       }
       
		   </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top"style="background:white;" >
	<div id="topmenu">
    <div class="container-fluid">
    	<ul class="nav navbar-nav">
    		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Murugo</a></li>
    		<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
    		<li><a href="#">About</a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Picked<span class="badge">0</span></a>
                <div class="dropdown-menu" style="width: 400px;">
                	<div class="panel-success">
                		<div class="panel-heading">
                			<div class="row">
                				<div class="col-md-3">SI.No</div>
                				<div class="col-md-3">Product Image</div>
                				<div class="col-md-3">Product Name</div>
                				<div class="col-md-3">Price in Rwf</div>
                			</div>
                		</div>
                		<div class="panel-body">
                			
                		</div>
                		<div class="panel-footer"></div>
                	</div>
                </div>
    		</li>
    		  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                  <ul class="dropdown-menu">
                      <div style="width: 300px;">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Login</div>
                          <div class="panel-heading">
                          <div id="loginmsg"></div>
                          <form>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="emails" class="form-control" required>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="passwords" class="form-control" required><br>
                            <input type="submit" name="login" class="btn btn-success" id="loginss" value="Login" >
                            </form>
                          </div>
                          
                          <div class="panel-footer" id="e_msg"></div>
                        </div>
                      </div>
                  </ul>
        </li>
    		
    	</ul>
    </div></div>
	<div style="clear: both;"></div>
  	<div class="row" style="background: linear-gradient(to top, rgba(255, 153, 0.1), rgba(255, 255, 0.9));">
  		<div class="col-md-2">
  			<img src="images/img5.jpg" height="80px" width="80px" class="img-circle" style="margin: 3%;">
  		</div>
  		<div class="col-md-6">
  			<h1 style="font-family: ANDROID ROBOT;font-size: 3em;">Lenima Delivery System</h1>
  		</div>
  		<div class="col-md-2">
  			<input type="text" name="search" id="searching" class="form-control" style="margin: 15% 0;">
  		</div>
  		<div class="col-md-2">
  			<button class="btn btn-warning" id="momoPay" style="margin: 15% 0;">Pay</button>
  		</div>
  	</div>
</div>
<p><br><p>

   
</body>

</html>