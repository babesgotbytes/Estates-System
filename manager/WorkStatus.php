<?php
include "db_Connection.php";
class WorkStatus extends Db_Connect {

        public function __construct()
        {

        }


    public function workStatus(){

            $status = "Inprogress";
        $getRecords = "SELECT * FROM project.workstatus where work_status= ? ";

        $results=$this->connect()->prepare($getRecords);
        $results->execute([$status]);
        if($results->rowCount()<1){

            ?>
<h2>No Records</h2>

<?php


        }

        else{

           ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Job Description</th>
                    <th> Date</th>
                    <th>Done By</th>
                    <th> Employee ID</th>

                </tr>
                    <?php
                        while($rows = $results->fetch()) {

                            $no = $rows['Id'];
                            $job = $rows['jobDescription'];
                            $day = $rows['Day'];
                            $emp = $rows['Done_by'];
                            $emp_no = $rows['empID'];


                            ?>
                            <tr>
                                <td><?php echo $no ;?></td>
                                <td><?php echo $job;?></td>
                                <td><?php echo $day;?></td>
                                <td><?php echo $emp;?></td>
                                <td><?php echo $emp_no;?></td>

                            </tr>


                          
                            <?php
                        }
        }
    }

}

?>

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
<?php

$getstatus = new WorkStatus();
$getstatus->workStatus();

?>

</table>

</body>
</html>
