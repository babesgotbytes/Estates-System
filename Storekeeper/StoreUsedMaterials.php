<?php

require "../pdf/generatepdf/fpdf.php";

require_once "db_Connection.php";
 class ScheduleReport extends FPDF{



     function Header()
     {
         $this->Image('../pics/logo.jpg',10,6,20);
         $this->SetFont('Times','B',15);
         $this->cell(276,10,'EGERTON UNIVERSITY ESTATES DEPARTMENT',0,0,'C');
         $this->Ln();
         $this->cell(276,10,'REPAIRS MADE',0,0,'C');
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
         $this->cell(25,10,'',0,0,'C');
         $this->Cell(10,10,'No.',1,0,'C');
         $this->Cell(35,10,'DEPARTMENT',1,0,'C');
         $this->Cell(60,10,'MATERIAL USED.',1,0,'C');
         $this->Cell(30,10,'QUANTITY',1,0,'C');
         $this->Cell(60,10,'EMPLOYEE ASSIGNED',1,0,'C');
         $this->Cell(35,10,'REPAIR DATE',1,0,'C');
         $this->Ln();

     }


     function getRecords($from,$to)
     {
            $myConnection = new Db_Connect();
        
         $query="select * from project.repairs where    repair_date BETWEEN ? AND ?";
         $records =$myConnection->connect()->prepare($query);
         $records->execute([$from,$to]);

         if($records->rowCount()<1)
         {
             $this->SetFont('Times','B',15);
             $this->cell(276,10,'No Repairs Made Between '.$from.' And '.$to,0,0,'C');
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
                 $employee = $row['emp_assign'];
                 $repair_date = $row['repair_date'];

                 $this->cell(25,10,'',0,0,'L');
                 $this->Cell(10,10,$number,1,0,'L');
                 $this->Cell(35,10,$department,1,0,'L');
                 $this->Cell(60,10,$material,1,0,'L');
                 $this->Cell(30,10,$quantity,1,0,'L');
                 $this->Cell(60,10,$employee,1,0,'L');
                 $this->Cell(35,10,$repair_date,1,0,'L');
                 $this->Ln();
                 $number++;

             }

             $this->SetFont('Times','',15);
             $this->cell(276,10,'Repairs Made Between  '.$from.' And '.$to,0,0,'C');
         }

     }


 }

 if(isset($_GET['assign'])) {

     $from= $_GET['from'];
     $to= $_GET['to'];

     $myReport = new ScheduleReport();
     $myReport->AliasNbPages();
     $myReport->AddPage('L', 'A4', 0);
     $myReport->headerTable();
     $myReport->getRecords($from,$to);
     $myReport->Output();

 }