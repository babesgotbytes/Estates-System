<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body style="background-color: #f6f6f6" class="container-fluid">

    <div  id="main" style="margin-left:400px; margin-right: 400px; margin-top: 120px; margin-bottom: 100px;">
   <div style="margin-left:35px ">
    <h3><strong>StoreKeeper LoginPage</strong></h3><br><br>
    </div>
	<form method="POST" action="StoreKeeperLogin.php">
        <div class="row">
        <div class="form-group">

        <strong>Username or email address</strong></br>

       <div class="col-sm-10">
        <input style="width: 320px;" class="form-control" id="exampleInputUsername" type="textfield" name="username" placeholder="Jane Doe or jane@gmail.com" required>
       </div>
            </div>
        </br></br>
        <div class="form-group">
            <strong>Password</strong>
            <a style="margin-left: 145px; color:deepskyblue" href="StoreKeeperforgotpwdpage.php">
                <i><strong>Forgot Password?</strong></i></a>

        

            <div class="col-sm-10">
		<input  style="width: 320px; " class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="password"  tabindex="2" required>
        </div>
        </div>
    </div>
        </br></br>
        <input style="width: 320px; " class="btn btn-info" type="Submit" name="login" value ="sign in"></br>
    </form>

</div>

</body>
</html>