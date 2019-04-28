<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
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
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon " type="image/png" href="img/test.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
    .jumbotron{
    padding-top: 0px;
    }
    h2{
      text-align: center;
      color: #ff0066;
      te
    }
    .headco{
    
    }
    .navbar{
      background-color:  #0033cc;
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
        <li class="active"><a href="book.php">Select Computer Labs</a></li>
        <li><a href="labs.php">Labs</a></li>
        <li><a href="accout.php">Account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
</div>
</nav>
   <h2 id="h2">Instructions for booking computer labs</h2> 
   <div class="alert alert-success">
We have a total of five computer labs each with different number of computers and software application as shown below. 
</div>
    


     <table class="table table-bordered">
    <thead>
      <tr>
        <th>Computer Lab</th>
        <th>Number of Computers</th>
        <th>Installed Applications/Software</th>
        <th>Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lab 1 Computer Applications</td>
        <td>20 </td>
        <td>C</td>
      </tr>
      <tr>
        <td>LAB 2 EDITING/ANIMATION</td>
        <td>Moe</td>
        <td>ANIMATION</td>
      </tr>
      <tr>
        <td>LAB 3 EDITING/INTERNET RADIO/ONLINE JOURNALISM </td>
        <td>30</td>
        <td>ONLINE JOURNALISM</td>
      </tr>
       <tr>
        <td>LAB 4 PRODUCTION EDITING SUITE</td>
        <td>30</td>
        <td>EDITING SUITE</td>
      </tr>
       <tr>
        <td>LAB 5 EDITING/GRAPHICS DESIGN</td>
        <td>40</td>
        <td>GRAPHICS DESIGN</td>
      </tr>
    </tbody>
  </table>  
  <p>Kindly read the following instruction carefully before you proceed.</p> 
  <ol>
    <li>Ensure that you book computer lab that is designed for your lessons/subject e.g. you cannot book computer lab for editing if you’re teaching graphics design. </li>
    <li>You cannot book already booked lab at the same time kindly go through the labs as shown below to find unallocated time for your booking.</li>
    <li>Selection of computer lab is based on first come first saved, which is done by system administrator.  </li>
    <li>Selection of computer lab is based on first come first saved, which is done by system administrator.  </li>
  </ol>              
<form action="saveDatabase.php" name="myForm"  method="POST">
  <select name="time" onchange="location = this.value;" class="form-control" id="sel1">
        <option>Select Computer lab</option>>
        <option value="registerlab1.php">LAB 1 COMPUTER APPLICATIONS</option>
        <option value="registerlab2.php">LAB 2 EDITING/ANIMATION</option>
        <option value="registerlab3.php">LAB 3 EDITING/INTERNET RADIO/ONLINE JOURNALISM   </option>
        <option value="registerlab4.php">LAB 4 PRODUCTION EDITING SUITE</option>
        <option value="registerlab5.php">LAB 5 EDITING/GRAPHICS DESIGN</option>
  </select>    
  </form>
  <p></p>
  <p></p>
</br></br>
</div>
</body>
</html>
