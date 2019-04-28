<?php include('server.php') ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>kimc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
	<link rel="shortcut icon " type="image/png" href="img/test3.png">
<style >
	.button {
    background-color: #0000ff;
    border: none;
    color: white;
    height: 70px;
    width: 190px;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {
    background-color: #ffffff;
    border: none;
    color: #000000;
    height: 70px;
    width: 190px;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
  </head>
  <body>

<header id="header">
        <nav class="navbar navbar-fixed-top navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="index.html"><h1>KIMC</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="index2.php">Login</a></li>
							
							<li role="presentation"><a href="./admin/login.php">Admin</a></li>					
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	



	<header id="header">
       	
    </header><!--/header-->	
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/2.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Clean & Modern Timetable</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>Kenya Institute of Mass Communication</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										  <a href="index2.php"  type="livedemo" name="purchase" class="button">Login</a>


									</div>
									<div class="form-group">
										<a href="index2.php"  type="livedemo" name="purchase" class="button2">Login</a>


                                      

									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="img/2.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Fully Responsive</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>Kenya Institute of Mass Communication</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										  <a href="index2.php"  type="livedemo" name="purchase" class="button">Login</a>

									</div>
									<div class="form-group">
										<a href="index2.php"  type="livedemo" name="purchase" class="button2">Login</a>

									</div>
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/2.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>Modern Design</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>Error free timetable just by single click of a button</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										 <a href="index2.php"  type="livedemo" name="purchase" class="button">Login</a>

									</div>
									<div class="form-group">
										<a href="index2.php"  type="livedemo" name="purchase" class="button2">Login</a>
									</div>
								</form>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->

	<footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>About Us</h4>
				<p>Kenya Institute of Mass Communication.</p>						
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>  P.O. Box 42422 – 00100 Uholo Road, Off Mombasa Road Nairobi Kenya </li>
						<li><i class="fa fa-phone fa"></i> +254 20 554566</li>
						<li><i class="fa fa-envelope fa"></i> http://www.kimc.ac.ke</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
				<div class="text-center">
					<h4>Developers</h4>
					<ul class="sidebar-gallery">
						<p>The system was developed by PDTPS cohort III</p>	
						
							<li>Benedict Koros</li>
							<li>Antony Murimi</li>
							<li>Benedict Munyaka</li>
									
					</ul>
				</div>
			</div>	
		</div>	
	</footer>
	

	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>											      
	 </div>
	</div>
  </body>
</html>
<?php
session_destroy();
?>