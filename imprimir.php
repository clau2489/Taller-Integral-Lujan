<?php 
$id = $_GET['id'];
require_once ("config/db.php");
require_once ("config/conexion.php");
$consulta = "SELECT * FROM presupuesto WHERE id='$id' ";
$resultado = mysqli_query( $con, $consulta );
while ($columna = mysqli_fetch_array( $resultado))
{
  $id = $columna['id'];
  $fecha = $columna['fecha'];
  $propietario = $columna['propietario'];
  $domicilio = $columna['domicilio'];
  $telefono = $columna['telefono'];
  $plazo = $columna['plazo'];
  $clase = $columna['clase'];
  $marca = $columna['marca'];
  $tipo = $columna['tipo'];
  $mesanio = $columna['mesanio'];
  $motorochasis = $columna['motorochasis'];
  $patente = $columna['patente'];
  $kilometraje = $columna['kilometraje'];
  $trabajos = $columna['trabajos'];
  $repuestos = $columna['repuestos'];
  $pintura = $columna['pintura'];
  $manoobrachapa = $columna['manoobrachapa'];
  $manoobrapintura = $columna['manoobrapintura'];
  $manoobramecanica = $columna['manoobramecanica'];
  $varios = $columna['varios'];
  $comentarios = $columna['comentarios'];
  $total = $columna['total']; 
}


require('fpdf/fpdf.php');
error_reporting(0);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{   
    // Arial bold 15
    $this->SetFont('Arial', '',12);
}

// Pie de página
function Footer()
{   
    // Posición: a 1,5 cm del final
    $this->SetY(-12);
    // Arial italic 8
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'www.tallerintegrallujan.com ',0,0,'C');
}
}



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('header.png',0,10,210,'C');

$pdf->Line(0, 45, 210, 45); 

$pdf->Ln(35);

$pdf->SetFont('Arial', 'B',11);


$pdf->SetFont('Arial', '',11);
$pdf->Cell(0,7,'',0,1);
$pdf->Cell(20,7,'Fecha: '.$fecha.'                                                         
                  Presupuesto #: '.$id .'',0,1,'');
$pdf->Cell(0,7,'Propietario: '. utf8_decode($propietario) .'',0,1);
$pdf->Cell(0,7,'Domicilio: '. utf8_decode($domicilio) .'',0,1);
$pdf->Cell(0,7,'Telefono de contacto: '.$telefono .'',0,1);
$pdf->Cell(0,7,'--------------------------------------------------------------------------------------------------------------------------------------------------',0,1);

$pdf->Cell(0,7,'Clase de Vehiculo: '.$clase .'                  Marca: '. utf8_decode($marca) .'',0,1);
$pdf->Cell(0,7,'Tipo: '.$tipo .'                                                  Mes/ Ano: '.$mesanio .'                       Motor/ Chasis: '.$motorochasis .'',0,1);
$pdf->Cell(0,7,'Patente: '.$patente .'                                            Kilometraje: '.$kilometraje .'',0,1);
$pdf->SetFont('Arial', '',11);
$pdf->Cell(0,7,'--------------------------------------------------------------------------------------------------------------------------------------------------',0,1);

$pdf->Multicell(0,7,'Trabajos a realizar: ',0,1);
$pdf->SetFont('Arial', '',9);
$pdf->Multicell(0,5,''. utf8_decode($trabajos) .'',0,1);
$pdf->SetFont('Arial', '',11);
$pdf->Cell(0,7,'',0,1);

$pdf->Cell(0,7,'',0,1);
$pdf->Cell(0,7,'--------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->Cell(0,5,'Plazo de entrega del vehiculo reparado: '. utf8_decode($plazo) .'',0,1);
$pdf->Cell(0,7,'--------------------------------------------------------------------------------------------------------------------------------------------------',0,1);

$pdf->SetFont('Arial', '',7);
$pdf->Cell(0,7,'Este presupuesto tiene una validez de 20 dias, pasado ese plazo se debe volver a presupuestar',0,1);
$pdf->SetFont('Arial', '',9);
$pdf->MultiCell(0,7,'Observaciones adicionales: '. $comentarios .'',0,1);
$pdf->Cell(0,7,'',0,1);
$pdf->SetFont('Arial', '',11);
$pdf->Cell(170,10,'Total de Repuestos:   $ '.$repuestos .'.-',0,1,'R');
$pdf->Cell(170,10,'Total de Pintura:   $ '.$pintura .'.-',0,1,'R');
$pdf->Cell(170,10,'Mano de obra chapa:   $ '.$manoobrachapa .'.-',0,1,'R');
$pdf->Cell(170,10,'Mano de obra pintura:   $ '.$manoobrapintura .'.-',0,1,'R');
$pdf->Cell(170,10,'Mano de obra pintura:   $ '.$manoobramecanica .'.-',0,1,'R');
$pdf->Cell(170,10,'Varios:   $ '.$varios .'.-',0,1,'R');
$pdf->SetTextColor(220,50,50);
$pdf->SetFont('Arial', '',14);
$pdf->Cell(170,10,'TOTAL PRESUPUESTO:   $ '.$total .'.-',0,1,'R');


$fileName = ''.$propietario.'.pdf';
$pdf->Output();

mysqli_close( $con );

?>