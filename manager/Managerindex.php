<?php
//session_start();
//
//if(!isset($_SESSION['username'])){
//
//    header('location: ManagerLoginpage.php');
//
//}else{
//    ?>
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
    <body class="container-fluid">
    <h1> </h1>
    <header>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </header>
    <body>

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

            <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

        </div>
        <div class="nav" style="font-family: Serif;font-size: 18px;">
            <ul>
                <li><a href="ManagerLogout.php">Log out</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a href="StoreKeeperSignupPage.php">a></Register storekeeper</a></li>
                <li><a  href="WorkStatus.php">Renovations</a></li>
                <li><a href=EmployeePage.php">Assign work</li
                <li class="dropdown">
                <li> <a  href="notification.php" >Notifications</a></li>

                <li><a style="color: #f5c6cb" href="Managerindexpage.php">Home</a></li>
            </ul>
        </div>
    </div>
    </div>



    </body>


    </body>
    </html>
<!---->
<?php //}?>





