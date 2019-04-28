<?php 
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "timetable";

		$connect=mysqli_connect($hostname,$username,$password,$databaseName);
         
         $id=$_POST['id'];
         $lab=$_POST['country'];
         $subject=$_POST['state'];

		$query="UPDATE `country_state_city_save` SET `country`=$lab,`state`='".$subject."' WHERE `Day`='".$id."'";

		$result=mysqli_query($connect,$query);

		if($result){
			echo("Data Updated");
			
		}else{
			echo "no update";
		}
	
?>               