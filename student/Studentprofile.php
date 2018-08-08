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
<Head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	<title>Profile page</title>
<style type="text/css">
	  #body-bg
	  {
	  background-color: #efefef;
      }	
</style>
</Head>

<body id="body-bg">
	<div class="container" style=" background-color:#fff;margin-top:20px; margin-bottom:20px; width:1200px; height:640px";>
		<?php echo $name;?>
	<button class='btn btn-danger' style='float:right; margin-top:20px;'>Logout</button>
    
    <br><br><br><br>
        <form action="application.php" method="POST">

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


                <button type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-top: 25px"> Submit</button>


            </div>
        </div>








</div>
    </form>
</body>

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