<!DOCTYPE html>
<html>
<head>
    <title>forgot pwd</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container-fluid" style="background-color:#f6f6f6;">
<div style="box-shadow: 5px 5px 5px 5px  #ccccff; margin-left:400px ;margin-top:150px;background-color: #f3f3f3 ;width:300px;">
    <br>
    <form method="Post" action="StoreKeeperforgotpwd.php">
        <!--		<div style="margin-left: 400px; margin-right:400px;">-->
        <div  class="form-group" >
            <div class="col-sm-10">
                <label style="color: #000000;margin-left: 20px; font-size: 18px; font-family: Serif">Email</label><br>
                <input class="form-control" style="margin-left: 20px;" id="exampleInputUsername" type="textfield" name="email"  placeholder="email" required>
            </div>
        </div><br><br><br><br>
        <input class="btn " type="Submit" style="background-color: #0056b3; color:white; margin-left: 60px;" name="forgotpwd" value ="Send-Code">


    </form>
    <br>
    <a href="StoreKeeperLoginpage.php" style="color: #0056b3;margin-left: 80px;"><i>Login</i></a>
    <br><br>
</div>

</body>
</html>