<?php


require_once '../student/db_Connection.php';
 class Users extends Db_Connect{

     public function getAllUsers(){
     	$stmt=$this->connect()->query("SELECT * FROM users");
     	while ($row = $stmt->fetch()){
     		$uid =$row['id'];
     		 return $uid;
     	}
     }

     public function connection()
     {
         return $this->connect();
     }





 }

// if (isset($_GET['category_id'])){
//     //query data depending on the category
//
//     switch ($_GET['category_id']){
//         case 'hostel':
//             $user=new Users();
//             $sql="SELECT * FROM hostels";
//
//           $results=  $user->connection()->query($sql);
//
//
//           if ($results->rowCount()>0){
//               echo json_encode($results->fetchAll());
//             }else{
//               echo json_encode(null);
//           }
//
//
//             break;
//
//         case 'lecture_hall':
//             $user=new Users();
//             $sql="SELECT * FROM hostels";
//
//             $results=  $user->connection()->query($sql);
//
//
//             if ($results->rowCount()>0){
//                 echo json_encode($results->fetchAll());
//             }else{
//                 echo json_encode(null);
//             }
//
//
//             break;
//
//         case 'office':
//             $user=new Users();
//             $sql="SELECT * FROM hostels";
//
//             $results=  $user->connection()->query($sql);
//
//
//             if ($results->rowCount()>0){
//                 echo json_encode($results->fetchAll());
//             }else{
//                 echo json_encode(null);
//             }
//
//             break;
//
//         case 'games_sector':
//
//             $user=new Users();
//             $sql="SELECT * FROM hostels";
//
//             $results=  $user->connection()->query($sql);
//
//
//             if ($results->rowCount()>0){
//                 echo json_encode($results->fetchAll());
//             }else{
//                 echo json_encode(null);
//             }
//
//             break;
//
//
//         default:
//             echo "this is the default value";
//             break;
//     }
// }
//
//
//
//
//
//
//
?>