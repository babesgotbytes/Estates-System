
<?php
include 'db_Connection.php';
session_start();

if(!isset($_SESSION['username'])){

    header('location: StudentLoginpage.php');

}else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <title>Home Page</title>
        <style>
            body{margin:0;
                background-color:#f6f6f6;
            }
            .header{
                width: 100%;
                height: auto;
                background-color: #0056b3;
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
    <body>

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

            <a class="navbar-brand" style="color: white" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

        </div>
        <div class="nav" style="font-family: Serif;font-size: 18px;">
            <ul>
                <li><a href="StudentLogout.php">Log out</a></li>
<!--                <li><a href="#">Make Complain</a></li>-->
                <li><a href="StudentResetPasswordPage.php">Reset password</a></li>
<!--                <li><a href="StudentMakeCompainPage.php">Make Complain</a></li>-->
                <li><a href="StudentMakereport.php">Make report</a></li>

                <li><a  style="color: #f5c6cb" href="Studentprofile.php">Profile</a></li>

                <li><a href="Studentindexpage.php">Home</a></li>
        </div>
    </div>

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <div id="main" style="margin-left:400px; margin-right: 400px; margin-top: 50px; margin-bottom: 100px;height: 500px; width: 400px;">

        <p style="font-family: Serif;font-size: 30px;margin-left: 38px;">My Profile</p><br>
        <div style="box-shadow: 5px 5px 5px 5px  #ccccff;margin-right: 10px;background-color: #f3f3f3">
            <br><br>
            <form method="POST" action="StudentReset_password.php">
                <div class="form-group">
                    <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Username:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control"  id="exampleInputUsername" type="textfield" name="username" readonly value="<?php echo  $_SESSION['username']?>">

                    </div>
                </div><br>
                <div class="form-group">
                    <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Email:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control"  id="exampleInputUsername" type="textfield" name="email" readonly value="<?php echo  $_SESSION['email']?>">

                    </div>
                </div><br>
                <div class="form-group">
                    <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Worker ID/Registration Number</label><br>
                    <div class="col-sm-10">
                        <input class="form-control"  id="exampleInputUsername" type="textfield" name="email" readonly value="<?php echo  $_SESSION['regno']?>">

                    </div>
                </div><br>
<!--                <div class="form-group">-->
<!--                    <label style="margin-left: 80px;font-family: Serif;font-size: 16px">Change Password</label><br>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input <input class="btn" style="margin-left: 10px;background-color: #0056b3;color: white; font-family: Serif;font-size: 18px;width: 280px;" type="Submit" name="update" value ="Reset"></br>-->
<!---->
<!--                    </div>-->
<!--                </div><br>-->




<!--                <input class="btn" style="margin-left: 60px;background-color: #0056b3;color: white; font-family: Serif;font-size: 18px;width: 280px;" type="Submit" name="update" value ="Reset"></br>-->

            </form>
            <br><br>
        </div>
    </div>

    </body>

    </body>
    </html>

<?php }?>


