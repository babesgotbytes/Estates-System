<?php
include_once "AddEmployee.php";
class AddEmployee1 extends  Db_Connect
{
    private $empname;
    private $phone;
    private $email;

    /**
     * AddEmployee constructor.
     */
    public function __construct($empname, $phone, $email)
    {
        $this->empname = $empname;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function addEmployee()
    {

        $addEmp = new Application($this->empname, $this->phone, $this->email);

        $sql = "INSERT INTO PROJECT.employees(empName,phone,email) VALUES ('$this->empname','$this->phone','$this->email')";
        $insert_data = $this->connect()->exec($sql);
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
        }


