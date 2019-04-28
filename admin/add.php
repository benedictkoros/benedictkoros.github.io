<?php include('server.php') ?>


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
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon " type="image/png" href="../img/test3.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
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
            <li ><a href="homeadmin.php">Home</a></li>
            <li class="active"><a href="add.php">Add User</a></li>
            <li><a href="labs.php">Manage Timetable</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="./index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
    </div>
    </nav>
     <form method="post" action="add.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Username</label>
       <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="text" name="password_1">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Add</button>
    </div>  
  </form>
  </div> 
</div>
</body>
</html>
