<?php
session_start();

require_once 'notification.php';
?>

<!DOCTYPE html>
<html>
<!--<head>-->
<!--<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<!--<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
<!--<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">-->
<!--	<title>Home Page</title>-->
<!---->
<!--</head>-->
<!--?php-->
<!--session_start();-->
<!---->
<!--if(!isset($_SESSION['username'])){-->
<!---->
<!--header('location: StoreKeeperLoginpage.php');-->
<!---->
<!--}else{-->
<!--?>-->
<!--<!DOCTYPE html>-->
<!--<html>-->
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Notification Page</title>
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
            padding-right: 98px;
            /*padding-top: px;*/
            color: white;
        }
        .nav ul li a:hover{color: #7EF9FF;}
    </style>
</head>
<body class="container-fluid">
<h1> </h1>
<header>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</header>


<div id="header">
    <div id="headerContent" >
    </div>
    <div class="navbar-header">

        <!--     <a class="navbar-brand" href="#"> Welcome --><?php //echo $_SESSION['username'];?><!-- </a>-->

    </div>
    <div class="nav" style="font-family: Serif;font-size: 18px;">
        <ul>
            <li><a href="Managerindexpage.php">Home</a></li>

            <li> <a style="color: #f5c6cb;"  href="Notificationpage.php" >
                    Notifications</>


                </a>-->

                      <ul>
                                            <?php
                                          foreach (getNotifications() as $notification) { ?>
                                              <li
                                                  onclick="markNotificationAsRead('<?php echo $notification["id"] ?>') " style="margin-top: 80px;">
                                                  <?php echo $notification['message'] . " on " . $notification['date']; ?></></li>
                                              <?php
                                          }
                      ?>
                                  </ul>



            </li>
            <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
            <li><a  href="WorkStatus.php">Renovations</a></li>
            <li><a href="EmployeePage.php">Assign work</a></li>
            <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
            <li><a href="ManagerLogout.php">Log out</a></li>


        </ul>
    </div>
</div>
<!---->
<!--<body class="container-fluid">-->
<!--	<h1> </h1>-->
<!--/	<header>-->
<!--<!-- 	<link rel="stylesheet" href="style.css" type="text/css"/>-->
<!-- </header>-->
<!---->


<?php
//include "notification.php";

getNotifications();

?>


</body>
</html>

