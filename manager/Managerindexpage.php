<?php
	session_start();

	if(!isset($_SESSION['username'])){

			header('location: ManagerLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/manager.css">
	<title>Manager's Page</title>
</head>
<body>
  <header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 	<meta name="viewport" content="width=device-width initial-scale=1">
 
  
    <div style="float: left; padding:20px 20px 0 30px;font-size: 40px; color:#cccccc;">
      Welcome <?php echo $_SESSION['username'];?>
    </div>
    <nav>
        <a href="#" id="menu-icon"></a>
        <ul style="">
            <li><a href="Project.php" style="color: #cccccc; font-size: 25px;">View reports</a></li>
            <li><a href="About.php" style="color: #cccccc;font-size: 25px;">Renovations</li>
<<<<<<< HEAD
            <li style="color: #cccccc;"><a href="StoreKeeperSignupPage.php" style="color: #cccccc;font-size: 25px;">SignUp Storekeeper</a></li>
=======
            <li style="color: #cccccc;"><a href="../Storekeeper/StoreKeeperSignupPage.php" style="color: #cccccc;font-size: 25px;">SignUp Storekeeper</a></li>
             <li><a href="EmployeePage.php" style="color: #cccccc;font-size: 25px;">Assign work</li>

>>>>>>> b06b0df3e6476a671d18b245dda908e84238b420
            <li style="color: #cccccc;"><a href="ManagerLogout.php" style="color: #cccccc;font-size: 25px;">logout</a></li>
             </ul>
    </nav>

</header>
 <body>
 	
</body>
</html>

<?php }?>

 
