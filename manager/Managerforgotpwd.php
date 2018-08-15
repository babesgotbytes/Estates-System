<?php
include_once 'db_Connection.php';

class ForgotPass extends Db_Connect{

    private $email;

    public function __construct($email){

        $this->email=$email;


    }

    private function  validatemail($email){


        $pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        if(!preg_match($pattern, $email)){

            return true;


        }else{
            return false;

        }

    }


    public function resetPassword(){

        $validate= new ForgotPass($this->email);

        if($validate->validatemail($this->email)==true){

            echo "<script>alert('Invalid Email')</script>";
            echo "<script>window.open('Managerforgotpwdpage.php','_self')</script>";
            exit();
        }else
        {
            $subject="RESET PASSWORD";
            $message= "To reset your password<a href='http://127.0.0.1/Estates-System/manager/ManagerResetpwd.php'>Click here </a> and reset. Dont Reply'"    ;

            $token = "qwertyuiopasdfghjklzxcvbnm0123456789";
            $token=str_shuffle($token);
            $token=substr($token,2,12);

            $getEmail = "SELECT email From PROJECT.manager WHERE email = ?";
            $rungetEmail=  $this->connect()->prepare($getEmail);
            $rungetEmail->execute([$this->email]);


            if($rungetEmail->rowCount()<1){

                echo "<script>window.alert('Email Not Found')</script>";
                echo "<script> window.open('Managerforgotpwdpage.php','_self')</script>";
            }else {

                $updateToken = "UPDATE PROJECT.manager  SET token=?, tokenexpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE ) WHERE email=?";
                $runupdateToken=$this->connect()->prepare($updateToken);

                $runupdateToken->execute([$token,$this->email]);
            }

            require_once "../PHPMailer/PHPMailerAutoload.php";
            try {
                $mail = new PHPMailer(); //create a new object
                $mail->IsSMTP(); //enable SMTP
                $mail->SMTPDebug  =0; //debugging: 0 errors and messages, 0 messages only. Made 0 for production
                $mail->SMTPAuth   = true; //authentication enabled
                // $mail->SMTPSecure = "ssl"; //secure transfer enabled required for gmail. Do not uncommet this due to gmail security options.
                $mail->Host       = "smtp.gmail.com";
                $mail->Port       = 25; //or try 587
                $mail->IsHTML(true);
                $mail->AddAddress($this->email);
                $mail->Username="josephinemachage71@gmail.com";
                $mail->Password="mercymeGod";
                $mail->SetFrom('josephinemachage71@gmail.com','Estates Departement');
                $mail->AddReplyTo("josephinemachage71@gmail.com","Estates Department");
                $mail->Subject    = $subject;
                $mail->MsgHTML($message);
                $mail->Send();

                header("location:Managerforgotpwdpage.php");

            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }


        }

    }

//destruction method
    public function __destruct(){


    }
}

//added this class on the same file  coz we cannot send form  action on 2 different pages



if(isset($_POST['forgotpwd'])){

    $inemail = $_POST['email'];

    $forgot = new ForgotPass($inemail);
    $forgot ->resetPassword();


}