<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location: ManagerLoginpage.php');

}else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <title>Home Page</title>
<!--        <style>-->
<!--            body{margin:0;-->
<!--                background-color:#f6f6f6;-->
<!--            }-->
<!--            .header{-->
<!--                width: 100%;-->
<!--                height: auto;-->
<!--                background-color: #7285A5;-->
<!--                padding-top: 24px;-->
<!--            }-->
<!--            .nav{-->
<!--                height:40px;-->
<!--                background:#111E6C;-->
<!--            }-->
<!--            .nav ul{-->
<!--                margin: 0;-->
<!--                padding: 0;-->
<!--            }-->
<!--            .nav ul li{ list-style: none; }--><!--            .nav ul li a{-->
<!--                text-decoration: none;-->
<!--                float: right;-->
<!--                display: block;-->
<!--                padding: 10px 20px;-->
<!--                color: white;-->
<!--            }-->
<!--            .nav ul li a:hover{color: #7EF9FF;}-->
<!--        </style>-->
    </head>

    <header>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css">
        <link rel="stylesheet"  href="bootstrap1/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

            <a href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

        </div>
        <div class="nav" style="font-family: Serif;font-size: 18px;">
            <ul>
<!--                <li><a href="ManagerLogout.php">Log out</a></li>-->
<!--                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>-->
<!--                <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>-->
<!--                <li><a  href="WorkStatus.php">Renovations</a></li>-->
<!--                <li><a href="EmployeePage.php">Assign work</a></li-->
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" id="dropdown" data-toggle="dropdown">
                        Notifications
                        <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                        <span class="badge">
        <?php echo count(getNotifications()) ?>

        <?php
 foreach (getNotifications() as $notification) { ?>
                            <li><a class="dropdown-item" href="#"
                                   onclick="markNotificationAsRead('<?php echo $notification["id"] ?>')">
                                    <?php echo $notification['message'] . " on " . $notification['date']; ?></a></li>
                            <?php
                        }
                        ?></ul></li>

            </ul>
        </div>
    </div>
    </div>
    </header>
<body>

</body>


<!---->
<?php //}?>

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
</html>

