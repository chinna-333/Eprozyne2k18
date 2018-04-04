<!DOCTYPE html>
<html>
<head>
	<title>Question 2</title>
	<style type="text/css">
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			background-image: url("backimg.jpeg");
		}
		#container{
			margin-top: 80px;
			width: 90%;
		}
		#ques{
			margin-bottom: 30px;
			color: white;
			border:dashed #333;
			padding:7px;
			background-color: rgba(0,0,0,0.2);
			font-size: 25px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		#question{
			font-size: 50px;
			color: white;
		}
		#tab{
			margin-left: 40px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-xl">
	  <div class="container-fluid">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="../index.html"><div class="brandlogo"><div class='navbar-brand' id='brandtext'>Eprozyne</div></div></a>
	    </div>
	    <div>
	      <div class="collapse navbar-collapse" id="myNavbar">
	        <ul class="nav navbar-nav navbar-right center">
	          <li><a href="https://eprozyne2k18.in">Home</a></li>
	          <li><a href="https://eprozyne2k18.in#section2">Events</a></li>
	          <li><a href="https://eprozyne2k18.in#section3">About</a></li>
	          <li><a href="https://eprozyne2k18.in#section4">Contact</a></li>
	          <li><a href="https://eprozyne2k18.in/eprozyne/portal">Register</a></li>
          	  <li><a href="https://eprozyne2k18.in/eprozyne/portal/login_view">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>
	<div id="container">
		<center><img src="trh33k.png" class="img-responsive"></center>
		<center id="question">Question 2</center>
		<div id="ques">
				calculate  2*(maximum value of 32bit integer).<div>Enter number only, without commas.</div>
		</div>
		<form class="form-horizontal" action="/action_page.php">
		  <div class="form-group">
		    <label class="control-label col-sm-2" style="color: white;">Enter Answer</label>
		    <div class="col-sm-8">
		      <input type="textarea" class="form-control" id="ans" placeholder="Enter Answer">
		    </div>
		  </div>
		  <center>
		  <div class="form-group"> 
		    <div class="col-sm-12">
		      <button type="submit" class="btn btn-default">Submit</button>
		    </div>
		  </div>
		  </center>
		</form>
	</div>
</body>
</html>