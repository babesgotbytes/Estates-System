	
<?php
include 'db_Connection.php';
include_once 'Studentindex.php';

session_start();
$name=$_SESSION['username'];

if(!isset($_SESSION['username'])){

            header('location: StudentLoginpage.php');

    }
    else{
?>

<!DOCTYPE html>
<html>
<Head>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4/css/bootstrap.min.css">
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
 
     <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>
 
    </div>
    <div class="nav">
      <ul>
        <li><a href="StudentLogout.php">Log out</a></li>
      <li><a href="#">Make Complain</a></li>
      <li><a href="#">Renovations</a></li>
      <li><a href="Studentreport.php">Make report</a></li>
      <li class="dropdown">


      <div class="dropdown-menu" aria-labelledby="dropdown-toggle"></div>


      <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown">Notifications<span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge"></span></a>
      <div class="dropdown-menu">

      <ul class="dropdown-menu">
       <li> <a class="dropdown-item" href="#">report1</a></li>
        <li><a class="dropdown-item" href="#">report1</a></li>
        <li><a class="dropdown-item" href="#">report1</a></li>
      </ul>
 
     </li>
     <li><a href="Studentprofile.php">Profile</a></li>
    </ul>
      </div>
    </div>
  </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4/js/bootstrap.min.js"></script>

 

    <br><br><br><br>
<?php
      if(isset($_POST['submit'])){
         



  }
  ?>
        <form  id="application-form" action="application.php" method="POST">

        <div class="row">
            <div class="form-group col-md-4">
                <label for="Category-select">Choose a Category:</label>

                <select id="Category-select"  class="form-control" name="Category">
                    <option value="" disabled selected>--Please choose--</option>
                    <option value="hostel">Hostel</option>
                    <option value="lecture_hall">Lecture Hall</option>
                    <option value="office">Offices</option>
                    <option value="games_sector">Games Sesctor</option>
                    <option value="anycategory">Any Other</option>

                </select><br><br>

            </div>

<!--            <div class="form-group col-md-4" id="department_div" style="display: none">-->
<!--                <label for="Category-select">Choose a Category:</label>-->
<!---->
<!--                <select id="option_2"  class="form-control"  required>-->
<!--                    <option value="" disabled selected>--Please choose--</option>-->
<!---->
<!---->
<!--                </select><br><br>-->
<!---->
<!--            </div>-->

        </div>

        <div class="row">

            <div class="form-group col-md-4">

                <label for="Category-select">Section:</label>
                <input type="text" class="form-control" name="cName" autocomplete="off" required>

<!--                <select id="Type-select"  class="form-control">-->
<!--                    <option value="">--Please choose--</option>-->
<!--                    <option value="building">Building</option>-->
<!--                    <option value="tap">Tap</option>-->
<!--                    <option value="pipe">Pipe</option>-->
<!--                    <option value="washroom">WashRoom</option>-->
<!--                    <option value="bulb">Bulb</option>-->
<!--                    <option value="anytype">Any Other</option>-->
<!---->
<!--                </select><br><br>-->
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="Category-select">PropertyName:</label>
                <input type="text" class="form-control"  name="pName" autocomplete="off" required>

            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-4">

                <label for="Category-select">Choose the Kind of Damage:</label>

                <select id="Damage-select" class="form-control" name="Damage">
                    <option value="" disabled selected>--Please choose--</option>
                    <option value="broken">Broken</option>
                    <option value="stolen">Stolen</option>
                    <option value="blocked">Blocked</option>
                    <option value="burnt">Burnt</option>
                    <option value="leaking">Leaking</option>
                    <option value="repair">Repair</option>
                    <option value="replace">Replace</option>
                    <option value="paint">Paint</option>
                    <option value="spoilt">Spoilt</option>
                    <option value="cracked">Cracked</option>

                </select><br><br>
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-4">


                <button type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-top: 25px"> Submit</button>


            </div>
        </div>

</div>
    </form>
    </div>
    <?php
    ?>
</body>
<script>
 
$(document).ready(function(){
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"Fetchnotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown-menu').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 
// submit form and get new records
 
$('#application-form').on('submit', function(event){
 event.preventDefault();
 
 if($('#Category-select').val() != '' && $('#Damage-select').val() != '')
 
 {
 
  var form_data = $(this).serialize();
 
  $.ajax({
 
   url:"notification.php",
   method:"POST",
   data:form_data,
   success:function(data)
 
   {
 
    $('#application-form')[0].reset();
    load_unseen_notification();
 
   }
 
  });
 
 }
 
 else
 
 {
  alert("Both Fields are Required");
 }
 
});
 
// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count').html('');
 
 load_unseen_notification('yes');
 
});
 
setInterval(function(){
 
 load_unseen_notification();;
 
}, 5000);
 
});
 
</script>

<!--<script type="application/javascript" src="jQuery/jquery-2.2.4.min.js"></script>-->
<!--    <script type="application/javascript" src="axios/axios.min.js"></script>-->
<!---->
<!--<script type="application/javascript">-->
<!---->
<!--    function nextValue(category) {-->
<!--        $('#department_div').show();-->
<!---->
<!--        $('#option_2').find('option').remove();-->
<!--        $('#option_2') .append("<option  disabled selected>--Please choose--</option>");-->
<!---->
<!--        var url='Studentindex.php?category_id='+category;-->
<!--        axios.get(url)-->
<!--            .then(function (result) {-->
<!--                $.each(result.data,function (key,value) {-->
<!--                    //append the options from the database to the select tag like done below-->
<!--                    $('#option_2').append("<option value='"+value[0]+"'>"+value[1]+" Room "+value[2]+"</option>")-->
<!--                });-->
<!--                console.log(result.data)-->
<!--            })-->
<!--            .catch(function (err) {-->
<!---->
<!--            });-->
<!---->
<!---->
<!---->
<!--    }-->
<!--</script>-->

</html>
    <?php }?>


