<?php
session_start();
if(isset($_SESSION['log']))
{
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "timetable";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//Checking connection

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$lab = mysqli_real_escape_string($conn, $_POST['lab']);
$day = mysqli_real_escape_string($conn, $_POST['day']);

$sql = "INSERT INTO lab1 (FirstName, LastName, labs,Day) VALUES ('$name', '$lname', '$lab','$day')";

if($conn->query($sql) === TRUE){
	echo "Record Added Sucessfully";
	
	$_SESSION['log']=1;
	header("refresh:2;url=register.php");

}
else
{
	echo "Error" . $sql . "<br/>" . $conn->error;
	
}
$conn->close();
}
?>