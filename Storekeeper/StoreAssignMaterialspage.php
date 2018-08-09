
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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
<body>
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
      <li><a style="color:blue" href="StoreAssignMaterialspage.php">assign materials</a></li>
      <li><a  href="StoreAddMaterialspage.php">add materials</a></li>
      <li class="dropdown">
      <li> <a href="notificationpage.php" >Notifications <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge">7</span></a>

      <div class="dropdown-menu">
      <ul class="dropdown-menu">
        <a class="dropdown-item" href="#">report1</a>
        <a class="dropdown-item" href="#">report1</a>
        <a class="dropdown-item" href="#">report1</a>
      </ul>
 
     </li>
      <li><a href="StoreKeeperindex.php">Home</a></li>
   	</ul>
      </div>
   	</div>
  </div>

<form action="StoreAssignMaterials.php" method="POST">
    
  <!-- material_ID:<input type="text" name="material_ID"><br><br> -->
  <div class="row" style="margin-left:400px; margin-right: 400px; margin-top: 150px; margin-bottom: 100px;">
   <div class="form-group">
  <label>material name</label><br>
  <div class="col-sm-10">
        <input class="form-control" id="exampleInputMaterialName" type="textfield" name="material_name" placeholder="material name" autocomplete="off" required>
       </div>
</div><br>
   <div class="form-group">
    <label>Quantity</label><br>
  <div class="col-sm-10">
        <input class="form-control" id="exampleInputQuantity" type="textfield" name="Quantity" placeholder="Quantity" autocomplete="off" required>
       </div>
</div>
    <div class="form-group col-md-4" style="width: 470px;">
                <label for="Category-select">Department Name</label>

                <select id="Category-select"  class="form-control" name="category">
                    <option value="" disabled selected>--Please choose--</option>
                    <option value="mechanical">mechanical</option>
                    <option value="welding & fabrication">welding & fabrication</option>
                    <option value="signwriting,glazing,painting & decoration">signwriting,glazing,painting & decoration</option>
                    <option value="masonry and grounds">masonry and grounds</option>
                    <option value="carpentry,joinery & locksmith">carpentry,joinery & locksmith</option>
                    <option value="electrical and refrigeration">electrical and refrigeration</option>

                </select>
            </div>
     <div class="form-group">
    <label>Employee Assigned Materials</label><br>
<div class="col-sm-10">
        <input class="form-control" id="exampleInputAssignEmp" type="textfield" name="Emp_assign" placeholder="Employee assigned materials"  autocomplete="off" required>
       </div>
</div>
<br><br>
   <input class="btn btn-info" type="Submit" name="assign" value ="Assign">
 </div>
  </form>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
	
</body>
</html>

 



