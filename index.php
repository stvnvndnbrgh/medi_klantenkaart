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

// kous kwaliteit op het etiket plaatsen
$pdf->SetFont('Arial', 'B' , 16);
$txtQuality = 'mediven elegance';
$pdf->setXY(12,1);
$pdf->MultiCell(35,7, $txtQuality ,0 ,'L', false);

// kleur op het etiket plaatsen
$pdf->SetFont('Arial', '' , 9);
$txtColor = "beige / mode";
$pdf->setXY(12,15);
$pdf->MultiCell(35,7, $txtColor ,0 ,'L', false);

// lengte van de kous op het etiket plaatsen
$pdf->SetFont('Arial', 'B' , 9);
$txtLenght = "AT/Panty";
$pdf->setXY(45,1);
$pdf->MultiCell(50,5, $txtLenght ,1 ,'C', false);

// maat van de kous op het etiket plaatsen
$pdf->SetFont('Arial', 'B' , 10);
$txtSize = "III";
$pdf->setXY(45,16);
$pdf->MultiCell(8,6, $txtSize ,1 ,'C', false);

// drukklasse van de kous op het etiket plaatsen
$pdf->SetFont('Arial', 'B' , 10);
$txtCcl = "CCL 2";
$pdf->setXY(79,16);
$pdf->MultiCell(16,6, $txtCcl ,1 ,'C', false);

// voetgrootte van de kous op het etiket zetten
$pdf->SetFont('Arial', '' , 9);
$txtFeetsize = "m Sp / closed toe";
$pdf->setXY(45,8);
$pdf->MultiCell(50,7, $txtFeetsize, 0,'R', false);

$pdf->Output('F','' ,true);

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
