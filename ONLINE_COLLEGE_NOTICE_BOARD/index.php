<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top mb-5" style="background:#000">
  <div class="container">
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong class="text-light">Online Notice Board</strong></a></li>
	<li><a href="#"><span class="glyphicon glyphicon-home text-light">Home</span></a></li>
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user text-light"> About</span></a></li>
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone text-light">Contact</span></a></li>
	</ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user text-light"> Sign Up</span></a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in text-light"> Login</span></a></li>
    </ul>
</div>
</nav>

<div class="container-fluid mt-5">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/image1.jpg" alt="...">
      <div class="carousel-caption">
       
      </div>
    </div>
	 <div class="item">
      <img src="images/image3.jpg" alt="...">
      <div class="carousel-caption">
       
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2><b>WELCOME TO OUR ONLINE NOTICE BOARD</b></h2>
		<i> <b> Kindly login to check notices. Register to create an account</b></i>";
		}
		?>



		</div>
	<!-- container -->

		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>LATEST NEWS</b></div>
  <div class="panel-body">
    <ui><h4>Online Notice Board </h4></ui>
	<li><b>Exam Notifications</b></li>
	<li><b>Scholarship details</b></li>
	<li><b>Exam results</b></li>
	<li><b>Fee Details</b></li>
	<li><b>Exam Notifications</b></li>
  </div>
</div>

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>


<!-- footer-->

	</body>
</html>
