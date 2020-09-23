<?php
require 'fpdf.php';

class PDF extends FPDF
{

	// Cabecera de página
	function Header()
	{

	    // Logo
	    $this->Image('logo.jpg',40,8,10);
	    $this->Image('logoRegion.jpg',160,8,10);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Movernos a la derecha
	    $this->Cell(35);
	    // Título
	    $this->Cell(80,10,'GOBIERNO REGIONAL - PUNO',0,1,'C');
	    $this->Cell(35);
	    $this->SetFont('Arial','',14);
	    // Movernos a la derecha
	    $this->Cell(80,10,'ARCHIVO REGIONAL DE PUNO',0,1,'C');
	    
	    $this->SetFont('Arial','',14);
		$this->Cell(25);
	    // Movernos a la derecha
	    $this->Cell(100,2,'_________________________________________________',1,1,'C');
	    // Salto de línea
	    //$this->Ln(3);
	}

	// Pie de página
	function Footer()
	{
		
	    // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// Creación del objeto de la clase heredada

$pdf = new PDF();
$idacred = $_REQUEST['id'];

$pdf->AliasNbPages();
$pdf->SetMargins(30, 10);
$pdf->AddPage();

$conn = new mysqli("localhost","usuario", "Archivo123$", "sunarp");
	$conn->set_charset("utf8");

	// Realizar una consulta MySQL
	$sql = "SELECT idacred,nomAcred,dniAcred,direccion,anio,idzonal,idpersonal,tipoesc,numesc,fecesc,otorgesc,favoresc,notario,protocolo,folio,departamento,provincia,distrito,oficina,fecCreate,codeqr FROM acreditar WHERE idacred = ". $idacred;
	$result = $conn->query($sql);
	$data = $result->fetch_array(MYSQLI_ASSOC);

$pdf->Ln(5);
$pdf->SetFont('Times','BU',14);
$pdf->Cell(130,10,'CONSTANCIA DE ACREDITACION',0,1,'C');
$pdf->Cell(130,5,'No 002 - 2020',0,1,'C');

$pdf->Ln();
$pdf->SetFont('Times','',12);
// Imprimimos el texto justificado
$pdf->MultiCell(0,5,'      EL QUE SUSCRIBE, DIRECTOR DEL ARCHIVO REGIONAL DE PUNO, HACE CONSTAR LO SIGUIENTE:');
// Salto de línea
$pdf->Ln();


$pdf->MultiCell(0,5,'        Que, de conformidad a al Séptima Disposición Complementaria, Transitoria y Final del Decreto Legislativo No. 1049, de aplicación supleatoria al presente caso, acredita a don(a): '.$data['nomAcred'].', identificada con DNI N° '.$data['dniAcred'].', con domicilio real en '.$data['direccion'].', del distrito de Juliaca, provincia de San Roman, departamento de Puno, en su condición de PROPIETARIA y bajo su responsabilidad para que presente ante la oficina Registral de Juliaca, '.$data['idzonal'].' -  Registro de Bienes Inmuebles, el Testomonio de Escritura Pública de '.$data['tipoesc'].' N° '.$data['numesc'].', de fecha: '.$data['fecesc'].', otorgado por '.$data['otorgesc'].'  a favor de '.$data['favoresc'].', suscrito ante el ex notario público '.$data['notario'].', inserto en el Protocolo N° '.$data['protocolo'].' Folio '.$data['folio'].', en el mismo que podrá ser presentada y tramitada por la solicitante, dejando constancia que el presente testimonio de escritura pública es de pocedencia legítima del Fondo Notarial a nuestro cargo y que se encuentra en custodia del Archivo Regional de Puno, de conformidad al Decreto Ley No. 19414, Ley de Defensa, Conservación e Incremento del Patrimonio Documental de la Nación y su Reglamento D.S. N° 022-75-ED.');
$pdf->Ln();
$pdf->Image('./qr/test9689f67ee5ff5914acfee327d97a9419.png',30,200,30);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10, 'Puno, 06 de enero del 2020', 0,0,'R');

$pdf->Ln();

$pdf->Output();

?>