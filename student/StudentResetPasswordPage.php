<?php
include_once 'StudentLogin.php';
if (!isset($_SESSION['username'])) {
    header("Location:StudentLoginpage.php?msg=please login first");

}else
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <style>
            body{margin:0;}
            .header{
                width: 100%;
                height: auto;
                background-color: #7285A5;
                padding-top: 24px;
            }
            .nav{
                height:40px;
                background:#111E6C;
            }
            .nav ul{
                margin: 0;
                padding: 0;
            }
            .nav ul li{ list-style: none; }
            .nav ul li a{
                text-decoration: none;
                float: right;
                display: block;
                padding: 10px 20px;
                color: white;
            }
            .nav ul li a:hover{color: #7EF9FF;}
        </style>
    </head>
    <body>
    <h1> </h1>
    <header>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </header>
    <body class="container-fluid" style="background-color: #f6f6f6;">

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

            <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

        </div>
        <div class="nav">
            <ul>
                <li><a href="StudentLogout.php">Log out</a></li>
                <li><a style="color: #0056b3" href="StudentResetPasswordPage.php">Reset password</a></li>
                <li><a href="../manager/WorkStatus.php">Renovations</a></li>
                <li><a href="StudentMakereport.php">Make report</a></li>
                <li><a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown">Notifications<span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge"></span></a>


                </li>
                    <li><a href="Studentprofile.php">Profile</a></li>
            </ul>
        </div>
    </div>
    </div>


    </head>
    <div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 50px; margin-bottom: 100px;height: 500px; width: 400px;">

        <p style="font-family: Serif;font-size: 30px;margin-left: 38px;">Student Reset Password</p><br>
    <div style="box-shadow: 5px 5px 5px 5px  #ccccff;margin-right: 10px;background-color: #f3f3f3">
    <br><br>
        <form method="POST" action="StudentReset_password.php">
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