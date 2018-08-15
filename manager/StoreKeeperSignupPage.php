<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<!--<body class="container">-->
<!--<div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;">-->
<!--    <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px">-->
<!--        <img src="logo.jpg"/>-->
<!--    </div>-->
<!--    <h2>StoreKeeper Registration</h2><br><br>-->
<!--    <form id="signup_form" method="POST" action="StoreKeeperSignup.php">-->
<!--        <div class="row">-->
<!--            <div class="form-group">-->
<!--                <label>Name:</label><br>-->
<!--                <div class="col-sm-10">-->
<!--                    <input class="form-control" id="exampleInputUsername" type="textfield" name="username" placeholder="name" autocomplete="off" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Email:</label><br>-->
<!--                <div class="col-sm-10">-->
<!--                    <input class="form-control" id="exampleInputUsername" type="textfield" name="email" placeholder="email" autocomplete="off" required>-->
<!--                </div>-->
<!--            </div><br>-->
<!--            <div class="form-group">-->
<!--                <label>Password:</label><br>-->
<!--                <div class="col-sm-10">-->
<!--                    <input class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="password" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Confirm password:</label><br>-->
<!--                <div class="col-sm-10">-->
<!--                    <input class="form-control" id="exampleInputPassword" type="password" name="confirm-password" placeholder="confirm password" required>-->
<!--                </div>-->
<!--            </div><br><br>-->
<!--            <input class="btn btn-info" type="Submit" name="submit" value ="sign Up"></br>-->
<!--        </div>-->
<!--    </form>-->

<body class="container-fluid" style="background-color: #f6f6f6; color:black" >

<p style="font-size: 30px;margin-left: 430px;margin-top: 60px">StoreKeeper Registration</p><br><br>
<div style="box-shadow: 5px 5px 5px 5px #ccccff;margin-left: 320px; margin-right:500px; background-color: #f3f3f3">
    <form id="signup_form" method="POST" action="StoreKeeperSignup.php">
        <div class="row"><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Name</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="username" placeholder="name" autocomplete="off" required>
                </div>
            </div><br>
<!--            <div class="form-group">-->
<!--                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Registration-Number or Work-Id</label><br>-->
<!--                <div class="col-sm-10">-->
<!--                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="ID" placeholder="RegNo or Work-Id" autocomplete="off" required>-->
<!--                </div>-->
<!--            </div><br>-->
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
            <input class="btn " style="background-color:#0056b3;margin-left: 70px;color: white;width: 400px ;font-family: Serif;font-size: 20px;" type="Submit" name="submit" value ="Sign Up"></br>
        </div><br
    </form>
</div>

</body>
</html>