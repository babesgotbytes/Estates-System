<?php
	session_start();

	if(!isset($_SESSION['username'])){

		header('location: StoreKeeperLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 
	<title>Home Page</title>
  <style>
  body{margin:0;
      background-color:#f6f6f6;
  }
  .header{
    width: 100%;
    height: auto;
    background-color: #7285A5;
    padding-top: 24px;
  }
  .nav{
     height:40px;
     background:#111E6C;
  }
  .nav ul{
    margin: 0;
    padding: 0;
  }
  .nav ul li{ list-style: none; }
  .nav ul li a{
    text-decoration: none;
    float: left;
    display: block;
    padding-right: 98px;
      padding-top: 10px;
    color: white;
  }
  .nav ul li a:hover{color: #7EF9FF;}
  </style>
</head>
<body class="container-fluid">
	<h1> </h1>
	<header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 </header>


<div id="header">
   <div id="headerContent" >
   	</div>
     <div class="navbar-header">
 
<<<<<<< HEAD
<!--     <a class="navbar-brand" style="color:white;" href="#"> Welcome --><?php //echo $_SESSION['username'];?><!-- </a>-->
=======
<!--     <a class="navbar-brand" href="#"> Welcome --><?php //echo $_SESSION['username'];?><!-- </a>-->
>>>>>>> 1bef0c72aa9667b0443a80e741124273e6ef1225
 
    </div>
   	<div class="nav" style="font-family: Serif;font-size: 18px;">
      <ul>
<<<<<<< HEAD
   		<li><a href="StoreKeeperLogout.php">Log out</a></li>
      <li><a href="StoreResetPasswordPage.php">Reset password</a></li>
      <li><a href="StoreUsedmaterialspage.php">Used materials</a></li>
          <li><a  href="StoreAssignMaterialspage.php">Assign materials</a></li>
          <li><a   href="StoreAvailableMaterialspage.php">Available materials</a></li>
      <li><a href="StoreAddMaterialspage.php">Add materials</a></li
          <li class="dropdown">
          <li> <a  href="notificationpage.php" >Notifications</a>
=======
          <li><a style="color: #f5c6cb;" href="StoreKeeperindex.php">Home</a></li>

          <li> <a  href="notificationpage.php" >

                  <span class="badge">
                  <?php
                  require_once "notification.php";
                  $not=new Notify();
                  echo ($not->notificationCount());
                  ?>
                </span>
                     Notifications</a>
>>>>>>> 1bef0c72aa9667b0443a80e741124273e6ef1225


          </li>
          <li><a href="StoreAddMaterialspage.php">add materials</a></li>
          <li><a  href="StoreAssignMaterialspage.php">assign materials</a></li>
          <li><a href="StoreUsedmaterialspage.php">used materials</a></li>
          <li><a href="StoreResetPasswordPage.php">reset password</a></li>
          <li><a href="StoreKeeperLogout.php">Log out</a></li>

 

   	</ul>
      </div>
   	</div>


  

</body>

	

</html>

<?php }?>

 



