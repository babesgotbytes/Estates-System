<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location: ManagerLoginpage.php');

}else{
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
        .nav ul li a:hover{color: #7EF9FF;}
        #not ul li a{
            color:black;

        }
    </style>
</head>
<body class="container-fluid" style="background-color: #f6f6f6; color:black">
<header>
    <!--        <link rel="stylesheet" href="style.css" type="text/css"/>-->

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

<!--            <a class="navbar-brand" href="#"> Welcome --><?php //echo $_SESSION['username'];?><!-- </a>-->

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
<!--                <li><a style="color: #f5c6cb" href="Managerindexpage.php">Home</a></li>-->
                <li><a  href="WorkStatus.php">Renovations</a></li>
                <li><a href="EmployeePage.php">Assign work</a></li>
                <li><a href="printworkstatuspage.php">Print workRecords</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a style="color: #f5c6cb" href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
                <li><a href="ManagerLogout.php">Log out</a></li>



            </ul>
        </div>
    </div>

</header>

<p style="font-size: 30px;margin-left: 430px;margin-top: 100px">StoreKeeper Registration</p><br><br>
<div style="box-shadow: 5px 5px 5px 5px #ccccff;margin-left: 320px; margin-right:500px; background-color: #f3f3f3">
    <form id="signup_form" method="POST" action="StoreKeeperSignup.php">
        <div class="row"><br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Name</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield"
                           name="username" placeholder="name" autocomplete="off" required>
                </div>
            </div>
            <br>
            <br>
            <!--            <div class="form-group">-->
            <!--                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Registration-Number or Work-Id</label><br>-->
            <!--                <div class="col-sm-10">-->
            <!--                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield" name="ID" placeholder="RegNo or Work-Id" autocomplete="off" required>-->
            <!--                </div>-->
            <!--            </div><br>-->
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Email</label><br>
                <br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputUsername" type="textfield"
                           name="email" placeholder="email" autocomplete="off" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Password</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px;" id="exampleInputPassword" type="password"
                           name="password" placeholder="password" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label style="margin-left: 50px;font-family: Serif;font-size: 18px;">Confirm password</label><br>
                <div class="col-sm-10">
                    <input class="form-control" style="margin-left: 40px" id="exampleInputPassword" type="password"
                           name="confirm-password" placeholder="confirm password" required>
                </div>
            </div>
            <br><br>
            <input class="btn "
                   style="background-color:#0056b3;margin-left: 70px;color: white;width: 400px ;font-family: Serif;font-size: 20px;"
                   type="Submit" name="submit" value="Sign Up"></br>
        </div>
        <br
    </form>
</div>
</body>
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