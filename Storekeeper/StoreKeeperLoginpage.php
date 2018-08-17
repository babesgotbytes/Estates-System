<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<!--<body style="background-color: #f6f6f6" class="container-fluid">-->
<!---->
<!--    <div  id="main" style="margin-left:400px; margin-right: 400px; margin-top: 120px; margin-bottom: 100px;">-->
<!--   <div style="margin-left:35px ">-->
<!--    <h3><strong>StoreKeeper LoginPage</strong></h3><br><br>-->
<!--    </div>-->
<!--	<form method="POST" action="StoreKeeperLogin.php">-->
<!--        <div class="row">-->
<!--        <div class="form-group">-->
<!---->
<!--        <strong>Username or email address</strong></br>-->
<!---->
<!--       <div class="col-sm-10">-->
<!--        <input style="width: 320px;" class="form-control" id="exampleInputUsername" type="textfield" name="username" placeholder="Jane Doe or jane@gmail.com" required>-->
<!--       </div>-->
<!--            </div>-->
<!--        </div></br>-->
<!--        <div class="form-group">-->
<!--            <strong>Password</strong>-->
<!--            <a style="margin-left: 145px; color:deepskyblue" href="StoreKeeperforgotpwdpage.php">-->
<!--                <i><strong>Forgot Password?</strong></i></a>-->

<body class="container-fluid" style="background-color:#f6f6f6;">
<div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 100px; margin-bottom: 100px;height: 500px; width: 400px;">

    <p style="color: #000000; margin-left: 50px; font-size: 28px">StoreKeeper LoginPage</p><br><br>
    <div style="box-shadow: 5px 5px 5px 5px #ccccff;margin-right: 10px;background-color: #f3f3f3">
        <br><br>
        <form method="POST" action="StoreKeeperLogin.php">
            <div class="row">
                <div class="form-group">

                    <strong style="color: #000000; font-family: Serif;font-size: 18px; margin-left: 80px">Username or email address</strong></br>

                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputUsername" style="margin-left: 40px" type="textfield" name="username" placeholder="Jane Doe or jane@gmail.com" required>
                    </div>
                </div>
                </br></br>
                <div class="form-group">
                    <strong style="color: #000000;font-family: Serif;font-size: 18px;margin-left: 80px">Password</strong><a href="StoreKeeperforgotpwdpage.php">
                        <i style="color: #0056b3;font-family: Serif;font-size: 16px; margin-left: 100px">Forgot Password?</i></a>

<!--            <div class="col-sm-10">-->
<!--		<input  style="width: 320px; " class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="password"  tabindex="2" required>-->
<!--        </div>-->
<!--        </div>-->
<!--    </div>-->
<!--        </br></br>-->
<!--        <input style="width: 320px; " class="btn btn-info" type="Submit" name="login" value ="sign in"></br>-->
<!--    </form>-->

                    <div class="col-sm-10">
                        <input  class="form-control" id="exampleInputPassword"  style="margin-left: 40px" type="password" name="password" placeholder="password"  tabindex="2" required>
                    </div>
                </div>
                <br><br><br>
            <input class="btn "  style="margin-left: 40px;background-color: #0056b3;color: white;font-family: Serif;font-size:18px;width: 320px;" type="Submit" name="login" value ="Sign In"></br>
            </div>
        </form>

        <br>

           </div>
<br>
</div>

</body>
</html>
































