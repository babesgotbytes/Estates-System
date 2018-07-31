<?php
include_once 'db_Connection.php';

session_start();
$name=$_SESSION['username'];

if(!isset($_SESSION['username'])){

			header('location: StudentLoginpage.php');

	}else{ 
?>

<!DOCTYPE html>
<html>
<Head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<
	<title>Profile page</title>
<style type="text/css">
	  #body-bg
	  {
	  background-color: #efefef;
      }	
</style>
</Head>	
<body id="body-bg">
	<div class="container" style=" background-color:#fff;margin-top:20px; margin-bottom:20px; width:1200px; height:640px";>
		<?php echo $_SESSION['username'];?>
	<button class='btn btn-outline-success' style='float:right; margin-top:20px;'>Logout</button>
    </div>
    

</body>


</html>
	<?php }?>