
<?php
include 'db_Connection.php';
	session_start();

	if(!isset($_SESSION['username'])){

			header('location: StudentLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Home Page</title>
  <style>
  body{margin:0;}
  .header{
    width: 100%;
    height: auto;
    background-color: #0056b3;
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
<body>

	<h1> </h1>
	<header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 </header>
 <body>

<div id="header">
   <div id="headerContent" >
   	</div>
     <div class="navbar-header">

     <a class="navbar-brand" style="color: white" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

    </div>
   	<div class="nav">
      <ul>
   		<li><a href="StudentLogout.php">Log out</a></li>
      <li><a href="#">Make Complain</a></li>
   <li><a href="StudentResetPasswordPage.php">Reset password</a></li>
      <li><a href="../manager/WorkStatus.php">Renovations</a></li>
      <li><a href="StudentMakereport.php">Make report</a></li>
      <li class="dropdown">

         <div class="dropdown-menu"></div>

           <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown">Notifications<span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
      
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">report1</a></li>
                <li><a class="dropdown-item" href="#">report1</a></li>
                <li><a class="dropdown-item" href="#">report1</a></li>
            </ul>
      </li>
     <li><a href="Studentprofile.php">Profile</a></li>  
   	</div>
  </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</body>
</html>

<?php }?>


