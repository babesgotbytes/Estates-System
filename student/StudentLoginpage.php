<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container">
    <div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;height: 500px; width: 400px;">
        <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px">
        <img src="logo.jpg"/>
        </div>
            <h2>Student LoginPage</h2><br>
	<form method="POST" action="StudentLogin.php">
        <div class="row">
        <div class="form-group">

        <strong>Username or email address:</strong></br>

       <div class="col-sm-10">
        <input class="form-control" id="exampleInputUsername" type="textfield" name="username" placeholder="Jane Doe or jane@gmail.com" required>
       </div>
            </div>
        </br></br>
        <div class="form-group">
            <strong>Password:</strong><a href="Studentforgotpwdpage.php">
                <i>Forgot Password?</i></a>

        

            <div class="col-sm-10">
		<input  class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="password"  tabindex="2" required>
        </div>
        </div>
    </div>
        </br></br>
        <input class="btn btn-info" type="Submit" name="StudentLogin" value ="sign in"></br>

	</form>
    
    New to Estates?<a href="StudentSignupPage.php">Sign Up</a>

</div>

</body>
</html>