<?php
	session_start();

	if(!isset($_SESSION['username'])){

			header('location: StudentLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?></h1>

	<a href="StudentResetPasswordPage.php">Reset password</a><br><br>

	<a href="StudentLogout.php">Log out</a><br><br>
    <form action="StudentLoggedIn.php" method="post">
    <input type=submit value="Delete Account" name="deleteAccount"/>
    
    </form>
</body>
</html>

<?php }?>