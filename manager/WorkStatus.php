<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Work Status</title>
</head>
<body class="container">
<style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        margin-left: 3%;
        margin-top: 80px;

    }
    th{
        background-color: #000000;
        color:white;
    }
    tr:n*th-child(even) {background-color: #f2f2f2;}
</style>
<table>
    <tr>
        <th>No.</th>
        <th>CategoryName</th>
        <th>PropertyName</th>
        <th>Damage</th>
        <th>Work status</th>
        <th>Report_date</th>
        <th>Done_by</th>
<!--        <th>Duration</th>-->
    </tr>

<?php


		$conn =  mysqli_connect("localhost", "root", "", "project");
		if($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }
                    $sql = "SELECT categoryName, propertyName,damage,status,Day FROM PROJECT.app";
                    $result = $conn->query($sql);



                        if ($result->num_rows > 0 ) {
$i = 1;
while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td> <?php echo $i; ?></td>
        <td> <?php echo $row['categoryName']; ?></td>
        <td><?php echo $row['propertyName']; ?></td>
        <td> <?php echo $row['damage']; ?></td>
        <td> <?php echo $row['status']; ?></td>
        <td> <?php echo $row['Day']; ?></td>

        <?php
        $quer= "SELECT empName FROM PROJECT.employees";
        $data = $conn->query($quer);
        if ($data->num_rows > 0 ) {
        while ($row = $data->fetch_assoc()) { ?>

        <td> <?php echo $row['empName']; ?></td>
        <?php }
        }

        ?>


        <?php
       $i++;
        }

        }
?>


    </tr>

</table>

</body>
</html>




























