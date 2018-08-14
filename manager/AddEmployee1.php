<?php
include_once "db_Connection.php";
class AddEmployee1 extends  Db_Connect
{
    private $empname;
    private $phone;
    private $email;

    /**
     * AddEmployee constructor.
     */
    public function __construct($emname, $phon, $ema)
    {
        $this->empname = $emname;
        $this->phone = $phon;
        $this->email = $ema;
    }

    /**
     * @return mixed
     */
    public function addEmployee()
    {

        $addEmp = new AddEmployee1($this->empname, $this->phone, $this->email);

        $sql = "INSERT INTO PROJECT.employees(empName,phone,email) VALUES ('$this->empname','$this->phone','$this->email')";
         $this->connect()->exec($sql);
        header("Location:EmployeePage.php?msg=submitted successfully");

    }
}

        if(isset($_POST['submit'])) {
            //if (!isset($_SESSION['username'])) {
            // header('location:Studentprofile.php');
            // } else

            $empN = $_POST['Name'];
            $PhoneNo = $_POST['Phone'];
            $EmpEmail = $_POST['Email'];



            $add_emp = new AddEmployee1( $empN, $PhoneNo, $EmpEmail);
            $add_emp->addEmployee();
        }


