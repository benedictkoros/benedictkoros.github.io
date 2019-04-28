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
  <title>Kenya Institute of Mass Communication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">


  	.jumbotron{
  		padding: 0px;

  	}
      #logo{
      	padding:0px;
      	border:0px;
    }
      #we{
    	text-align: center;
    	color: #0000ff;
    }
    .me{
    	text-align: center;
    }
   #log{
  margin:290px 90px 0px 0px;
  
   }
   #select{
     width:70;
     padding: auto;
    
   }
   #tab{
    padding-bottom:60px;
    padding-top:0px;
    margin-top: 0;
    

   }
  </style>
</head>
<script type="text/javascript">//alert("sdfsd");</script>
<body>
<div class="container">
	  <div class="jumbotron jumbotron-fluid" >
	  
	     <img id="logo" src="logo.png" class="img-fluid"  alt="kimc" width="1110" height="1000"> 
	     <!-- Nav tabs -->

  <ul class="nav  bg-light justify-content-center  bg-dark  sticky-top" role="tablist" fixed-top>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#home">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Register<span class="sr-only">(current)</span></a>

    </li>
    <li class="nav-item">
     <a class="nav-link" data-toggle="tab" href="#menu2">View<span class="sr-only">(current)</span></a>
    </li>
    
     
    
     
 
  </ul>
  </div>

 

  <!-- Tab panes -->
  <div class="tab-content" id="tab">
    <div id="home" class="container tab-pane active"><br>
      <h3 class="me">Welcome to KIMC timetable generating system</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3 id="we">Unit Registration</h3>
      <form id="form" action="/action_page.php">
    <div class="form-group">
      <label for="email">Select Your Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Your Name" name="fname">



      
    </div>
    <div class="form-group">
      <label for="pwd">Computer Lab:</label></br>
       <div class="row">
       <div class="col-sm-12" >
      <select   name="lab" class="custom-select mb-3">
           
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>
        </select>  
         </div>
        </div>
    </div>
    <div class="form-group">
      <label for="pwd">Day:</label>
</br>

      <div class="row">
       <div class="col-sm-12" >
       <select  name="day" class="custom-select mb-3">
           
            <?php while($row1time = mysqli_fetch_array($result1time)):;?>

            <option value="<?php echo $row1time[0];?>"><?php echo $row1time[1];?></option>

            <?php endwhile;?>
        </select>  
       </div>
     </div>

    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
   <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
  <p>
    
   k
</br></br></br></br>





   k</br></br></br></br>















   k


  </p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
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
