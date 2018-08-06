<?php
include_once 'db_Connection.php';
include_once 'Studentindex.php';

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
		<?php echo $name;?>
	<button class='btn btn-outline-success' style='float:right; margin-top:20px;'>Logout</button>
    
    <br><br><br><br>

    <label for="Category-select">Choose a Category:</label>

<select id="Category-select">
    <option value="">--Please choose--</option>
    <option value="hostel">Hostel</option>
    <option value="lecture-hall">Lecture Hall</option>
    <option value="office">Offices</option>
    <option value="games-sector">Games Sesctor</option>
    <option value="anycategory">Any Other</option>
  
</select><br><br>
<label for="Category-select">Choose a Type:</label>

<select id="Type-select">
    <option value="">--Please choose--</option>
    <option value="building">Building</option>
    <option value="tap">Tap</option>
    <option value="pipe">Pipe</option>
    <option value="washroom">WashRoom</option>
    <option value="bulb">Bulb</option>
    <option value="anytype">Any Other</option>
  
</select><br><br>

<label for="Category-select">Choose the Kind of Damage:</label>

<select id="Damage-select">
    <option value="">--Please choose--</option>
    <option value="broken">Broken</option>
    <option value="stolen">Stolen</option>
    <option value="blocked">Blocked</option>
    <option value="burnt">Burnt</option>
    <option value="licking">Licking</option>
    <option value="anydamge">Any Other</option>
  
</select><br><br>

<input type="submit" name="submit" value="Submit">



</div>
</body>


</html>
	<?php }?>