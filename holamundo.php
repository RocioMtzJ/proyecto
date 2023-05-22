<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'Reporte de usuario y password',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    
    $this->cell(80,10,'Usuario',1,0,'C',0);
    $this->cell(80,10,'Password',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
$con=mysqli_connect("localhost","root","","login");
$consulta= ("SELECT * from usuarios");
$query= mysqli_query($con,$consulta);

$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);



while($row = mysqli_fetch_array($query)){
	$pdf->cell(80,10,$row['usuario'],1,0,'C');
	$pdf->cell(80,10,$row['password'],1,1,'C');


}


$pdf->Output();
?>