<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Day - HTML Bootstrap Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
.slider{
	margin-top: 500px;
	margin-bottom: 20px;
} 
.jumbotron{

	margin: 90px 180px 0px 180px;


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
							<li role="presentation"><a href="registration.php">Register</a></li>
							<li role="presentation"><a href="Admin.php">Admin</a></li>					
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
    <div class="container">
    <div class="jumbotron jumbotron-fixed" >
    <form id="form" method="post" action="welcome.php">
	    <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      <input id="email" type="text" class="form-control" name="username" placeholder="First Name">
        </div>
         </br>
        <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      <input id="email" type="text" class="form-control" name="username" placeholder="Last Name">
        </div>
       </br>
         <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        </br>
          <input type="submit" class="btn btn-primary btn-block" value="login" name="login" class="btn-login"/>
	</form> 
	</div> 
</div>
  </body>
</html>
<?php
session_destroy();
?>