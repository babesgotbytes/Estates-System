<?php

	include "db_Connection.php";

	class Materials extends Db_Connect{

		//private $mtrlid;
		private $mtrlnm;
		private $quantity;
		private $deptnm;

		public function __construct($mtrlnm,$qnty,$dept){

					//$this->mtrlid=$mtrlid;
					$this->mtrlnm=$mtrlnm;
					$this->quantity=$qnty;
					$this->deptnm=$dept;
		}

		private function emptyForm($mtrlnm,$mtrlqnty,$deptnm){

			if(empty($mtrlnm)or empty($mtrlqnty) or empty($deptnm)){

				return true;
			}
				else{

					return false;
				}

		}


		private function getMaterials($mtrl,$dept){

			$search= "SELECT * FROM project.materials WHERE material_name = ? AND Dept_name=?";
			$run = $this->connect()->prepare($search);
			$run->execute([$mtrl,$dept]);

			if($run->rowCount()>0){

				return true;
			}else
			{

				return false;
			}

	}

	private function noMamtrls($mtrls,$depts){

			$get = "SELECT * FROM project.materials WHERE material_name = ? AND Dept_name = ?";
			$runget= $this->connect()->prepare($get);
			$runget->execute([$mtrls,$depts]);
			if($runget->rowCount()<1){

					return true;
			}else
			{

				return false;
			}

	}

		public function insertMaterial(){

				$insert = "INSERT INTO project.materials (material_name,Quantity,Dept_name) VALUES ('$this->mtrlnm','$this->quantity','$this->deptnm')";

				$errors = new Materials($this->mtrlnm,$this->quantity,$this->deptnm);

				if($errors->emptyForm($this->mtrlnm,$this->quantity,$this->deptnm)==true){

						echo "<script>alert('Empty Fields are not Allowed')</script>";
					echo "<script>window_open('StoreAddMaterialspage.php','_self')</script>";

				}

				else
				if($errors->getMaterials($this->mtrlnm,$this->deptnm)==true){

						echo "<script>alert('The Material You want to add already exists')</script>";
						echo "<script>window.open('StoreAddMaterialspage.php')</script>";

				}


				else{


				

				if($this->connect()->exec($insert)==true)
				{
					 header('location:StoreAddMaterialspage.php?msg=material added sucessfully');


				}else

				{
					echo "<script>alert('Error')</script>";
					echo "<script>window_open('StoreAddMaterialspage.php','_self')</script>";
				}
			}
		}


		public function updateMaterials(){

			


				$errors = new Materials($this->mtrlnm,$this->quantity,$this->deptnm);

		
				if($errors->emptyForm($this->mtrlnm,$this->quantity,$this->deptnm)==true){

						echo "<script>alert('Empty Fields are not Allowed')</script>";
						echo "<script>window_open('StoreAddMaterialspage.php','_self')</script>";

				}else{

							$get = "SELECT * FROM project.materials WHERE material_name = ? AND Dept_name = ?";
					$runget= $this->connect()->prepare($get);
					$runget->execute([$this->mtrlnm,$this->deptnm]);
						if($runget->rowCount()<1){

								echo "<script>alert('Material You want to update doesnt exist in that departement')</script>";

								#error here
								echo "<script>window_open('StoreAddMaterialspage.php','_self')</script>";

								}else{

						$update = "UPDATE project.materials SET Quantity= (Quantity+?)  WHERE material_name=? AND Dept_name=?";
						$run=$this->connect()->prepare($update);

						if($run->execute([$this->quantity,$this->mtrlnm,$this->deptnm])){

						header('location:StoreAddMaterialspage.php?msg=material updated sucessfully');
					}
				

				}
		}
	}

}

	if(isset($_POST['add'])){

				$nm = $_POST['material_name'];
				$qnty = $_POST['quantity'];
				$dept = $_POST['category']; 

			$addMtrl = new Materials($nm,$qnty,$dept);

			$addMtrl->insertMaterial();

	}
	
	if(isset($_POST['update'])){

				$nm = $_POST['material_name'];
				$qnty = $_POST['quantity'];
				$dept = $_POST['category']; 

			$updateMtrl = new Materials($nm,$qnty,$dept);
			$updateMtrl->updateMaterials();
	}