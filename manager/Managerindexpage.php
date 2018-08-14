<?php
session_start();

require_once 'notification.php';

if (!isset($_SESSION['username'])) {

    header('location: ManagerLoginpage.php');

} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/manager.css">
        <title>Manager's Page</title>
    </head>
    <body>
    <header>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <meta name="viewport" content="width=device-width initial-scale=1">


        <div style="float: left; padding:20px 20px 0 30px;font-size: 40px; color:#cccccc;">
            Welcome <?php echo $_SESSION['username']; ?>
        </div>
        <nav>
            <a href="#" id="menu-icon"></a>
            <ul style="">
<!--                <li><a href="Project.php" style="color: #cccccc; font-size: 25px;">View reports</a></li>-->
                <li><a href="WorkStatus.php" style="color: #cccccc;font-size: 25px;">Renovations</li>
                <li style="color: #cccccc;"><a href="StoreKeeperSignupPage.php" style="color: #cccccc;font-size: 25px;">SignUp
                        Storekeeper</a></li>
                <li><a href="EmployeePage.php" style="color: #cccccc;font-size: 25px;">Assign work</li>

                <li><a href="ManagerResetPasswordPage.php" style="color: #cccccc;font-size: 25px;">Reset password</li>
                <li class="dropdown">


                    <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown" style="font-size: 23px;">
                        Notifications
                        <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                        <span class="badge"><?php echo count(getNotifications()) ?><span class="caret"></span></span>
                    </a>

                    <ul class="dropdown-menu">
                        <!--                        <a class="dropdown-item" href="#">report1</a>-->
                        <!--                        <a class="dropdown-item" href="#">report1</a>-->
                        <!--                        <a class="dropdown-item" href="#">report1</a>-->
                        <?php
                        foreach (getNotifications() as $notification) { ?>
                            <li><a class="dropdown-item" href="#"
                                   onclick="markNotificationAsRead('<?php echo $notification["id"] ?>')">
                                    <?php echo $notification['message'] . " on " . $notification['date']; ?></a></li>
                            <?php
                        }
                        ?>

                    </ul>

                </li>

                <li style="color: #cccccc;"><a href="ManagerLogout.php"
                                               style="color: #cccccc;font-size: 25px;">logout</a></li>
            </ul>
        </nav>

    </header>


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
    </body>
    </html>

<?php } ?>

 
