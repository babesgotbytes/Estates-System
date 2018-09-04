
<?php
include 'db_Connection.php';
session_start();

if(!isset($_SESSION['username'])){

    header('location: StoreKeeperLoginpage.php');

}else{

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 	<title>Used materials Page</title>
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
 
    
 
    </div>
   	<div class="nav" style="font-family: Serif;font-size: 18px;">
      <ul>
   		<li><a href="StoreKeeperLogout.php">Log out</a></li>
      <li><a href="StoreResetPasswordPage.php">Reset password</a></li>
      <li><a style="color: #f5c6cb" href="StoreUsedmaterialspage.php">Used materials</a></li>
      <li><a  href="StoreAssignMaterialspage.php">Assign materials</a></li>
      <li><a   href="StoreAvailableMaterialspage.php">Available materials</a></li>
      <li><a  href="StoreAddMaterialspage.php">Add materials</a></li>
      <li class="dropdown">
      <li> <a  href="notificationpage.php" >

              <span class="badge">
                  <?php
                  require_once "notification.php";
                  $not=new Notify();
                  echo ($not->notificationCount());
                  ?>
                </span>
              Notifications</>


          </li>
      <li><a href="StoreKeeperindex.php">Home</a></li>
   	</ul>
      </div>
   	</div>
  </div>

<form action="StoreUsedMaterials.php" method="GET">
  
  <div class="row" style="font-family: Serif;font-size: 18px;margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;">
   <div class="form-group">
    <h4> Please select the dates needed for material's printout</h4><br>
  <label>Date from</label><br>
  <div class="col-sm-10">
        <input class="form-control" id="exampleInputDatefrom" type="date" name="from" required>
       </div>
</div><br>
   <div class="form-group">
    <label>Date to </label><br>
  <div class="col-sm-10">
        <input class="form-control" id="exampleInputDateto" type="date" name="to" required>
       </div>
</div><br><br>
      <input class="btn" style="margin-left: 60px;background-color: #0056b3;color: white; font-family: Serif;font-size: 18px;" type="Submit" name="assign" value ="Assign">
</div>
  </form>
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</body>
	
</body>
</html>


<?php }?>


