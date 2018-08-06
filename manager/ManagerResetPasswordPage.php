<?php 
include_once 'ManagerLogin.php';
if (!isset($_SESSION['username'])) {
   header("Location:ManagerLoginpage.php?msg=please login first");

}else
    {
	?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container">
   <div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;">
              <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px">
        <img src="logo.jpg"/>
        </div>
      <h2>Manager Reset Password</h2><br><br>
 <form method="POST" action="ManagerReset_password.php">
   <div class="row">
        <div class="form-group">
          <label>Username:</label><br>
          <div class="col-sm-10">
         <input class="form-control" id="exampleInputUsername" type="textfield" name="username" readonly value="<?php echo  $_SESSION['username']?>">
    
       </div>
   </div><br>
        <div class="form-group">
          <label>Email:</label><br>
          <div class="col-sm-10">
         <input class="form-control" id="exampleInputUsername" type="textfield" name="email" readonly value="<?php echo  $_SESSION['email']?>">
    
       </div>
   </div><br>
    <div class="form-group">
   <label> Enter Initial password:</label><br>
   <div class="col-sm-10">
        <input class="form-control" id="exampleInputPassword" type="password" name="initial_pass" placeholder="initial password" required>
       </div>
</div><br>
    <div class="form-group">
      <label>Enter new password</label><br>
   <div class="col-sm-10">
        <input class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="new password" required>
       </div>
</div>
    <div class="form-group">
      <label>Re-enter new password:</label><br>
<div class="col-sm-10">
        <input class="form-control" id="exampleInputPassword" type="password" name="con_pass" placeholder="confirm password" required>
       </div>
</div><br><br>
   <input class="btn btn-info" type="Submit" name="update" value ="Reset"></br>
   </div>
</form>
</body>
</html>

        <?php
    }


?>