<?php 
require_once 'fpdf/fpdf.php';

$pdf = new FPDF('L', 'mm', array(150, 23));
//$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->AddFont('Arial', '', 'helvetica.php');
$pdf->SetFont('Arial', '' , 7);
$pdf->SetAutoPageBreak(false);
//$pdf->SetLeftMargin(0);
$pdf->SetMargins(0,0,0);
$pdf->Image('Medi_small.PNG', 0,0);
$txt = 'poging ';
$pdf->setXY(40,6);


$pdf->Output();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
