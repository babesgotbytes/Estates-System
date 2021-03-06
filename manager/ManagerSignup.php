<?php
//include our database connection file
include_once 'db_Connection.php';

class NewAccount extends Db_Connect{

	private $username;
	private $email;
	private $pwd;
	private $c_pwd;
	private $time;
	private $id;

	public function __construct($username,$email,$pwd,$c_pwd,$time,$id){

		$this->username=$username;
		$this->email=$email;
		$this->pwd=$pwd;
		$this->c_pwd=$c_pwd;
		$this->time=$time;
		$this->id=$id;
	



	}


	private function userNameTaken($user)
	{

		$query="SELECT * FROM PROJECT.manager WHERE name=?";
	 	$pre=$this->connect()->prepare($query);
	 	$pre->execute([$user]);
	 	$rows=$pre->rowCount();
	 
	 	if ($rows>0) {
			
	 		return true;
	 	}else{
	 		return false;
	 	}

	}

	private function staticIDAvailable($id)
    {

        $query="SELECT * FROM PROJECT.manager WHERE staticID=?";
        $pre=$this->connect()->prepare($query);
        $pre->execute([$id]);
        $rows=$pre->rowCount();

        if ($rows<1) {

            return true;
        }else{
            return false;
        }

    }

	private function verifyPassword($pass1,$pass2)
	{


				if($pass1!=$pass2){

							return true;
				}else{

					return false;
				}

	}

	private function verifyEmail($email)
	{
			$pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

			if(!preg_match($pattern, $email)){

					return true;
			}else{

				return false;
			}

	}

	public function createNewAccount($hashed_pwd)
	{
			$errors = new NewAccount($this->username,$this->email,$this->pwd,$this->c_pwd,$this->time,$this->id);

			if($errors->verifyEmail($this->email)==true){

					echo "<script>alert('Invalid Email')</script>";
					echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
					exit();
			}else 
				if($errors->verifyPassword($this->pwd,$this->c_pwd)==true){

					echo "<script>alert('Password Do Not Match')</script>";
					echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
					exit();

				}else
					if($errors->userNameTaken($this->username)==true){

					echo "<script>alert('User Name is Already Taken')</script>";
					echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
					exit();

					}else
					    if($errors->staticIDAvailable($this->id)){

                            echo "<script>alert('Static ID provided is invalid')</script>";
                            echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
                            exit();
                        }

					else

					{
//
//					    $insert="INSERT INTO PROJECT.manager(name,email,pwd,day) VALUES ('$this->username','$this->email','$hashed_pwd','$this->time')";
//
//					 			//calls connect method in dtabbase connection class and execute the query
//								$insert_results=$this->connect()->exec($insert);
                            $update_user = "UPDATE PROJECT.manager SET name=?, email=?, pwd=?, day=? WHERE staticID=?";
                            $run_update = $this->connect()->prepare($update_user);

                         if($run_update->execute([$this->username,$this->email,$hashed_pwd,$this->time,$this->id])) {


                             //notify success in account creation...Java Script
                             echo "<script>alert('Account Created Sucessfully')</script>";
                             echo "<script>window.open('ManagerLoginpage.php','_self')</script>;";
                         }else
                         {
                             echo "<script>alert('Unable to create account')</script>";
                             echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
                             exit();

                         }

					}

	}

}


if(isset($_POST['submit'])){


 	//method to get current date and time

 	$inusername=$_POST['username'];
 	$inemail=$_POST['email'];
 	$inpwd=$_POST['password'];
 	$inc_pwd=$_POST['confirm-password'];
 	$id = $_POST['satic'];
 	 	//$regno=$_POST['regno'];

      if(($inusername=="")||($inemail=="")||($inpwd=="")|| ($inc_pwd=="") || ($id=="")){


          echo "<script>alert('All fields are required')</script>";
          echo "<script>window.open('ManagerSignupPage.php','_self')</script>";
          exit();

      }
     

// 	//hash and salt the passwords
 	$hashedPwd = password_hash($inpwd,PASSWORD_DEFAULT);


// 	//get the date and time the account was created
 	$timeCreated= date('Y-m-d');

 //create the class object and pass in the constructer values in their order
 	//$username,$email,$pwd,$c_pwd,$hashed_pwd,$hashed_c_pwd,$time,$regno
 	$myAccount = new NewAccount($inusername,$inemail,$inpwd,$inc_pwd,$timeCreated,$id);

// //call to the method that create user and pass in values from the html form
 	$myAccount->createNewAccount($hashedPwd);
 }











