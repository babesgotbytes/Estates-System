
<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location: ManagerLoginpage.php');

}else{
?>



<!DOCTYPE html>


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
            float: left;
            display: block;
            padding: 10px 20px;
            color: powderblue;
        }
        .nav ul li a:hover{color: #7EF9FF;}
        #not ul li a{
            color:black;

        }
        table{
            border-collapse: collapse;
            width: 50%;
            color: #000000;
            font-family:SansSerif
            font-size: 25px;
            text-align: left;
            margin-left: 1%;

        }
        th{
            background-color: #0056b3;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

    </style>
</head>

<body class="container-fluid">
<header>
    <!--        <link rel="stylesheet" href="style.css" type="text/css"/>-->

    <div id="header">
        <div id="headerContent" >
        </div>
        <div class="navbar-header">

<!--            <a class="navbar-brand" href="#"> Welcome --><?php //echo $_SESSION['username'];?><!-- </a>-->

        </div>
        <div class="nav" style="font-family: Serif;font-size: 18px;">
            <ul>



                <li class="dropdown" id="nott">
                    <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius: 10px"></span>
                        Notifications
                        <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                        <span class="badge">
                            <?php
                            include_once ("notification.php");
                            echo count(getNotifications());
                            ?>
                            <span class="caret"></span></span>
                    </a>

                    <ul class="dropdown-menu">
                        <?php
                        foreach (getNotifications() as $notification) { ?>
                            <li><a class="dropdown-item" href="#"
                                   onclick="markNotificationAsRead('<?php echo $notification["id"] ?>')">
                                    <?php echo $notification['message'] . " on " . $notification['date']; ?></a></li>
                            <?php
                        }
                        ?></ul></li>
<!--                <li><a  href="Managerindexpage.php">Home</a></li>-->
                <li><a  href="WorkStatus.php">Renovations</a></li>

                <li><a href="EmployeePage.php">Assign work</a></li>
                <li><a href="printworkstatuspage.php">Print workRecords</a></li>

                <li><a style="color: #f5c6cb" href="EmployeePage.php">Assign work</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
                <li><a href="ManagerLogout.php">Log out</a></li>


            </ul>
        </div>
    </div>

</header>

	<div class="row" style="">
	<h2 style="font-family:sans-serif;margin-left: 10%; color:#2b669a;margin-top: 60px">Estate Department Employees:</h2>
        <br><br><br>
	<table  class="table table-stripped table-bordered table-condensed table-sm table-hover" id="tab">

		<tr class="thead-dark">
            <th>No.</th>
            <th>Name</th>
            <th>empID</th>
			<th>PhoneNumber</th>
			<th>Email</th>
			<th>Status</th>
			<th>Assign</th>

		</tr>
		<?php
		$conn =  mysqli_connect("localhost", "root", "", "project");
		if($conn-> connect_error){
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT empID ,empName, phone, emp_status, email from employees";
		$result =  $conn-> query($sql);
		if($result-> num_rows > 0){
			$i=1;
			while($row = $result-> fetch_assoc()) { ?>


                <tr>
                    <td> <?php echo $i; ?></td>
                    <td> <?php echo $row['empName']; ?></td>
                    <td><?php echo $row['empID']; ?></td>
                    <td> <?php echo $row['phone']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['emp_status']; ?></td>

                    <td> <input type="checkbox" <?php echo $row['emp_status']=='ASSIGNED'? 'checked': ''; ?>
                                onclick="updateStatus(<?php echo "'" .$row['empID']."'";?> ,
                                <?php echo "'" .$row['emp_status']."'";?>)" ></td>
                </tr>

        <?php
				$i++;
			}

			echo '<div style="float: right; margin-right: 20px; margin-top:">'.'</div>';
				echo '</form>';
			echo '</table>';
		}
		else{
			echo "0 result";
		}
		$conn-> close();
		?>
	</table>
    </div>

    <br><br><br><br>
<a href="AddEmployee.php" style="font-family: 'sans-serif';font-size: 25px; float: right;">Add Employee</a>

    <form action="EmployeePage.php" method="POST">
        <p style="color: #2b669a;font-family:sans-serif;font-size: 20px;">Assign Work To a free Employee(PENDING)</p>
        <select  class="form-control" name="jobs" id="" style="width: 400px">
        <?php

        $conn2 =  mysqli_connect("localhost", "root", "", "project");
        if($conn2-> connect_error){
            die("Connection failed:". $conn2-> connect_error);
        }
        $sql2 = "SELECT * from app";
        $result2 =  $conn2-> query($sql2);

        if($result2->num_rows>0){
        while($row2 = $result2-> fetch_assoc()) {

            echo "<option value='".$row2['categoryName']." ".$row2['propertyName']." ".$row2['damage']."'>
             ".$row2['categoryName']." ".$row2['propertyName']." ".$row2['damage']."</option>";
        }
        }
        ?>


        </select>

        <br><br>


        <select class="form-control" name="employee" id="" style="width: 400px">
            <?php

            $conn3 =  mysqli_connect("localhost", "root", "", "project");
            if($conn3-> connect_error){
                die("Connection failed:". $conn3-> connect_error);
            }
            $sql3 = "SELECT * from employees";
            $result3 =  $conn3-> query($sql3);

            if($result3->num_rows>0){
                while($row3 = $result3-> fetch_assoc()) {

                    echo "<option value='".$row3['empID']."'>
             ".$row3['empID']." ".$row3['empName']."
             
             
             </option>";
                }
            }
            ?>


        </select>

        <br>
        <input  class="btn btn-info" type="submit" name="submit" value="Submit" style="width:150px;margin-left: 90px;">


    </form>

<?php
        if(isset($_POST['submit'])) {


            $job = $_POST['jobs'];
            $employee = $_POST['employee'];

            $status = "ASSIGNED";

            $conn4 = mysqli_connect("localhost", "root", "", "project");
            if ($conn4->connect_error) {
                die("Connection failed:" . $conn4->connect_error);
            }


            $sql7 = "SELECT * FROM employees WHERE emp_status= '" . $status . "' AND empID= '" . $employee . "'";
            $result7 = $conn4->query($sql7);

            if ($result7->num_rows > 0) {

                echo "<script>window.alert('Employee Selected is Already Assigned')</script>";
            } else {


                $sql5 = "UPDATE employees SET emp_status ='" . $status . "' WHERE empID = '" . $employee . "'";

                if (mysqli_query($conn4, $sql5)) {

                    $sql6 = "UPDATE employees SET jobAssigned ='" . $job . "' WHERE empID = '" . $employee . "'";

                    if (mysqli_query($conn4, $sql6)) {

                        //include "db_Connection.php";

                        $statuses="Inprogress";

                      //  $db = new Db_Connect();

                        $getEmployee ="Select 	empName from project.employees where empID = ?";

                        if($rslt=mysqli_query($conn4,$getEmployee)){

//                            $rungetemployee = $db->connect()->prepare($getEmployee);
//                            $rungetemployee->execute([$employee]);
                            while($gett=mysqli_fetch_assoc($rslt)) {

                                $name = $gett['empName'];


                                $createWorkStatus = "INSERT INTO project.workstatus(jobDescription,Work_status,Done_by,empID,Day) VALUES 
                            ('$job','$statuses','$name','$employee',NOW())";

                                $run = $db->connect()->exec($createWorkStatus);

                                if($run){
                                    $delete = "DELETE FROM project.app where ";

                                }
                            }

                            header('location:EmployeePage.php?msg=job assigned');


                        }

                    } else {

                        die("Error:");
                    }
                } else {
                    die("Error2:");

                }

               // $now = date('Y-m-d');



            }
        }

?>




<!-- <script type="text/javascript">
	$('#tab').ready( function(){
		 $('td').attr("class", 'cells');
		  $(.cells).click(function (event) {
            emp_status.val = "ASSIGNED";

        });

	});
	
</script> -->
</body>
<?php }?>
<script src="../student/axios/axios.min.js"></script>
<script>
    function updateStatus(id, status) {

        axios.get('update_employee_status.php?id='+ id +'&status='+status)
            .then(function (data) {
                console.log(data.data);
                window.location.href ="http://localhost/Estates-System/manager/EmployeePage.php";
            }).catch(function (err) {
            console.log(err)
        })
    }
</script>
    <script src="../axios/axios.min.js"></script>
<script src="jQuery/jquery-2.2.4.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

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
<script type="application/javascript">
    <?php
    header("refresh:5;url=Managerindexpage.php");

    ?>
</script>

	

</html>
