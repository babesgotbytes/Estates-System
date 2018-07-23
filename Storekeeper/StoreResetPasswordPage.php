<?php 
include_once 'StoreKeeperLogin.php';
if (!isset($_SESSION['username'])) {
   header("Location:StoreKeeperLoginpage.php?msg=please login first");

}else{
	?>

   <!DOCTYPE html>
   <html>
   <head>
   	<title>Reset password</title>
   </head>
   <body>
      <h2>StoreKeeper RessetPassword</h2><br><br>
   	<form method="POST" action="StoreKeeperReset_password.php">
       <label>username</label>
         <input type="text" name="username" readonly value="<?php echo  $_SESSION['username']?>">
                <label>Email</label>
         <input type="text" name="email" readonly value="<?php echo  $_SESSION['email']?>">
   		<label>Enter innitial password</label>
   		<input type="password" name="initial_pass">
   		   		<label>Enter new password</label>
   		<input type="password" name="password">
   		   		<label>Confirm new password</label>
   		<input type="password" name="con_pass">
         <button type="submit" name="update">Reset</button>

   	</form>
   
   </body>
   </html>


	<?php
}


 ?>