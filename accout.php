<?php include('server.php') ?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:  index.php");
  }
?>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "timetable";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `labs`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>



<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "timetable";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `days`";

// for method 1

$result1time = mysqli_query($connect, $query);

// for method 2

$result2time = mysqli_query($connect, $query);

$optionstime = "";

while($row2time = mysqli_fetch_array($result2))
{
    $optionstime = $optionstime."<option>$row2time[1]</option>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="shortcut icon " type="image/png" href="img/test.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style >
    .jumbotron{
    padding-top: 0px;
    margin-top: 0px;

    }
   .slider{
     position: relative; 
     margin-top:-20px;
   }
.navbar{
  background-color:#0033cc;
}
  </style>

</head>
<body>
<div class="container">
  
  <div class="jumbotron jumbotron-fluid" >
     <img id="logo" src="logo.png"class="img-responsive"  alt="kimc" width="1019" height="80"> 
    <nav class="navbar navbar-inverse sticky-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">School Timetable</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li ><a href="book.php">Select Computer Labs</a></li>
        <li><a href="labs.php">Labs</a></li>
        <li class="active"><a href="accout.php">Account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
</div>
</nav>
   <?php
if(isset($_POST["submit"]))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "timetable";

    $connect=mysqli_connect($hostname,$username,$password,$databaseName);
         
         $id=$_POST['oldpsw'];
         $lab=$_POST['password_1'];
        $password_2=$_POST['password_2'];
         
         $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
         $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
      
     //$query="UPDATE `users` SET `password`='".$lab."' WHERE `password`='".$id."'";
        //$lab = md5($password_1);
    $query="UPDATE `users` SET `password`='".$lab."' WHERE `password`='".$id."'";
    
    $result=mysqli_query($connect,$query);
  
    if($result && $password_1==$password_2 ){
      
      echo("Password updated");
    }else{
      echo "Password did not match";
    }

  
 }
?>     

   <form method="post" >

    <div class="input-group">
      <label>Current Password</label>
       <input type="text" name="oldpsw">
    </div>
    <div class="input-group">
      <label>New Password</label>
      <input type="text" name="password_1">
    </div>
    <div class="input-group">
      <label>Retype New Password</label>
      <input type="text" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" name="submit" class="btn" name="user_up">Change</button>
    </div>  
  </form>  
  </div>
   
</div>

</body>
</html>
