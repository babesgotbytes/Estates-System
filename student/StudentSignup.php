<?php
//include our database connection file
include_once 'db_Connection.php';

//extend to the database
class NewAccount extends Db_Connect{
//parameters to work on...Remember information hiding and /or encapsulation
private $username;//user name from form
private $email;//email of the user from form
private $pwd;//password of the user
private $c_pwd;//just to confirm the password from form
private $hashed_pwd;//the hashed password
private $hashed_c_pwd;//the hashed confirm password
private $time;//time of account creation ... system generated 
private $regno;//registration number or worker number from form

//constructor with all parameters... MUST Be Public

public function __construct($username,$email,$pwd,$c_pwd,$hashed_pwd,$hashed_c_pwd,$time,$regno){



	$this->username=$username;
	$this->email=$email;
	$this->pwd=$pwd;
	$this->c_pwd=$c_pwd;
	$this->hashed_pwd=$hashed_pwd;
	$this->hashed_c_pwd=$hashed_c_pwd;
	$this->time=$time;
	$this->regno=$regno;

}
//to verify if the email entered by user is alredy used
private function userNameTaken($user){


	$query="SELECT * FROM PROJECT.student WHERE name=?";
	$pre=$this->connect()->prepare($query);
	$pre->execute([$user]);
	$rows=$pre->rowCount();
 
	if ($rows>0) {
		
		return true;
	}else{
		return false;
	}
}

//method that creates the Account with all Parameters as use in construtor
public function createNewAccount(){
$errors = new NewAccount($this->username,$this->email,$this->pwd,$this->c_pwd,$this->hashed_pwd,$this->hashed_c_pwd,$this->time,$this->regno);
//pattern of a valid email to be used in preg_match
	$pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

	//verify if the passwords has more than 8 characters
    if(strlen($this->pwd)<8){
        echo "<script> alert('Password should be a minimum of 8 characters')</script>";
        echo "<script>window.open('StudentSignupPage.php','_self')</script>";
    }
        else

	//verify if the passwords match

	if ($errors->userNameTaken($this->username)==false) {
		if(password_verify($this->pwd,password_hash($this->pwd,PASSWORD_DEFAULT)) != password_verify($this->c_pwd,password_hash($this->c_pwd,PASSWORD_DEFAULT))){

			//javascript code to alert incase passwords do not match
				echo "<script>alert('Password Do Not Match')</script>";
				echo "<script>window.open('StudentSignupPage.php','_self')</script>";
				exit();
	
		}else

			//verify if email is valid
		if(!preg_match($pattern, $this->email)){

				echo "<script>alert('Invalid Email')</script>";
				echo "<script>window.open('StudentSignupPage.php','_self')</script>";
				exit();

		}

		else{

			//insertion query

			$insert="INSERT INTO PROJECT.student(name,regno,email,pwd,day) VALUES ('$this->username','$this->regno','$this->email','$this->hashed_pwd','$this->time')";

			//calls connect method in dtabbase connection class and execute the query
			$insert_results=$this->connect()->exec($insert);


			//notify success in account creation...Java Script
			echo"<script>alert('Account Created Sucessfully')</script>";
			echo"<script>window.open('StudentLoginpage.php','_self')</script>;";


		}
	}else{
	echo "<script>alert('The user Name is taken')</script>";
	echo "<script>window.open('StudentSignup.php','_self')</script>";
	exit();
}

			
}

//destructer of the class that ends database connection

public function __destruct(){

}

}

//the action code
//create the account
if(isset($_POST['submit'])){


	//method to get current date and time



	//get my time zone
	 	function getTheCurrentDate(){

}

	$inusername=$_POST['username'];
	$inemail=$_POST['email'];
	$regNo=$_POST['ID'];
	$inpwd=$_POST['password'];
	$inc_pwd=$_POST['confirm-password'];
	//$regno=$_POST['regno'];

     if(($inusername=="")||($inemail=="")||($inpwd=="")|| ($inc_pwd=="") || ($regNo=="")){


         echo "<script>alert('All fields are required')</script>";
         echo "<script>window.open('StudentSignupPage.php','_self')</script>";
         exit();

     }
     

	//hash and salt the passwords
	$hashedPwd = password_hash($inpwd,PASSWORD_DEFAULT);
	$hashedinc_Pwd = password_hash($inc_pwd,PASSWORD_DEFAULT);

	//get the date and time the account was created
	$timeCreated=getTheCurrentDate();

//create the class object and pass in the constructer values in their order
	//$username,$email,$pwd,$c_pwd,$hashed_pwd,$hashed_c_pwd,$time,$regno
	$myAccount = new NewAccount($inusername,$inemail,$inpwd,$inc_pwd,$hashedPwd,$hashedinc_Pwd,$timeCreated,$regNo);

//call to the method that create user and pass in values from the html form
	$myAccount->createNewAccount();
}