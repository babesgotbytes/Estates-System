



<?php
 
include('db_Connection.php');
 
if(isset($_POST['view'])){
 
// $con = mysqli_connect("localhost", "root", "", "project");
 
if($_POST["view"] != '')
 
{
   $update_query = "UPDATE report SET report_status = 1 WHERE report_status=0";
    $run_query=$this->connect()->prepare($query);
}
 
$query = "SELECT * FROM report ORDER BY report_id DESC LIMIT 5";
$result = mysqli_query($run_query, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '
  <li>
  <a href="#">
  <strong>'.$row["category"].'</strong><br />
  <small><em>'.$row["damage"].'</em></small>
  </a>
  </li>
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
 
$status_query = "SELECT * FROM report WHERE repoert_status=0";
$result_query = mysqli_query($run_query, $status_query);
$count = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
 
echo json_encode($data);
}
?>

