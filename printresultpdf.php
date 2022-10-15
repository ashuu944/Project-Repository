<?php
session_start();
require('fpdf.php');
include('session.php');
include 'classProject.php';
$userID = $_SESSION['id'];
$obj = new project();
if($_REQUEST['action']=='getPDF')
{
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/suza.png',90,0,40);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(50,10,'The State University of Zanzibar',0,0,'C');
    // Line break
    $this->Ln(10);
    $this->Cell(70);
    $this->Cell(70,10,'Department of Computer Science and IT',0,0,'C');
    $this->Ln(10);
    $this->Cell(70);
    $this->Cell(70,10,'Project Results in 2018/2019',0,0,'C');
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function BasicTable($header)
{
    // Header
    
    $w = array(10,40,40,20,20,20,15,15,18);
    for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],6,$header[$i],1,0,'L',0);
        
    $this->Ln();
     // Color and font restoration

}

function summaryTable($header)
{
    // Header
    
    $w = array(75,20,20,20,20,20,20);
    for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],6,$header[$i],1,0,'L',0);
        
    $this->Ln();
     // Color and font restoration

}


}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
 $cA=0;$cBB=0;$cB=0;$cC=0;$cD=0;$cF=0;
    foreach ($obj->viewProject() as $prj)
    {
        $projectID=$prj['projectID'];
        $projectTitle=$prj['title'];
        $pdf->setFont('Arial', 'B', 14);    
        $pdf->Cell(33,5,$projectTitle,0);
        $pdf->ln();
        $pdf->SetFont('Arial','B',12);
        $headerCount = array('No', 'Student Name', 'Reg.Number', '1stMark','2ndMark','3rdMarks','Total','GD','Remark');
        $pdf->BasicTable($headerCount);
        //print names
         $count=0;  
         foreach ($obj->viewStudentProposal($projectID) as $std)
         {
            $stdID=$std['stdID'];
            $name=$std['fName'] . " " . $std['lName'];
            $regNumber=$std['regNo'];
            $total=0;
            $count++;
            $id=$std['id'];
           
            foreach ($obj->viewResult($id) as $re)
             {
                $total=$re['design_marks']+$re['doc_marks']+$re['pres_marks'];
                $dgmarks=$re['design_marks'];
                $doc_marks=$re['doc_marks'];
                $pr_marks=$re['pres_marks'];

                if($total>=70)
                {
                    $grade= "A";
                    $cA+=1;
                }
                else if($total>=60)
                {
                    $grade= "B+";
                    $cBB+=1;
                }
                else if($total>=50)
                {
                    $grade= "B";
                    $cB+=1;
                }
                else if($total>=40)
                {
                    $grade= "C";
                    $cC+=1;
                }
                else if($total>=30)
                {
                    $grade= "D";
                    $cD+=1;
                }
                else
                {
                    $grade= "F";
                    $cF+=1;
                }


                if($total>=50)
                    $remarks="PASS";
                                                
                                                else
                                                    $remarks="FAIL";
                
        //data output
                    $pdf->setFont('Arial', '', 12);
                    $pdf->Cell(10,6,$count,1);
                    $pdf->Cell(40,6,$name,1);
                    $pdf->Cell(40,6,$regNumber,1);
                    $pdf->Cell(20,6,$dgmarks,1);
                    $pdf->Cell(20,6,$doc_marks,1);
                    $pdf->Cell(20,6,$pr_marks,1);
                    $pdf->Cell(15,6,$total,1);
                    $pdf->Cell(15,6,$grade,1);
                    $pdf->Cell(18,6,$remarks,1);
                    $pdf->Ln();
         }
    }
   $pdf->Ln(); 
}
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->cell(20,1,"Summary of the Project Results");
$pdf->Ln(4);
$pdf->SetFont('Arial','B',12);
$header = array('Grade','A', 'B+', 'B','C','D','F');
$pdf->summaryTable($header);
$pdf->setFont('Arial', '', 12);
                    $pdf->Cell(75,6,"Count",1);
                    $pdf->Cell(20,6,$cA,1);
                    $pdf->Cell(20,6,$cBB,1);
                    $pdf->Cell(20,6,$cB,1);
                    $pdf->Cell(20,6,$cC,1);
                    $pdf->Cell(20,6,$cD,1);
                    $pdf->Cell(20,6,$cF,1);
$pdf->Output();
}
?>