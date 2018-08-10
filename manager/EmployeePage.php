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
