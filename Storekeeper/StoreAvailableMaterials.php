<?php

require "../pdf/generatepdf/fpdf.php";

require_once "db_Connection.php";

 class ScheduleReport extends FPDF{



     function Header()
     {
         $this->Image('../pics/logo.jpg',10,6,20);
         $this->SetFont('Times','B',15);
         $this->cell(200,10,'EGERTON UNIVERSITY ESTATES DEPARTMENT',0,0,'C');
         $this->Ln();
         $this->cell(200,10,'AVAILABLE MATERIALS',0,0,'C');
         $this->Ln();

     }

     function Footer()
     {
         $this->SetY(-20);
         $this->SetFont('Times','I',10);
         $this->Cell(0,10,'Transforming Lives Through Quality Education',0,0,'C');
         $this->Ln();
         $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');

     }

     function headerTable()
     {

         $this->SetFont('Times','B',12);
         $this->Cell(15,10,'No.',1,0,'C');
         $this->Cell(32,10,'MATERIAL ID',1,0,'C');
         $this->Cell(45,10,'MATERIAL NAME.',1,0,'C');
         $this->Cell(30,10,'QUANTITY',1,0,'C');
         $this->Cell(65,10,'DEPARTMENT',1,0,'C');



         $this->Ln();

     }


     function getRecords()
     {
         $myConnection = new Db_Connect();

         $query="select * from project.materials";
         $records =$myConnection->connect()->prepare($query);
         $records->execute();

         if($records->rowCount()<1)
         {
             $this->SetFont('Times','B',15);
            $this->cell(276,10,'Maetrials are  not available',0,0,'C');
         }
         else
         {
             $number=1;
             $this->SetFont('Times','',10);
             while($row = $records->fetch(PDO::FETCH_ASSOC))
             {
                 $department=$row['Dept_name'];
                 $material = $row['material_name'];
                 $quantity = $row['Quantity'];
                 $MTRL_ID= $row['material_ID'];


                 $this->Cell(15,10,$number,1,0,'L');
                 $this->Cell(32,10,$MTRL_ID,1,0,'L');
                 $this->Cell(45,10,$material,1,0,'L');
                 $this->Cell(30,10,$quantity,1,0,'L');
                 $this->Cell(65,10,$department,1,0,'L');
                 $this->Ln();
                 $number++;

             }

             $this->SetFont('Times','',15);
//             $this->cell(276,10,'Repairs Made Between  '.$from.' And '.$to,0,0,'C');
         }

     }


 }

 if(isset($_GET['assign'])) {

     $myReport = new ScheduleReport();
     $myReport->AliasNbPages();
     $myReport->AddPage('P', 'A4', 0);
     $myReport->headerTable();
     $myReport->getRecords();
     $myReport->Output();

 }