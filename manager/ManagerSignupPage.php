<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="container-fluid" style="background-color: #f6f6f6; color:black" >

<p style="font-size: 30px;margin-left: 430px;margin-top: 60px">Manager Registration</p><br><br>
<div style="box-shadow: 5px 5px 5px 5px #ccccff;margin-left: 320px; margin-right:500px; background-color: #f3f3f3">
    <form id="signup_form" method="POST" action="ManagerSignup.php">
        <div class="row"><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Name</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="username" placeholder="name" autocomplete="off" required>
                </div>
            </div><br>
            <div class="form-group">
                <label  style="margin-left: 40px;font-family: Serif;font-size: 18px;">Static ID:</label><br>
                <div class="col-sm-10">
                    <input class="form-control"  style="margin-left: 40px" id="exampleInputUsername" type="password" name="satic" placeholder="STATIC ID" autocomplete="off" required>
                </div>
               </div><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Email</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="email" placeholder="email" autocomplete="off" required>
                </div>
            </div><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Password</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px;" id="exampleInputPassword" type="password" name="password" placeholder="password" required>
                </div>
            </div><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Confirm password</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputPassword" type="password" name="confirm-password" placeholder="confirm password" required>
                </div>
            </div><br><br>

            <!--	<input class="btn btn-info" type="Submit" name="submit" value ="sign Up"></br>-->
            <!--    </div>-->

            <input class="btn " style="background-color:#0056b3;margin-left: 70px;color: white;width: 400px ;font-family: Serif;font-size: 20px;" type="Submit" name="submit" value ="Sign Up"></form>
</div><br

</form>
</div>
</body>
</html>




