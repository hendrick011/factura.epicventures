<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('panoramalake.png',43,-10,120);
    // Arial bold 15
    $this->SetFont('Times','U',28);
    // Movernos a la derecha
    //$this->Cell(60);
    // Título
    $this->Cell(0,150,'Recibo de Ingresos',0,0,'C');
    // Salto de línea
    $this->Ln(120);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',9);
    // Número de página
    $this->Cell(0,10,'Ave. 27 de Febrero, No. 495, Torre Forum, Piso 3, Local 3H, Sector El Millon, Telefono (809) 508-3338',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',16);
$pdf->Cell(20,10,'Hemos Recibido De:  Gregoria Rafaela Moreno',0,1);
$pdf->Cell(0,10,'La suma de: Ciento cincuenta dolares con 00/100   (US$150.00)');
$pdf->Ln(14);
$pdf->SetFont('Times','',16);
$pdf->Cell(0,10,'En fecha: 07 de octubre 2020');
$pdf->Ln(14);
$pdf->SetFont('Times','',16);
$pdf->Cell(0,10,'Concepto de: ');
$pdf->Ln(10);
$pdf->SetFont('Times','U',16);
$pdf->Cell(0,10,'Pago de gastos legales Unidad E3-B1 Proyecto Atabey Residences 2 ');
$pdf->Ln(14);
$pdf->SetFont('Times','',16);
$pdf->Cell(0,10,'Via:  Transferencia Banco Popular');
$pdf->Ln(50);
$pdf->SetFont('Times','',16);
$pdf->Cell(0,10,'_________________________________',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'FIRMA Y SELLO DE QUIEN RECIBE',0,0,'C');
$pdf->Output();
?>