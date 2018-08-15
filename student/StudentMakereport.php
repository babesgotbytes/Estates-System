<?php
//include_once 'db_Connection.php';
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
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <style>
            body{margin:0;}
            .header{
                width: 100%;
                height: auto;
                background-color: #0056b3;
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
<h1> </h1>
<header>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</header>

<div id="header">
    <div id="headerContent" >
    </div>
    <div class="navbar-header">

        <a class="navbar-brand" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

    </div>
    <div class="nav">
        <ul>
            <li><a href="StudentLogout.php">Log out</a></li>
            <li><a  href="StudentResetPasswordPage.php">Reset password</a></li>
            <li><a href="../manager/WorkStatus.php">Renovations</a></li>
            <li><a style="color: #0056b3" href="StudentMakereport.php">Make report</a></li>
            <li><a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown">Notifications<span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-bell" style="font-size:18px;"></span><span class="badge"></span></a>


            </li>
            <li><a href="Studentprofile.php">Profile</a></li>
        </ul>
    </div>
</div>
</div>


</head>
<body class="container-fluid" style="background-color:#f6f6f6;" id="body-bg">
	<div class="container" style="margin-top:20px; margin-bottom:20px; margin-left:400px;width:1200px; height:640px";>

    <br>
        <form  id="appication-form" action="application.php" method="POST">

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

                </select><br>

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

                <label for="Category-select">CategoryName:</label>
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


                <button type="submit" class="btn " name="submit" value="Submit" style="margin-top: 25px;background-color: #0056b3; width: 100px;margin-left: 100px;"> Submit</button>


            </div>
        </div>

</div>
    </form>
	<button class='btn btn-outline-success' style='float:right; margin-top:20px;'>Logout</button>
    </div>
    <?php 
     $user = new User;
     echo $user->getAllUsers();
    ?>
</body>
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

                }});

        }
        load_unseen_notification();
        $('#application_form').on('submit' ,function (event) {
            event.preventDefault();

        });
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