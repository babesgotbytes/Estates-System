<?php
include_once "Studentprofile.php";
 class application extends Db_Connect
 {

     private $category;
     private $categoryname;
     private $propertyname;
     private $damage;

     /**
      * Application constructor.
      * @param $category
      * @param $categoryname
      * @param $propertyname
      * @param $dsamage
      */
     public function __construct($category, $categoryname, $propertyname, $damage)
     {
         $this->category = $category;
         $this->categoryname = $categoryname;
         $this->propertyname = $propertyname;
         $this->damage = $damage;
     }

   public function sendapp()
     {
        $submitapp = new Application($this->category,$this->categoryname,$this->propertyname,$this->damage);

        $sql ="INSERT INTO project.app(category,categoryName,propertyName,damage) VALUES ('$this->category','$this->categoryname','$this->propertyname','$this->damage')";
            $insert_data = $this->connect()->exec($sql);
            header("Location:Studentprofile.php?msg=submitted successfully");
         var_damp($this->category,$this->categoryname,$this->propertyname,$this->damage);

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


        $insert_info = new Application($cat, $catN, $pro, $dam);
}