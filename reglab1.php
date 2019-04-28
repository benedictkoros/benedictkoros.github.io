<?php
session_start();
if(isset($_SESSION['log']))
{
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style >
    .jumbotron{
    padding-top: 0px;
   

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
        <li class="active"><a href="book.php"Computer Labs</a></li>
        <li><a href="labs.php">Labs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
</div>
</nav>
<?php 
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "timetable";

    $connect=mysqli_connect($hostname,$username,$password,$databaseName);
         
         $id=$_POST['id'];
         $lab=$_POST['lab'];
         $subject=$_POST['subject'];

    $query="UPDATE `computerlabs` SET `lab`='".$lab."',`1st`='".$subject."' WHERE `Day`='".$id."'";

    $result=mysqli_query($connect,$query);

    if($result){
      echo("Dada Updated");
    }else{
      echo "no update";
    }
  }




?>

<form  method="POST">
     
    <div class="form-group">
      <label for="sel1">Select Your Subject:</label>
      <select name="lab"onchange="location = this.value;" class="form-control" id="sel1">
            <option  >D/NETWORKING</option>
            <option value="reglab1.php">COMPUTER STDIES</option>
            <option value="reglab1.php">EDITING</option>
            <option value="reglab1.php">DIRECTING I</option>
            <option value="reglab1.php">COMPUTER APPLICATIONS</option>
            <option value="reglab1.php">PHOTOSHOP</option>
            
            
      </select>
        <label for="sel1">Select Computer Lab:</label>
      <select name="lab" onchange="location = this.value;" class="form-control" id="sel1">
            <option  ></option>
            <option selected="selected">1</option>
            <option value="reglap2.php">2</option>
            <option value="reglap3.php">3</option>
            <option value="reglap4.php">4</option>
            <option value="reglap5.php">5</option>
            
      </select>
       <label for="sel1">Select time:</label>
        <select name="time" onchange="location = this.value;" class="form-control" id="sel1">
        <option >Select</option>
        <option value="reglab1Select1.php">8:30-10:30</option>
        <option value="reglab1Select2.php">11:00-1:00</option>
        <option value="reglab1Select3.php">2:00-4:00</option>
        <option value="reglab1Select4.php">4:30-6:30</option>
        <option value="reglab1Select5.php">6:30-8:30</option>
      </select>

      <label for="sel1">Select Day:</label>
      <select name="id"  class="form-control" id="sel1">
                
            <option >Monday</option>
            <option>Tuesday</option>
            <option >Wenesday</option>
            <option >Thursday</option>
            <option >Friday</option>
            <option >Saturday</option>


      </select>
      

      <label for="sel1">Lesson/Subject:</label>
         <input  class="form-control" id="email"  name="subject">

     
      </div>
      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Register</button>
    </form>

  <?php
//if(isset($_POST["submit"]))
//{
 
 //Including dbconfig file.
//include 'dbconfig.php';
 
//$lab=$_POST["lab"];
//$day=$_POST["day"];
//mysqli_query($connect,"INSERT INTO computerlabs (Day,lab) VALUES ('$day','$lab')"); 

//echo " Added Successfully ";

//}

 ?>

</div>
</body>
</html>
</div>
</body>
</html>
<?php
}
else
{
  echo "please fill proper details";
  header("refresh:2;url=index.php");
}

?>