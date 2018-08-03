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
  <style>
    nav a{
  display: block;
  padding: 15px 0;
  border-bottom: 1px solid #B49755;
  }
  </style>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?></h1>
	<header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 	<meta name="viewport" content="width=device-width initial-scale=1">
 	<div id="brand" size="18" > Estate department university portal</div>
 </header>
 <body>
 	<label for="menuToggle" class="menu-icon">&#9776</label>

<div id="profile">
   <div id="header" >
   	</div>
   	<nav class="menu" style=" width: 240px;height: 100%; position: absolute; background:#111E6C;">
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
	
</body>
</html>

<?php }?>

 
