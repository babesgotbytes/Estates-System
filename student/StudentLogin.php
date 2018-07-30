<?php

session_start();

include_once 'db_Connection.php';


class getUsers extends Db_Connect{

//attributes to login
	private $username;
	private $pass;

	public function __construct($username,$pass){
		$this->username=$username;
		$this->pass=$pass;
		

	}

	//authentication methods

	public function authenticateUser(){

			

			//SQL query to search if username exists
			$query ="SELECT * FROM PROJECT.student WHERE name= ? OR email= ?";

			//connect to d
			$run_query=$this->connect()->prepare($query);

			//execute query
			$run_query->execute([$this->username,$this->username]);

			//get if there is a user in db
			if($run_query->rowCount()<1){


					//if not found echo out some error js
					echo "<script>alert('Username or Email Not Found')</script>";
					echo "<script>window.open('StudentLoginpage.php','_self')</script>";

			}else{

					//if a user is found 
					if($row = $run_query->fetch(PDO::FETCH_ASSOC)) {
						
						//dehash the password and verify the password
						$dbpass = $row['pwd'];

							$dehash=password_verify($this->pass,$dbpass);

							//if it does not match
							if(!$dehash){

										//echo some error and open the login window
									echo "<script>alert('Password Incorrect')</script>";
									echo "<script>window.open('StudentLoginpage.php','_self')</script>";
							}
							else
								if($dehash){

									//if passwords match

								//create sessions
							$_SESSION['username']=$row['name'];
							$_SESSION['email']=$row['email'];
							$_SESSION['id']=$row['id'];
							$_SESSION['regno']=$row['regno'];
							
							
							//show some success nofication and open the index window
							//echo "<script>alert('Login Successful')</script>";

							header("Location: Studentprofile.php?msg=logged in Successfully");



							}
					}
				}


						
			


	}
 }

if(isset($_POST['StudentLogin'])){

	$username=$_POST['username'];
	$pass=$_POST['password'];

//create an object of the class with its parameters
	$allow = new getUsers($username,$pass);

//call method to authenticate user with its parameters
	$allow->authenticateUser();

}