<?php
include_once 'db_Connection.php';

class ForgotPass extends Db_Connect{

	private $email;

	public function __construct($email){

		$this->email=$email;


	}

	protected function getUserEmail(){

		//to verify if the email entered by user is alredy used


	$pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

	if(!preg_match($pattern, $this->email)){

				echo "<script>alert('Invalid Email')</script>";
				echo "<script>window.open('Managerforgotpwdpage.php','_self')</script>";
				exit();

		}else{


	$query="SELECT * FROM PROJECT.manager WHERE email=?";
	$pre=$this->connect()->prepare($query);
	$pre->execute([$this->email]);
	$rows=$pre->rowCount();
 
	if ($rows>0) {
		
		return $this->email;
	}else{

		return false;
		}

	}
}


public function senCodeToEmail(){

$getmail = ForgotPass($this->email);
if($getmail->getUserEmail()==true){

		echo "<script>alert('Invalid Mail Format')</script>";
		echo "<script>window.open('Managerforgotpwdpage.php','_self')</script>";

}

else
if($getmail->getUserEmail()!=$this->email){

		echo "<script>alert('Email not found')</script>";
		echo "<script>window.open('Managerforgotpwdpage.php','_self')</script>";

}
else
if($getmail->getUserEmail()==$this->email){

	
}

}

//destruction method
public function __destruct(){


}
}

//added this class on the same file  coz we cannot send form  action on 2 different pages

class SendCode extends ForgotPass {

		private $email;

		public function __construct($email){

			$this->email= $email;
		}

		public function sendConfirmMail($email){

			$this->email=$email;
			$subject="Reset Password";
			$recipient=$this->getUserEmail($this->email);

			//body of the mail from with link to password reset page
			$body='To reset your password"<a href="http://127.0.0.1/ManagerReset_password.php>Clic Here</a>" and reset. Dont Reply';


			$send= mail($recipient, $subject, $body,'From: root@locolhost.com');

			if(!$send){
				//will be removed if mail function works
				echo "<script>alert('Mail not Send')</script>";
				//echo "<script>window.open('forgotpwd.php','_self')</script>";
			}

			else{
					//will be removed if mail function works
				echo "<script>alert('Mail Send')</script>";
				echo "<script>window.open('ManagerLogin.php','_self')</script>";
			}

		}

		public function __destruct(){


		}
	}


if(isset($_POST['forgotpwd'])){

	$inemail = $_POST['email'];

	$forgot = new Confirmemail($inemail);
	$forgot ->sendConfirmMail($inemail);

}