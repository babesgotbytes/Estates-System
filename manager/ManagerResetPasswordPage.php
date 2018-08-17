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
<!--    <link rel="stylesheet" href="css/main.css">-->
</head>
<body class="container">


<div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 50px; margin-bottom: 100px;height: 500px; width: 400px;">

    <p style="font-family: Serif;font-size: 30px;margin-left: 38px;">Manager Reset Password</p><br>
    <div style="box-shadow: 5px 5px 5px 5px  #ccccff;margin-right: 10px;background-color: #f3f3f3">
        <br><br>
        <form method="POST" action="ManagerReset_password.php">
            <div class="form-group">
                <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Username:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="username" readonly value="<?php echo  $_SESSION['username']?>">

                </div>
            </div><br>
            <div class="form-group">
                <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Email:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="email" readonly value="<?php echo  $_SESSION['email']?>">

                </div>
            </div><br>
            <div class="form-group">
                <label style="margin-left: 80px;font-family: Serif;font-size: 16px"> Enter Initial password:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputPassword" type="password" name="initial_pass" placeholder="initial password" required>
                </div>
            </div><br>
            <div class="form-group">
                <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Enter new password</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px;" id="exampleInputPassword" type="password" name="password" placeholder="new password" required>
                </div>
            </div>
            <div class="form-group">
                <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Re-enter new password:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputPassword" type="password" name="con_pass" placeholder="confirm password" required>
                </div>
            </div><br><br>
            <input class="btn" style="margin-left: 60px;background-color: #0056b3;color: white; font-family: Serif;font-size: 18px;width: 280px;" type="Submit" name="update" value ="Reset"></br>

        </form>
        <br><br>
    </div>
</div>
</body>
    </html>

        <?php
    }


?>