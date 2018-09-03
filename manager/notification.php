<?php
require_once 'db_Connection.php';
class Noty extends Db_Connect
{


    public function getNotifications()
    {
        $status= "PENDING";
        $getNotifications= "SELECT * FROM project.employees WHERE emp_status=?";
        $results = $this->connect()->prepare($getNotifications);
        $results->execute([$status]);
        $rows=$results->rowCount();
        if($rows<1){
            echo "employee is busy";

        }else{
            $number=1;
            while($row=$results->fetch()){

                $job_desc = $row['jobDescription'];
                $emp=$row['Done_by'];

                echo $number." Please Assign  <b>".$emp."</b> Materials for repairing <b>".$job_desc."</b><br>";

                $number++;
            }
        }
        }

//    mysqli_close($connect);
        return ($data);
    }

    function markAsRead()
    {
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $connect = mysqli_connect("localhost", "root", "", "project");
            if (!$connect) {
                die("connection failed");
            }
            $sql = "update notification set notify_status='1' WHERE  id = '" . $id . "'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "record updated";
            } else {
                echo "failed";
            }
        }

    }

markAsRead();
}

?>
