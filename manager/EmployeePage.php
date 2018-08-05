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
	<div style="">
	<h1 style="margin-left: 30%;">Estate Department Employees:</h1>
	<table id="tab">
		<tr>
			<th>No.</th>
			<th>Name</th>
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
		$sql = "SELECT empName, phone, emp_status, email from employees";
		$result =  $conn-> query($sql);
		if($result-> num_rows > 0){
			$i=1;
			while($row = $result-> fetch_assoc()) {
				echo '<tr>';
				echo '<td>'.$i.'</td><td>'. $row['empName'].'</td><td>'. 
				$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['emp_status'].'</td>'.'<form action="" method="POST">'.'<td style="text-align: center;">'.'<input type="checkbox" value="ASSIGNED" name="check_list[]" />'.'</td>';

				echo '</tr>';
				$i++;
			}

			echo '<div style="float: right; margin-right: 20px; margin-top:">'.'<input type="submit" name="submit" value="submit" />'.'</div>';
				echo '</form>';
			echo '</table>';
		}
		else{
			echo "0 result";
		}
		$conn-> close();
		?>
	</table>
<<<<<<< HEAD
	</body>
<script type="text/javascript">
	$('#tab').ready( function(){
		 $('td').attr("class", 'cells');
		  $(.cells).click(function (event) {
            emp_status.val = "ASSIGNED";

        });

	});
	
</script>
=======
	

</body>
<?php  
if(isset($_POST['submit'])){



	// used to run PHP script on submit
	if(!empty($_POST['check_list'])) { // checking the value is not empty
		// Loop to store values of individual checked checkbox.
		$results = "";
		foreach($_POST['check_list'] as $selected) {
		// Here $results holding all the check box values as a string
		$results .= $selected;	
		//if you need space for each value use $results .= $selected . " ";
		}
	
	//mysql connection to store the concatenated values $results
	$conn =  mysqli_connect("localhost", "root", "", "project");
 
	//check the connection
	if($conn === false) {
		die("ERROR: Could not connect. " . mysqli_error($conn));
	}
	
	// Attempt insert query execution
	$sql = "UPDATE employees set emp_status ='ASSIGNED' WHERE empID = ";
	if(mysqli_query($conn, $sql)) {
		echo "updated successfully";
	} else {
		echo "Error." . mysqli_error($conn);
	}
 
	//Close connection
	mysqli_close($conn);
	}
}

?>
</div>
>>>>>>> 22867603303c817d7d844f0a711b1c95397ddb97
</html>