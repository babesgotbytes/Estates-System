<?php
include "db_Connection.php";
class Notify extends Db_Connect {

    public function getAllNotifications(){

        $status= "Inprogress";
        $getNotifications= "SELECT * FROM project.workstatus WHERE Work_status=?";
        $results = $this->connect()->prepare($getNotifications);
        $results->execute([$status]);
        $rows=$results->rowCount();
        if($rows<1){
            echo "No works available currently";

        }else{
            $number=1;
            while($row=$results->fetch()){

                    $job_desc = $row['jobDescription'];
                    $emp=$row['Done_by'];

                    echo $number." Please Assign  <b>".$emp."</b> Materials for repairing <b>".$job_desc."</b><br>";

<<<<<<< HEAD
        }}
    }

?>
















































































































































































=======
                    $number++;
            }
        }
>>>>>>> 1bef0c72aa9667b0443a80e741124273e6ef1225

    }

    public function notificationCount()
    {
        $status= "Inprogress";
        $getNotifications= "SELECT * FROM project.workstatus WHERE Work_status=?";
        $results = $this->connect()->prepare($getNotifications);
        $results->execute([$status]);
        $rows=$results->rowCount();

        echo $rows;
    }

}



?>