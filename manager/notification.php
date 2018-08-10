

<?php
require_once Studentprofile.php;

if(isset($_POST["view"])) {
    $connect = mysqli_connect("localhost", "root", "", "project");

    $sql = "SELECT * FROM PROJECT.notification ORDER BY Id DESC LIMIT 5";
    $result = mysqli_query($connect, $sql);
    $output = '';
    if (mysqli_num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<li><a href="#" >$Message</a></li>';
        }
    } else {
        $output .= '<li><a href="#" >No Notification found</a></li>';

    }
    $sql_1 = "SELECT * PROJECT.notification WHERE notify_status =0";
    $result_1 = mysqli_query($connect, $sql_1);
    $count = mysqli_num_rows($result_1);
    $data = array('notifiaction' => $output,
        'unseen_notifiction' => $count);


}
?>
