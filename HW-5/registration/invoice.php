<?php
require('fpdf.php');

class invoicePDF extends FPDF {
    function header() {
        $this -> Image('../images/ppp-logo-150px.png');
    }
}





$pdf = new invoicePDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
