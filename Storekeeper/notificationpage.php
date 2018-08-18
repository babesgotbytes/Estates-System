


<?php
session_start();

require_once 'notification.php';
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<title>Home Page</title>
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
<body class="container-fluid">
	<h1> </h1>
	<header>
 	<link rel="stylesheet" href="style.css" type="text/css"/>
 </header>

<div id="header">
   <div id="headerContent" >
   	</div>
     <div class="navbar-header">
 
    
 
    </div>
   	<div class="nav">
      <ul>
   		<li><a href="StoreKeeperLogout.php">Log out</a></li>
      <li><a href="StoreResetPasswordPage.php">reset password</a></li>
      <li><a href="StoreUsedmaterialspage.php">used materials</a></li>
      <li><a href="StoreAssignMaterialspage.php">assign materials</a></li>
      <li><a href="StoreAddMaterialspage.php">add materials</a></li>
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

      <li><a href="StoreKeeperindex.php">Home</a></li>
   	</ul>
      </div>
   	</div>
  </div>

</body>
<script src="../axios/axios.min.js"></script>
<script src="jQuery/jquery-2.2.4.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="application/javascript">
    $document.ready(function () {
        function load_unseen_notification(view='') {
            $.ajax({url:"notification.php",
                method:"POST",
                data:{view:view},
                datatype:"json",
                success:function (data) {
                    $('.dropdown-menu').html(data.notifiction);
                    if|(data.unseen_notification>0){
                        $('.count').html(data.unseen_notification);
                    }
//                    window.location.href ="http://localhost/Estates-System/manager/Managerindexpage.php";
                }});

        }
        load_unseen_notification();

    });
</script>

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