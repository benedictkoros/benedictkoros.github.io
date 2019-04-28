<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon " type="image/png" href="img/test3.png">
</head>
<body>



<?php
	$uname=$_POST['username'];
	$password=$_POST['password'];
session_start();

$con=mysqli_connect("localhost","root","","timetable");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login` WHERE `User`='$uname' && `Pass`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{


include 'accepted.php';

	$_SESSION['log']=1;
	header("refresh:2;url=home.php");

}
else
{
	include 'wrong.php';
	header("refresh:2;url=index2.php");// it takes 2 sec to go index page
}

?>

