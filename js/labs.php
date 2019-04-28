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
    padding-top:  0px;
   

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
        <li><a href="register.php">Register</a></li>
        <li class="active"><a href="labs.php">Labs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
</div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Computer Lab 1</h2>   
  <div class="table-responsive">        
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:30-10:30</th>
        <th>Break</th>
        <th>11:00-1:00</th>
        <th>Lunch</th>
        <th>2:00-4:00</th>
        <th>Break</th>
        <th>4:30-6:30</th>
        <th>6:30-8:30</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
            $sql = "SELECT * FROM computerlabs WHERE lab=1";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["1st"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
         
           else{
            echo "No booking records available";
           }

        $conn->close();
      ?>
    </tbody>
  </table>
</div>
<div class="table-responsive">
 <h2>Computer Lab 2</h2>         
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:30-10:30</th>
        <th>Break</th>
        <th>11:00-1:00</th>
        <th>Lunch</th>
        <th>2:00-4:00</th>
        <th>Break</th>
        <th>4:30-6:30</th>
        <th>6:30-8:30</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
             $sql = "SELECT * FROM lab2 WHERE lab=2";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["1st"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
         
           else{
            echo "No booking records available";
           }

        $conn->close();
      ?>
    </tbody>
  </table>
</div> 
<div class="table-responsive">
 <h2>Computer Lab 3</h2>         
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:30-10:30</th>
        <th>Break</th>
        <th>11:00-1:00</th>
        <th>Lunch</th>
        <th>2:00-4:00</th>
        <th>Break</th>
        <th>4:30-6:30</th>
        <th>6:30-8:30</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
             $sql = "SELECT * FROM lab3 WHERE lab=3";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["1st"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
         
           else{
            echo "No booking records available";
           }

        $conn->close();
      ?>
    </tbody>
  </table>
</div>
<div class="table-responsive">
 <h2>Computer Lab 4</h2>         
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:30-10:30</th>
        <th>Break</th>
        <th>11:00-1:00</th>
        <th>Lunch</th>
        <th>2:00-4:00</th>
        <th>Break</th>
        <th>4:30-6:30</th>
        <th>6:30-8:30</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
             $sql = "SELECT * FROM lab4 WHERE lab=4";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["1st"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
         
           else{
            echo "No booking records available";
           }

        $conn->close();
      ?>
    </tbody>
  </table>
</div>
<div class="table-responsive">
 <h2>Computer Lab 5</h2>         
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:30-10:30</th>
        <th>Break</th>
        <th>11:00-1:00</th>
        <th>Lunch</th>
        <th>2:00-4:00</th>
        <th>Break</th>
        <th>4:30-6:30</th>
        <th>6:30-8:30</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
             $sql = "SELECT * FROM lab5 WHERE lab=5";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["1st"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
         
           else{
            echo "No booking records available";
           }

        $conn->close();
      ?>
    </tbody>
  </table>
</div>
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