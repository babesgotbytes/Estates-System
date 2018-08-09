<?php

include_once "db_Connection.php";
class Repairs extends Db_Connect{

	private $emp_id;
	private $qnty;
	private $mtrl_nm;
	private $dept_nm;


	public function __construct($emp,$qnty,$mtrl,$dept){

			$this->emp_id=$emp;
			$this->qnty=$qnty;
			$this->mtrl_nm=$mtrl;
			$this->dept_nm=$dept;
	}

	private function getEmployee($emp){

			$search= "SELECT * FROM project.employees WHERE Emp_id = ?";
			$run = $this->connect()->prepare($search);

			$run->execute([$emp]);

			if($run->rowCount()<1){

					return true;

			}

			else
			{

				return false;
			}
	}

	public function doRepairs($today)
	{

		$verify = new Repairs($this->emp_id,$this->qnty,$this->mtrl_nm,$this->dept_nm);

			if($verify->getEmployee($this->emp_id)==true){

						echo "<script>alert('Employee you want to assign doesn't exist')</script>";
						echo "<script>window.open('StoreAssignMaterialspage.php')</script>";

			}

			else{

					$getMtrl = "SELECT * FROM project.materials WHERE material_name = ? AND Dept_name = ?";
					$rungetMtrl = $this->connect()->prepare($getMtrl);
					$rungetMtrl->execute([$this->mtrl_nm,$this->dept_nm]);

					if($rungetMtrl->rowCount()<1){

						echo "<script>alert('Material doesnt exist in the selected department')</script>";
						echo "<script>window.open('StoreAssignMaterialspage.php')</script>";
					}else
						{


						if($row = $rungetMtrl->fetch(PDO::FETCH_ASSOC))

						{

							$availableQnty = $row['Quantity'];
							
								if($availableQnty < $this->qnty){


									echo "<script>alert('The Quantity Assigned exceeds the available quantity of the departement')</script>";

									echo "<script>window.open('StoreAssignMaterialspage.php')</script>";

								}else{


							$updateqnty = "UPDATE project.materials SET Quantity= (Quantity-?)  WHERE material_name=? AND Dept_name= ? ";

							$run = $this->connect()->prepare($updateqnty);

						if($run->execute([$this->qnty,$this->mtrl_nm,$this->dept_nm]))
						{

								$repair="INSERT INTO project.repairs(Dept_name,material_name,Quantity,emp_assign,repair_date) VALUES 
								('$this->dept_nm','$this->mtrl_nm','$this->qnty','$this->emp_id','$today')";

								if($this->connect()->exec($repair)==true){


									 header('location:StoreAssignMaterialspage.php?msg=repairs assigned');
								}
								else
								{

									echo "<script>alert('Unableto Update')</script>";
									echo "<script>window.open('StoreAssignMaterialspage.php')</script>";
								}

						}else
						{

							echo "<script>alert('Unable to Update Quantity')</script>";
						echo "<script>window.open('StoreAssignMaterialspage.php')</script>";
						}

					}

					}

					}

			}
		
	}
}


if(isset($_POST['assign'])){


		
		$employeeID= $_POST['Emp_assign'];
		$qunatity= $_POST['Quantity'];
		$material_name= $_POST['material_name'];
		$department_name= $_POST['category'];
		$today = date('Y-m-d');


		$myRepairs = new Repairs($employeeID,$qunatity,$material_name,$department_name);

		$myRepairs->doRepairs($today);
}