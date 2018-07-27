<?php
	session_start();

	if(!isset($_SESSION['username'])){

			header('location: StudentLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?></h1>
	<header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 	<meta name="viewport" content="width=device-width initial-scale=1">
 	<div id="brand"> Estate department university portal</div>
 </header>
 <body>
 	<input type="checkbox" id="menuToggle">
 	<label for="menuToggle" class="menu-icon">&#9776</label>

<div id="profile">
   <div id="header">
   	</div>
   	<nav class="menu">
      <ul>
   		<li><a href="#">Profile</a></li>
   		<li><a href="#">Make report</a></li>
   		<li><a href="#">Renovations</a></li>
   		<li><a href="#">Make Complain</a></li>
   		<li><a href="StudentLogout.php">Log out</a></li>
   	</ul>
</nav>
   	</div>
</div>
</body>

	<a href="StudentResetPasswordPage.php">Reset password</a><br><br>
    <form action="StudentLoggedIn.php" method="post">
    <input type=submit value="Delete Account" name="deleteAccount"/>
    
    </form>
</body>
</html>

<?php }?>

 
