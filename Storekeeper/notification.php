<?php

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
