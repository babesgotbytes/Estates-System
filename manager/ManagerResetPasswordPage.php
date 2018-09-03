
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
    <style>
        body{margin:0;
            background-color:#f6f6f6;
        }
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
            float: left;
            display: block;
            padding: 10px 20px;
            color: powderblue;
        }
        .nav ul li a:hover{color: #000000;}
        #not ul li a{
            color:black;

        }
    </style>
</head>
<body class="container-fluid">
<header>
    <!--        <link rel="stylesheet" href="style.css" type="text/css"/>-->

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

            <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

        </div>
        <div class="nav" style="font-family: Serif;font-size: 18px;">
            <ul>

                <li class="dropdown" id="nott">
                    <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius: 10px"></span>
                        Notifications
                        <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                        <span class="badge">
                            <?php
                            include_once ("notification.php");
                            echo count(getNotifications());
                            ?>
                            <span class="caret"></span></span>
                    </a>

                    <ul class="dropdown-menu">
                        <?php
                        foreach (getNotifications() as $notification) { ?>
                            <li><a class="dropdown-item" href="#"
                                   onclick="markNotificationAsRead('<?php echo $notification["id"] ?>')">
                                    <?php echo $notification['message'] . " on " . $notification['date']; ?></a></li>
                            <?php
                        }
                        ?></ul></li>
                <li><a style="color: wheat" href="Managerindexpage.php">Home</a></li>
                <li><a  href="WorkStatus.php">Renovations</a></li>
                <li><a href="EmployeePage.php">Assign work</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
                <li><a href="ManagerLogout.php">Log out</a></li>



            </ul>
        </div>
    </div>

</header>


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








<script src="../axios/axios.min.js"></script>
<script src="jQuery/jquery-2.2.4.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

<script>
    function markNotificationAsRead(id) {
        axios.get("notification.php?id=" + id)
            .then(function (data) {
                console.log(data)
            }).catch(function (err) {
            console.log(err);
        })
    }
</script>
<script type="application/javascript">
    <?php
    header("refresh:10;url=Managerindexpage.php");

    ?>
</script>
</html>
