<!DOCTYPE html>
<html>
<head>
	<title>Estate Department Employees</title>
	<style type="text/css">
	table{
		border-collapse: collapse;
		width: 70%;
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
<body>
	<div>
	<h1 style="margin-left: 30%;">Estate Department Employees:</h1>
	<table id="tab">
		<tr>
			<th>Name</th>
			<th>PhoneNumber</th>
			<th>Email</th>
			<th>Status</th>

		</tr>
		<?php
		$conn =  mysqli_connect("localhost", "root", "", "project");
		if($conn-> connect_error){
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT empName, phone, emp_status, email from employees";
		$result =  $conn-> query($sql);
		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["empName"]."</td><td>". $row["phone"]."</td><td>".$row["email"]."</td><td>".$row["emp_status"]."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$conn-> close();
		?>
	</table>
	</body>
<script type="text/javascript">
	$('#tab').ready( function(){
		 $('td').attr("class", 'cells');
		  $(.cells).click(function (event) {
            emp_status.val = "ASSIGNED";

        });

	});
	
</script>
</html>