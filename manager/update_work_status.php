<?php
//mysql connection to store the concatenated values $results
$conn = mysqli_connect("localhost", "root", "", "project");


$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

if($status == 'Inprogress'){
    $status = 'Complete';
}else if($status == 'Complete'){
    $status = 'Inprogress';
}

//check the connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_error($conn));
}

// Attempt insert query execution
$sql = "UPDATE workstatus SET Work_status ='" . $status . "' WHERE empID = '" . $id ."'";
//	die($sql);

if (mysqli_query($conn, $sql)) {
    echo "success";


    //fetch jobs
    //asign job
} else {
    echo "Error." . mysqli_error($conn);
}

//Close connection
mysqli_close($conn);


?>