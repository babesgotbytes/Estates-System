<?php
	session_start();

	if(!isset($_SESSION['username'])){

			header('location: ManagertLoginpage.php');

	}else{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?></h1>

	<a href="ManagerResetPasswordPage.php">Reset password</a><br><br>

	<a href="ManagerLogout.php">Log out</a><br><br>
    <form action="ManagerLoggedIn.php" method="post">
    <input type=submit value="Delete Account" name="deleteAccount"/>
    
    </form>
</body>
</html>

<?php }?>