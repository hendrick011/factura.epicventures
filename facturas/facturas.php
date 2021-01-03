<?php

//Recibir los datos del cliente
$nombre_cliente = $_POST["nombre"];
$monto = $_POST["monto"];
$montoletra = 'a';//$_POST["montoletra"];
$fecha = $_POST["fecha"];
$proyecto = $_POST["proyecto"];
$unidad = $_POST["unidad"];
$usuario = $_POST["usuario"];


//variable que guarda el nombre del archivo PDF
$archivo="Pago de Gastos legales unidad $unidad $proyecto.pdf";

//Llamada al script fpdf
require('fpdf.php');

$archivo_de_salida=$archivo;

class PDF extends FPDF
{

// Cabecera de página
public function Header()
{
    $proyecto = $_POST["proyecto"];
    $monto = $_POST["monto"];

    // Logo
    if ($proyecto == 'Panorama Lake'){
        $this->Image('panoramalake.png',43,-10,120);
        $this->Image('sello_panorama.PNG',150,200,35);
    }
    else{
        $this->Image('atabey.png',27,20,150);
        $this->Image('sello_epic.PNG',150,200,35);
    }
    
    
    $this->SetFont('Times','B',20);
    // Título
    $this->Cell(0,170,'RECIBO DE INGRESO',0,0,'C');
    // Salto de línea
    $this->Ln(120);

}

// Pie de página
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',9);
    $this->Cell(0,10,'Ave. 27 de Febrero, No. 495, Torre Forum, Piso 3, Local 3H, Sector El Millon, Telefono: (809) 508-3338',0,0,'C');
}
    
}
if ($monto == '100'){
    $montoletra = "Cien dolares con 00/100";
}
elseif($monto == '150'){
    $montoletra = "Ciento cincuenta dolares con 00/100";
}
elseif($monto == '75'){
    $montoletra = "Setenta y cinco dolares con 00/100";
}
elseif($monto == '85'){
    $montoletra = "Ochenta y cinco dolares con 00/100";
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->SetX(30);
$pdf->SetFont('Arial','',14);
$pdf->Cell(50,9,'Hemos recibido de  ');
$pdf->SetX(73);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(110,8,$nombre_cliente,0,1);

$pdf->SetX(30);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10,'La suma de  ');
$pdf->SetX(57);
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(0,10,utf8_decode($montoletra ."  (US$$monto".".00)"),0,1);

setlocale(LC_ALL,"es_ES");
$fecha = strftime("%d de %B del %Y");
//$fecha = date("j") . " de " . date("F") . " del " . date("Y");
$pdf->SetX(30);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10,'En fecha ');
$pdf->SetX(52);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,$fecha,0,1);

$pdf->SetX(30);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10,'Proyecto: ');
$pdf->SetX(52);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,$proyecto);
$pdf->SetX(100);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10,'Unidad: ');
$pdf->SetX(120);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,$unidad,0,1);

$pdf->SetX(30);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10,'Por concepto de ');
$pdf->SetX(68);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Pago de Gastos Legales',0,1);
$pdf->Ln(50);

if ($usuario == 'ana'){
        $pdf->Image('firma_ana.PNG',80,215,50);
    }
    elseif ($usuario == 'adolfina'){
        $pdf->Image('firma_adolfina.jpg',90,220,30);
    }
//$pdf->Image('firma_adolfina.jpg',90,220,30);

$pdf->Cell(0,10,'_________________________________',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'FIRMA Y SELLO DE QUIEN RECIBE',0,0,'C');

$pdf->Output();

//$pdf->Output($archivo_de_salida);//cierra el objeto pdf

//Creacion de las cabeceras que generaran el archivo pdf
//header ("Content-Type: application/download");
// header ("Content-Disposition: attachment; filename=$archivo");
// header("Content-Length: " . filesize("$archivo"));
// $fp = fopen($archivo, "r");
// fpassthru($fp);
// fclose($fp);

//Eliminacion del archivo en el servidor
unlink($archivo);
?>