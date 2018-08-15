<?php
include_once "db_Connection.php";
 class application extends Db_Connect
 {

     private $category;
     private $categoryname;
     private $propertyname;
     private $damage;
     private $Message;

     /**
      * Application constructor.
      * @param $category
      * @param $categoryname
      * @param $propertyname
      * @param $dsamage
      */
     public function __construct($categ, $categname, $propname, $damag,$messo)
     {
         $this->category = $categ;
         $this->categoryname = $categname;
         $this->propertyname = $propname;
         $this->damage = $damag;
         $this->message = $messo;
     }

   public function sendapp()
     {

        $submitapp = new Application($this->category,$this->categoryname,$this->propertyname,$this->damage,$this->message);
        // $Message=" 'The' .$propertyname .'of' .$categoryname. 'in the' .$category.' is'. $damage";

        $sql ="INSERT INTO project.app(category,categoryName,propertyName,damage) VALUES ('$this->category','$this->categoryname','$this->propertyname','$this->damage')";
         $this->connect()->exec($sql);

         $msg = "INSERT INTO project.notification(message) VALUE ('$this->message')";
         $this->connect()->exec($msg);
         //$sql="INSERT INTO PROJECT.notification(message) VALUES('$this->Message')";
        // $this->connect()->exec($sql);
            //query the last record in the app table then extract the id from the record
         header("Location:Studentprofile.php?msg=submitted successfully");
         //var_damp($this->category,$this->categoryname,$this->propertyname,$this->damage);

     }
 }
if(isset($_POST['submit'])) {
    //if (!isset($_SESSION['username'])) {
       // header('location:Studentprofile.php');
   // } else

        $cat = $_POST['Category'];
        $catN = $_POST['cName'];
        $pro = $_POST['pName'];
        $dam = $_POST['Damage'];
    $messag = 'The '.$_POST['pName'].' of '.$_POST['cName'].' is '.$_POST['Damage'];

        $insert_info = new Application($cat, $catN, $pro, $dam, $messag);
        $insert_info->sendapp();

}