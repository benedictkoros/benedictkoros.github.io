<?php include('serveradmin.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon " type="image/png" href="../img/test3.png">
</head>
<body>
  <div class="header">
  	<h2>Adm Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); 
   
    ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>
</body>
</html>

