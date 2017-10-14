<?php
session_start();
include '../connection/connection.php';
include '../method/class/class_users.php';
$home = "WELCOME";
$objUsers = new Contents;
$result = $objUsers->postData();

if (!isset($_SESSION['user_uname'])) {
	header('location:error.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FAN~PAGE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
   	<!-- Font awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->
    <link href="../vendor/css/grayscale.css" rel="stylesheet">
</head>
<body>
    <div class="container home-container">
    	<div class="row">
    		<nav class="navbar navbar-default">
			  <div class="container-fluid" id="nav">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Bangtan Sonyeondan</a>
			    <!-- mobile logout -->
			      <a class ="navbar-brand" id="logoutBtnmobile" href="../method/process/logout.php"><i class="fa fa-power-off"></i></a>
			    </div>
			    <!-- desktop logout -->
			    <a  id="logoutBtn" href="../method/process/logout.php">
			   	 	<button class="btn btn-danger">Logout</button>
			   	 </a>
			  </div>
			</nav>
    	</div>
    	<div class="col-md-12">
    		<div class="col-md-3 non-pad">
    			<div class="col-md-12">
    				<table class="table table-bordered">
    					<tr>
    						<td>
    							<?php
		    				echo $home." ".strtoupper($_SESSION['user_uname'])."!";
		    			?>
    						</td>
    					</tr>
    				</table>
    			</div>
	    		<div class="col-md-12">
	    			<table class="table table-bordered">
	    				<tr align="center">
	    					<td colspan="3">B     T     S</td>
	    				</tr>
	    				<tr>
	    					<td colspan="3" align="center">
	    						<span class="bts-name">Rap Monster</span>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td colspan="3">
	    						<img src="../vendor/img/gayleader.jpg" class="img-fluid">
	    					</td>
	    				</tr>
	    				<!-- IMAGE 1 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay1.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>V</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>
	    				<!-- IMAGE 2 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay2.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>Suga</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>
	    				<!-- IMAGE 3 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay3.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>J.K</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>
	    				<!-- IMAGE 4 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay4.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>Jimin</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>
	    				<!-- IMAGE 5 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay5.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>Jin</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>
	    				<!-- IMAGE 6 -->
	    				<tr>
	    					<td>
	    						<img src="../vendor/img/gay6.jpg" class="img-fluid">
	    					</td>
	    					<td colspan="2">
	    						<p>Jhope</p>
	    					</td>
	    				</tr>
	    				<tr>
	    					<td></td>
	    					<td></td>
	    					<td></td>
	    				</tr>

	    			</table>
	    		</div>
	    		<div class="col-md-12">
	    			<table class="table table-bordered">
	    				<tr>
	    					<td>ABOUT</td>
	    				</tr>
	    				<tr>
	    					<td>
	    						A comprehensive updates portal dedicated to the popular boy group named
	                BTS of Big Hit Entertainment. Sign up to follow the blog and be updated of new posts like latest articles, translations of online posts and comments related to BTS.
	    					</td>
	    				</tr>
	    			</table>
	    		</div>
    		</div>
	    	<div class="col-md-9 non-pad">
	    		<div class="col-md-12">  
					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner">
					      <div class="item active">
					        <img src="../vendor/img/car-bts1.jpg" alt="shits" style="width:100%;">
					      </div>

					      <div class="item">
					        <img src="../vendor/img/car-bts2.jpg" alt="retokada" style="width:100%;">
					      </div>
					    
					      <div class="item">
					        <img src="../vendor/img/car-bts3.jpg" alt="bayot" style="width:100%;">
					      </div>
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span>
					    </a>
			  		</div>
	    		</div>
	    		<!-- CONTENT -->
	    		<div class="col-md-12">
	    			<div class="col-md-12 nopadding">
	    				<div class="home-content">
		    				<?php 
		    					foreach ($result as $p) {
		    						$mypost = "<table class='table table-bordered table-content'>
		    								<tr>
					    						<td width='400'>
					    							<i class='fa fa-calendar'>
					    							".$p->dates."
					    						</td>
					    					</tr>
					    					<tr>
					    						<td colspan='3'>
					    							".$p->post."<br><br>
					    							<img class='img-responsive' src='../method/process/images/".$p->images."'>
					    						</td>
					    					</tr>
					    				</table>";
					    			echo $mypost;
		    					}
		    				 ?>
	    				</div>
	    			</div>
	    			<!-- <div class="col-md-3 nopadding">
	    				<div class="home-content">
		    				<table class="table table-bordered table-content">
		    					<tr>
		    						<td>
		    							RECENT NEWS
		    						</td>
		    					</tr>
		    				</table>
	    				</div>
	    			</div> -->
	    		</div>
	    	</div>
	    	<div class="col-md-12">
	    		<footer id="footer">
	    			<div class="text-center">
		                <p class="social">
			                <span><a href="btsblog.com">BLOG</a></span>
			                <span><a href="instagram.com/bangtan.official">INSTAGRAM</a></span>
			                <span><a href="twitter.com/bts_twt">TWITTER</a></span>
			                <span><a href="youtube.com/bangtantv">YOUTUBE</a></span>
			                <span><a href="facebook.com/bangtan.official">FACEBOOK</a></span>
			            </p>
       				 </div>
	    		</footer>
	    	</div>
    	</div>
    	
   </div>

</body>
</html>
<!-- SCRIPT -->
<script src="../vendor/js/jquery.carousel.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
	body{
		background-color: rgba(138, 138, 138, 0.14);
	}
</style>