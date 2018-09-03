<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container" style="background-color:#f6f6f6;background-image: pics/entrance.jpg">
<div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 100px; margin-bottom: 100px;height: 500px; width: 400px;">
    <!--        <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px;>-->
    <!--        <img src="logo.jpg"/>-->
    <!--        </div>-->
    <p style="color: #000000; margin-left: 70px; font-size: 28px">Manager LoginPage</p><br><br>
    <div style="box-shadow: 5px 5px 5px 5px #ccccff;margin-right: 10px;background-color: #f3f3f3">
        <br><br>
        <form method="POST" action="ManagerLogin.php">
            <div class="row">
                <div class="form-group">

                    <strong style="color: #000000; font-family: Serif;font-size: 18px; margin-left: 80px">Username or email address</strong></br>

                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputUsername" style="margin-left: 40px" type="textfield" name="username" placeholder="Jane Doe or jane@gmail.com" required>
                    </div>
                </div>
                </br></br>
                <div class="form-group">
                    <strong style="color: #000000;font-family: Serif;font-size: 18px;margin-left: 80px">Password</strong><a href="Managerforgotpwdpage.php">
                        <i style="color: #0056b3;font-family: Serif;font-size: 16px; margin-left: 100px">Forgot Password?</i></a>



                    <div class="col-sm-10">
                        <input  class="form-control" id="exampleInputPassword"  style="margin-left: 40px;font-family: Serif;font-size: 18px;" type="password" name="password" placeholder="password"  tabindex="2" required>
                    </div>
                </div>
            </div>
            </br>
            </b
            r>
            <input class="btn "  style="margin-left: 40px;background-color: #0056b3;font-family: Serif;font-size: 18px; width: 320px;  " type="Submit" name="login" value ="Sign In"></br>

        </form>

        <br><br><br>
      <em style="color: #000000;font-size: 18px;margin-left: 30px">New to Estates?</em><a href="ManagerSignupPage.php" ><i style="color: #0056b3;font-family: Serif;font-size: 16px;">Sign Up</i></a>
        <br>
    </div>
</div>

</body>
</html>
































