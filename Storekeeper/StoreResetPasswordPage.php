<?php
include_once 'StoreKeeperLogin.php';
if (!isset($_SESSION['username'])) {
    header("Location:StoreKeeperLoginpage.php?msg=please login first");

}else
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
         <style>
  body{margin:0;}
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
    <body class="container">
    

<div id="header">
   <div id="headerContent" >
    </div>
     <div class="navbar-header">
 
     <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>
 
    </div>
    <div class="nav">
      <ul>
        <li><a href="StoreKeeperLogout.php">Log out</a></li>
      <li><a style="color:blue" href="StoreResetPasswordPage.php">reset password</a></li>
      <li><a href="StoreUsedmaterialspage.php">used materials</a></li>
      <li><a  href="StoreAssignMaterialspage.php">assign materials</a></li>
      <li><a href="StoreAddMaterialspage.php">add materials</a></li>
      <li class="dropdown">
      <li> <a href="notificationpage.php" >Notifications <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge">7</span></a>
 
     </li>
      <li><a  href="StoreKeeperindex.php">Home</a></li>
    </ul>
      </div>
    </div>
  </div>


    <div id="main" style="margin-left:400px; margin-right:200px; margin-top: 150px;">
        <div style="height: 80px; width: 80px; margin-bottom: 10px; margin-left: 80px">
            <img src="logo.jpg"/>
        </div>
        <h2>StoreKeeper Reset Password</h2><br>
        <form method="POST" action="StoreReset_password.php">
            <div class="row">
                <div class="form-group">
                    <label>Username:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputUsername" type="textfield" name="username" readonly value="<?php echo  $_SESSION['username']?>">

                    </div>
                </div><br>
                <div class="form-group">
                    <label>Email:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputUsername" type="textfield" name="email" readonly value="<?php echo  $_SESSION['email']?>">

                    </div>
                </div><br>
                <div class="form-group">
                    <label> Enter Initial password:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputPassword" type="password" name="initial_pass" placeholder="initial password" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label>Enter new password</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputPassword" type="password" name="password" placeholder="new password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Re-enter new password:</label><br>
                    <div class="col-sm-10">
                        <input class="form-control" id="exampleInputPassword" type="password" name="con_pass" placeholder="confirm password" required>
                    </div>
                </div><br><br>
                <input class="btn btn-info" type="Submit" name="update" value ="Reset"></br>
            </div>
        </div>
        </form>
    </body>
    </html>

    <?php
}


?>