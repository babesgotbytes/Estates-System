<?php

include 'db_Connection.php';
	session_start();

	if(!isset($_SESSION['username'])){

        header('location: StudentLoginpage.php');

    }else{
        ?>
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

                <a class="navbar-brand" style="color: white" href="#"> Welcome <?php echo $_SESSION['username'];?> </a>

            </div>
            <div class="nav" style="font-family: Serif;font-size: 18px;">
                <ul>
                    <li><a href="StudentLogout.php">Log out</a></li>
                    <!--      <li><a href="#">Make Complain</a></li>-->
                    <li><a href="StudentResetPasswordPage.php">Reset password</a></li>
                    <li><a style="color: #f5c6cb" href="StudentMakeCompainPage.php">Make Complain</a></li>
                    <li><a href="StudentMakereport.php">Make report</a></li>

                    <li><a href="Studentprofile.php">Profile</a></li>

                    <li><a  href="Studentindexpage.php">Home</a></li>
            </div>
        </div>

        <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


        <form  id="appication-form" action="StudentMakeCompain.php" method="POST">
            <div class="row">

                <div class="form-group col-md-4">

                    <label for="Category-select">Type of complain:</label>

                    <select id="Damage-select" class="form-control" name="Complain">
                        <option value="" disabled selected>--Please choose--</option>
                        <option value="broken">Work Not Done</option>
                        <option value="stolen">Poorly</option>
                        <option value="blocked">Work Incomplete</option>

                    </select><br><br>
                </div>
            </div>

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


            </div>

            <div class="row">

                <div class="form-group col-md-4">

                    <label for="Category-select">CategoryName:</label>
                    <input type="text" class="form-control" name="cName" autocomplete="off" required>

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


                    <button type="submit" class="btn " name="submit" value="Submit" style="margin-top: 25px;background-color: #0056b3; color:white; width: 100px;margin-left: 100px;"> Submit</button>


                </div>
            </div>

            </div>
        </form>

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
//                    window.location.href ="http://localhost/Estates-System/manager/Managerindexpage.php";
                        }});

                }
                load_unseen_notification();
                $('#application_form').on('submit' ,function (event) {
                    event.preventDefault();

                });
            });
        </script>
        </html>

    <?php }?>



