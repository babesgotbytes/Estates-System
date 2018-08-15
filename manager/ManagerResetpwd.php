<?php

if(!isset($_GET['email']) && !isset($_GET['token'])){

    header("location:forgotpwdPage.html?msg=please enter email to reset password");
}
else{



    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>reset Password</title>
    </head>
    <body>

    <div class="container container-fluid" style="margin-top: 50px">

        <form action="ManagerResetpwd.php" method="POST">
            <input type="password" name="pass" id="pass" class="form-control" style="width:300px" placeholder="New Password"><br>
            <input type="password" name="cpass" id="cpass" class="form-control" style="width:300px" placeholder=" Conrfirm New Password"><br>
            <button type="submit" class="btn btn-primary mb-2" name="send">Reset Password</button>

        </form>

    </div>
    </body>
    </html>
<?php }?>


<?php
require_once "db_Connection.php";

class NewResetPass extends Db_Connect {

    private $email;
    private $token;
    private $newpass;


    public function __construct($email,$token,$newpass)
    {
        $this->token= $token;
        $this->email=$email;
        $this->newpass=$newpass;

    }

    public function newResetPwd(){

        $search = "SELECT * FROM PROJECT.manager WHERE email=? AND token=? AND token<>'' AND tokenexpire > NOW()";
        $runSearch = $this->connect()->prepare($search);
        if($runSearch->rowCount()>0){

            $newpasshashed=password_hash($this->newpass,PASSWORD_DEFAULT);
            $newtoken = "";
            $updatePass = "UPDATE PROJECT.manager SET password =?,token=? WHERE email =?";
            $runUpdate=$this->connect()->prepare($updatePass);
            $passupdate=$runUpdate->execute([$newpasshashed,$newtoken,$this->email]);
            if($passupdate){

                //redirect tot login
                header("location: ../ManagerloginPage.php?msg=password changed now login with new password");

            }else{
                // redirect to set new pass
                header('location:../ManagerforgotpwdPage.html?msg=unable to change password');
            }

        }


    }

}


// Was the form submitted?
if (isset($_POST["send"])) {
    // Gather the post data
    //$email = $_POST["email"];
    $email =$_GET['email'];
    $token=$_GET['token'];

    $password = $_POST["pass"];
    $confirmpassword = $_POST["cpass"];

    if($password != $confirmpassword){
        echo "<script>alert('Password do not match')</script>";

    }else{

        $resetP = new NewResetPass($email,$token,$password);
        $resetP->newResetPwd();
    }



}

