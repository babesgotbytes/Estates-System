<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container-fluid">
	<div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;">
		        <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px">
        <img src="logo.jpg"/>
        </div>
		<h2>StoreKeeper Registration</h2><br><br>
<form id="signup_form" method="POST" action="StoreKeeperSignup.php">
	<div class="row">
        <div class="form-group">
	<label>Name:</label><br>
	<div class="col-sm-10">
        <input class="form-control" id="exampleInputUsername" type="textfield" name="username" placeholder="name" autocomplete="off" required>
       </div>
   </div><br>
	 <div class="form-group">
	<label>Email:</label><br>
	<div class="col-sm-10">
        <input class="form-control" id="exampleInputUsername" type="textfield" name="email" placeholder="email" autocomplete="off" required>
       </div>
</div><br>
	 <div class="form-group">
		<label>Password:</label><br>
	<div class="col-sm-10">
        <input class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="password" autocomplete="off" required>
       </div>
</div>
	 <div class="form-group">
		<label>Confirm password:</label><br>
<div class="col-sm-10">
        <input class="form-control" id="exampleInputPassword" type="password" name="confirm-password" placeholder="confirm password"  autocomplete="off" required>
       </div>
</div><br><br>
	<input class="btn btn-info" type="Submit" name="submit" value ="sign Up"></br>
    </div>
</form>
</body>
</html>