<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<title>Estate Department Employees</title>
	<style type="text/css">
	table{
		border-collapse: collapse;
		width: 90%;
		color: #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
		margin-left: 10%;
	
	}
	th{
		background-color: #000000;
		color:white;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body class="container">
	<div class="row" style="">
	<h2 style="font-family: 'Bookman Old Style';margin-left: 10%;">Estate Department Employees:</h2>
        <br><br><br>
	<table id="tab">

		<tr>
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
                                onclick="updateStatus(<?php echo "'" .$row['empID']."'";?> ,<?php echo "'" .$row['emp_status']."'";?>)" ></td>
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
    <form action="EmployeePage.php" method="POST">
        <select  class="form-control" name="jobs" id="" style="width: 200px">
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


        <select class="form-control" name="employee" id="" style="width: 200px">
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
             ".$row3['empID']." ".$row3['empName']."</option>";
                }
            }
            ?>


        </select>

        <br>
        <input  class="btn btn-info" type="submit" name="submit" value="submit">


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
                        header('location:EmployeePage.php?msg=job assigned');

                    } else {

                        die("Error:");
                    }
                } else {
                    die("Error2:");

                }

            }
        }

?>



<a href="AddEmployee.php" style="font-family: 'Arial Black';font-size: 18px; float: right;">Add Employee</a>

<!-- <script type="text/javascript">
	$('#tab').ready( function(){
		 $('td').attr("class", 'cells');
		  $(.cells).click(function (event) {
            emp_status.val = "ASSIGNED";

        });

	});
	
</script> -->
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
	

</body>

</div>

</html>
