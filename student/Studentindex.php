<?php
 class Users extends Db_Connect{

     public function getAllUsers(){
     	$stmt=$this->connect()->query("SELECT * FROM users");
     	while ($row = $stmt->fetch()){
     		$uid =$row['id'];
     		 return $uid;
     	}
     }





 }







?>