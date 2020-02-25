<?php
require('fpdf.php');

class invoicePDF extends FPDF {




    function header() {



        $this -> Image('../images/ppp-logo-150px.png');
        $this -> SetFont('Arial','B',24);
        $this -> Cell(300, -50, 'Invoice', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(287, -68, '1234 Industrial Way', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(300, -95, 'Missoula, MT', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(300, -122, '123-456-7890', 0,0, 'C');

    }

    function headerTable() {
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(20, 10, 'Product', 1,0, 'C');
    }

    function inputs($firstName) {
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(20, 10, $firstName, 1,0, 'C');
    }




}




$firstName = $_POST["firstName"];

$pdf = new invoicePDF();
$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World!');
$pdf->headerTable();
$pdf->inputs($firstName);
$pdf->Output();
