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
  <link rel="shortcut icon " type="image/png" href="img/test3.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
    .jumbotron{
    padding-top: 0px;
    }
     .navbar{
  background-color:#0033cc;
}
  </style>
    <script>
       window.load=$( document ).ready(function() {
  
   $.ajax({
                type:'POST',
                url:'countryAjaxData6.php',
                success:function(html){
                    $('#country').html(html);
                
                                      }
                   }); 
           
            });  
          
          
           $( document ).ready(function() {
             
             $('#country').on('change',function(){//change function on country to display all state 
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                                      }
                   }); 
                      }else{
                           $('#state').html('<option value="">Select Your Subject</option>');
                           $('#city').html('<option value="">Select Your Subject</option>'); 
                           }
    });
    
    $('#state').on('change',function(){//change state to display all city
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                                      }
                   }); 
                    }else{
                          $('#city').html('<option value="">Select state first</option>'); 
                         }
    });
  
  });
   
           </script>
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
        <li class="active"><a href="book.php">Select Computer Lab</a></li>
        <li><a href="labs.php">Labs</a></li>
        <li><a href="accout.php">Account</a></li>
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
         
         $id=$_POST['id'];
         $lab=$_POST['country'];
         $subject=$_POST['state'];
          
    $ative = mysqli_query($connect,"SELECT active FROM computer_lab_5 WHERE `Day`='".$id."'");
     $result2 = mysqli_fetch_array($ative);
       
         if($result2['active']==0){
           //echo("You have successfuly ");
         //$id=$_POST['id'];
         //$lab=$_POST['country'];
         //$subject=$_POST['state'];

     $query="UPDATE `computer_lab_5` SET `active`=1, `country`=$lab,`state`='".$subject."' WHERE `Day`='".$id."'and `active`=0";

    $result=mysqli_query($connect,$query);
          echo '<span style="color:#0066ff; text-align: center; font-size: 20px;">You have successfuly Book!</span>';
           }else{ 

             //echo "Time already booked kindly find empty slot";
           echo '<span style="color:#ff0000; text-align: center; font-size: 20px;">Time already booked kindly find empty slot!</span>';
              }
}
 ?>                    
<form  name="myForm"  method="POST">
 
        <select name="time" onchange="location = this.value;" class="form-control" id="sel1">
        <option >Select Time</option>
        <option selected="selected" >8:30-10:30</option>
        <option value="registerlab5tim2.php">11:00-1:00</option>
        <option value="registerlab5tim3.php">2:00-4:00</option>
        <option value="registerlab5tim4.php">4:30-6:30</option>
        <option value="registerlab5tim5.php">6:30-8:30</option>
      </select>
      <br>
    <div class="form-group">

       <select name="country" id="country"   
                 data-live-search="true" class="chosen selectpicker form-control" required>
                <option value="">Select Subject</option>   
          </select>
        </br>
           <select class="selectpicker form-control" name="state" id="state"  autofocus="autofocus" required>
               <option value="">Select Suject</option>                            
          </select>
          <br>
      <select name="id"  class="form-control" id="sel1">
             <option>Select Date</option>   
		        <option >Monday</option>
		        <option>Tuesday</option>
		        <option >Wednesday</option>
		        <option >Thursday</option>
		        <option >Friday</option>
		        <option >Saturday</option>
      </select>
    <br>
     <input type="submit" name="submit" value="Book your session" class="btn  btn-primary  btn-block">
  </form>
</div>
</body>
</html>
</div>
</body>
</html>

