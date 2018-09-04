
<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location: ManagerLoginpage.php');

}else{
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee addition</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
                <li><a style="color: #f5c6cb" href="Managerindexpage.php">Home</a></li>
                <li><a  href="WorkStatus.php">Renovations</a></li>
                <li><a href="EmployeePage.php">Assign work</a></li>
                <li><a href="printworkstatuspage.php">Print workRecords</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
                <li><a href="ManagerLogout.php">Log out</a></li>



            </ul>
        </div>
    </div>

</header>

<form action="AddEmployee1.php" method="POST">

    <div class="row" style="margin-top: 70px;margin-left: 30px;">
        <p style="font-family: 'sans-serif';font-size: 25px;">Addition of a new Employee:</p><br>


        <div class="col-md-4">

            <label style="font-family: 'sans-serif';font-size: 18px">EmpName:</label>
            <input type="text" name="Name" class="form-control" autocomplete="off" required>
            <label style="font-family: 'sans-serif';font-size: 18px">PhoneNo:</label>
            <input type="text" name="Phone" class="form-control" autocomplete="off" required>
            <label style="font-family: 'sans-serif';font-size: 18px">EmpEmail:</label>
            <input type="email" name="Email" class="form-control" autocomplete="off" required>
            <br><br>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit"
                    style="margin-top: 25px;background-color: #0056b3;width: 200px;margin-left: 60px"> Submit
            </button>

        </div>
    </div>
</form>

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
<?php }?>