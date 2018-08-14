<?php
require_once 'db_Connection.php';



function getNotifications()
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    if(!$connect){
        die("connection failed");
    }
    $sql = "SELECT * from notification where notify_status='0' ";
    $result = mysqli_query($connect, $sql);
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

//    mysqli_close($connect);
    return ($data);
}

function markAsRead(){
     if (isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
         $connect = mysqli_connect("localhost", "root", "", "project");
         if(!$connect){
             die("connection failed");
         }
         $sql = "update notification set notify_status='1' WHERE  id = '". $id ."'";
         $result =mysqli_query($connect,$sql);
         if(mysqli_num_rows($result) > 0){
             echo "record updated";
         }else{
             echo  "failed";
         }
     }

}

markAsRead();

?>
