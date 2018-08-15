<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
 <body>

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
       <a style="color:blue" href="notificationpage.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:90px;"></span><span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>Notifications<span class="badge"></span></a>
       
      </li>
      <li><a href="StoreKeeperindex.php">Home</a></li>
     </ul>
    </div>
   </nav>
   
      
   	</ul>
      </div>
   	</div>
  </div>

   <form method="post" id="comment_form">
    <div class="form-group">
     <label>Enter Subject</label>
     <input type="text" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
    </div>
   </form>
   
  </div>
</body>
</body>
</html>
