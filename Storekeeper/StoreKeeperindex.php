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
  body{margin:0;}
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
    float: right;
    display: block;
    padding: 10px 20px;
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
 <body>

<div id="header">
   <div id="headerContent" >
   	</div>
     <div class="navbar-header">
 
     <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>
 
    </div>
   	<div class="nav">
      <ul>
   		<li><a href="StoreKeeperLogout.php">Log out</a></li>
      <li><a href="StoreResetPasswordPage.php">reset password</a></li>
      <li><a href="StoreUsedmaterialspage.php">used materials</a></li>
      <li><a  href="StoreAssignMaterialspage.php">assign materials</a></li>
      <li><a href="StoreAddMaterialspage.php">add materials</a></li
          <li class="dropdown">
          <li> <a  href="notificationpage.php" >Notifications <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge">7</span></a>


          </li>
 
           <li><a style="color:blue" href="StoreKeeperindex.php">Home</a></li>
   	</ul>
      </div>
   	</div>
  </div>

  

</body>
	
</body>
</html>

<?php }?>

 



