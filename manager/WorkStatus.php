



<?php
include "db_Connection.php";
class WorkStatus extends Db_Connect {

        public function __construct()
        {

        }


    public function workStatus(){

            $status = "Inprogress";
        $getRecords = "SELECT * FROM project.workstatus";

        $results=$this->connect()->prepare($getRecords);
        $results->execute();
        if($results->rowCount()<1){

            ?>
<h2>No Records</h2>

<?php


        }

        else{

           ?>
            <table class="table table-stripped table-borderd table-condensed table-sm table-hover">
                <tr class="thead-dark">
                    <th>No.</th>
                    <th>Job Description</th>
                    <th> Date</th>
                    <th>Done By</th>
                    <th> Employee ID</th>
                    <th> Work status</th>


                </tr>
                    <?php
                        while($rows = $results->fetch()) {

                            $no = $rows['Id'];
                            $job = $rows['jobDescription'];
                            $day = $rows['Day'];
                            $emp = $rows['Done_by'];
                            $emp_no = $rows['empID'];
                            $wkstatus= $rows['Work_status'];


                            ?>
                            <tr>
                                <td><?php echo $no ;?></td>
                                <td><?php echo $job;?></td>
                                <td><?php echo $day;?></td>
                                <td><?php echo $emp;?></td>
                                <td><?php echo $emp_no;?></td>
                                <td>
                                    <?php echo $wkstatus;?>
                                    <input type="checkbox" <?php echo $rows['Work_status']=='Complete'? 'checked': ''; ?>
                                           onclick="updateStatus(<?php echo "'" .$rows['empID']."'";?> ,
                                           <?php echo "'" .$rows['Work_status']."'";?>)">

                                </td>

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
            margin-left: 500px;
            padding: 0;
        }
        .nav ul li{ list-style: none; }
        .nav ul li a{
            text-decoration: none;
            float: left;
            display: block;
            padding: 10px 20px;
            color: white;
        }
        .nav ul li a:hover{color: #000000;}
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
                <li><a style="color: #f5c6cb" href="Managerindex.php">Home</a></li>
                <li><a href="StoreKeeperSignupPage.php">Register storekeeper</a></li>
                <li><a href="EmployeePage.php">Assign work</a></li>
                <li><a  href="WorkStatus.php">Renovations</a></li>
                <li><a href="ManagerResetPasswordPage.php">reset password</a></li>
                <li><a href="ManagerLogout.php">Log out</a></li>


                <div class="dropdown-menu">
                    <a href="#" class="dropdown-toggle" id="dropdown" data-toggle="dropdown"><span class="label label-pill label-danger count"></span>
                        Notifications
                        <span class="glyphicon glyphicon-bell"></span>
                        <span class="badge">
                            <?php
                            include_once ("notification.php");
                            echo count(getNotifications());
                            ?>
                            <!--                            <span class="caret"></span></span>-->
                    </a>

                    <!--                    <ul class="dropdown-menu">-->
                    <?php
                    foreach (getNotifications() as $notification) { ?>
                        <li><a class="dropdown-item" href="#"
                               onclick="markNotificationAsRead('<?php echo $notification["id"] ?>')">
                                <?php echo $notification['message'] . " on " . $notification['date']; ?></a></li>
                        <?php
                    }
                    ?>
                    <!--            </ul>-->

                </div>

            </ul>
        </div>
    </div>


</header>


<style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        color: #000000;
        font-family: SansSerif;
        font-size: 18px;
        text-align: left;
        margin-left: 3%;
        margin-top: 80px;
        margin-right: 3%;


    }
    th{
        background-color: #0056b3;
        color:white;
    }
<<<<<<< HEAD
    tr:*th-child(even) {background-color: #f2f2f2;}
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
=======
    td{
        background-color: whitesmoke;
>>>>>>> 1bef0c72aa9667b0443a80e741124273e6ef1225

    }
    tr:nth-child(even) {background-color: #ccccff;}
</style>
<?php

$getstatus = new WorkStatus();
$getstatus->workStatus();

?>

</table>
<script src="../student/axios/axios.min.js"></script>
<script>
    function updateStatus(id, status) {

        axios.get('update_work_status.php?id='+ id +'&status='+status)
            .then(function (data) {
                console.log(data.data);
                window.location.href ="http://localhost/Estates-System/manager/WorkStatus.php";
            }).catch(function (err) {
            console.log(err)
        })
    }
</script>

</body>
</html>




































