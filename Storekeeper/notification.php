<?php
<<<<<<< HEAD

function meso(){
    $connect = mysqli_connect("localhost", "root", "", "project");
    if(!$connect){
        die("connection failed");}

    $sql = "SELECT * from employees where emp_status='ASSIGNED' ";
    $result1 = mysqli_query($connect, $sql);
    $Message= "Give .'row['empName']'. some materials";
    $sql3="INSERT INTO storekeeper_notice(message) VALUES $Message";
    $result2=mysqli_query($connect,$sql3);


}

meso();

function getNotifications()
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    if(!$connect){
        die("connection failed");
    }
    $sql2 = "SELECT * from storekeeper_notice where notify_status='0' ";
    $result = mysqli_query($connect, $sql2);
    $data=[];
    if (mysqli_num_rows($result) > 0) {
        $index =0;
        while ($row = mysqli_fetch_assoc($result)) {
            $record =array();
            $record['id'] = $row['Id'];
            $record['message'] = $row['message'];
            $record['date'] = $row['day'];
            $data[$index] = $record;
            $index++;
        }
    }

    return ($data);
}

function markAsRead(){
    if (isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $connect = mysqli_connect("localhost", "root", "", "project");
        if(!$connect){
            die("connection failed");
        }
        $sql2 = "update storekeeper_notice set notify_status='1' WHERE  id = '". $id ."'";
        $result =mysqli_query($connect,$sql2);
        if(mysqli_num_rows($result) > 0){
            echo "record updated";
        }else{
            echo  "failed";
        }
    }

}

markAsRead();

?>
=======
session_start();
include("db_Connection.php");

class notify extends Db_Connect{

      private $category;
      private $property;
      private $damage;

      public function __construct($category,$property,$damage){
        $this->category=$category;
        $this->property=$property;
        $this->damage=$damage;
          }
        public function getReport(){


             if(isset($_POST["damage"])){        


                //SQL query to search if report exists
            $query ="SELECT * FROM PROJECT.report WHERE category= ? AND property= ? AND damage=?";

            //connect to db
            $run_query=$this->connect()->prepare($query);

            //execute query
            $run_query->execute([$this->category,$this->property,$this->damage]);

            //get if there is a report in db
            if($run_query->rowCount()<1){


                    //if not found echo out some error js
                    echo "<script>alert('report already made')</script>";
                    echo "<script>window.open('Studentreport.php','_self')</script>";

            }else{

                    //if a user is found 
                    if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

                            $_SESSION['category']=$row['category'];
                            $_SESSION['property']=$row['property'];
                            $_SESSION['report_id']=$row['report_id'];
                            $_SESSION['damage']=$row['damage'];





                    }

               }

        }
    }

?>




















































































































































































<script type="application/javascript">
    $document.ready(function () {
        function load_unseen_notification(view='') {
            $.ajax({url:"notification.php",
                method:"POST",
                data:{view:view},
                datatype:"json",
                success:function (data) {
                    $('.dropdown-menu').html(data.notifiction);
                    if|(data.unseen_notification>0){
                        $('.count').html(data.unseen_notification);
                    }

                }});

        }
        load_unseen_notification();
        $('#application_form').on('submit' ,function (event) {
            event.preventDefault();

        });
    });
</script>
>>>>>>> 347c41e9a2e1b9d0da12067225be5a714104dbd1
