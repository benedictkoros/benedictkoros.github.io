<?php
session_start();

// initializing variables
$firstname="";
$lastname="";
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'timetable');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
 // $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
 // $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
//  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
//  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 // if (empty($firstname)) { array_push($errors, "First name is required"); }
 // if (empty($lastname)) { array_push($errors, "last name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  //if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
 // if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
 // }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { // if user exists
       if ($user['username'] === $username) {
     array_push($errors, "Username already exists");
 }

    //if ($user['email'] === $email) {
    //  array_push($errors, "Email already exists");
   // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database
   // $password = ($password_1);

  	$query = "INSERT INTO users (firstname,lastname,username, email, password) 
  			  VALUES('$firstname','$lastname','$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    echo "User added";
  	header('location: add.php');
    echo "User added";
  }
}

if (isset($_POST['user_up'])) {
     $username = mysqli_real_escape_string($db, $_POST['username']);
     $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($password_2)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
      }
       if (count($errors) == 0) {
        $query = "INSERT INTO users (username) 
          VALUES('$username')";
          mysqli_query($db, $query);
       }
}
// ... 
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password =$password;
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: acceptedadm.php');
    }else {
      array_push($errors, "Wrong username/password combination");
     
    }
  }
}

?>