<?php
include_once "db_Connection.php";
class complain extends Db_Connect
{
    private $comptype;
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
    public function __construct($complain,$categ, $categname, $propname, $damag,$messo)
    {
        $this->comptype=$complain;
        $this->category = $categ;
        $this->categoryname = $categname;
        $this->propertyname = $propname;
        $this->damage = $damag;

        $this->message = $messo;
    }

    public function sendcomp()
    {

        $submitcomp = new complain($this->comptype,$this->category,$this->categoryname,$this->propertyname,$this->damage,$this->message);
        // $Message=" 'The' .$propertyname .'of' .$categoryname. 'in the' .$category.' is'. $damage";

        $sql ="INSERT INTO project.complain(comType,category,categoryName,propertyName,damage,day) VALUES ('$this->comptype','$this->category','$this->categoryname','$this->propertyname','$this->damage', now())";
        $this->connect()->exec($sql);

        $msg = "INSERT INTO project.notify(message,day) VALUE ('$this->message'now())";
        $this->connect()->exec($msg);

        header("Location:StudentMakeCompainPage.php?msg=submitted successfully");


    }
}
if(isset($_POST['submit'])) {
    $com = $_POST['Complain'];
    $cat = $_POST['Category'];
    $catN = $_POST['cName'];
    $pro = $_POST['pName'];
    $dam = $_POST['Damage'];
    $messag = 'The ' . $_POST['Damage']  . $_POST['pName'] . ' of ' .$_POST['cName']. 'is'.$_POST['Complain'];

    $insert_info = new complain($com, $cat, $catN, $pro, $dam, $messag);
    $insert_info->sendcomp();

}