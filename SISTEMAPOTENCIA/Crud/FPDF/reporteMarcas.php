<?php
	include 'plantillaMarcasRegistro.php';
    include '../conexionn.php';

    $marcaSeleccionada = $_GET['idMarca'];

    $query = "SELECT * FROM marcas WHERE idMarca = '$marcaSeleccionada'";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
    $pdf->SetMargins(32, 20 , 15);
    $pdf->SetLeftMargin(30);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','',10); 

	$contador = 1;
	while($row = $resultado->fetch_assoc())
	{
        $pdf->SetTextColor(0);
        if ($contador %2 == 0){
            $pdf->SetFillColor(210,210,210);
        }else{
            $pdf->SetFillColor(255);
        }
        $pdf->Cell(30,6,utf8_decode($row['idMarca']),0,1,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['marca']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['color']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['carroceria']),0,1,'L',1);
    
        $contador += 1;
	}
    date_default_timezone_set('America/Mexico_City');
    $fecha=date('_d-m-y_H-i-s-a');
	$pdf->Output('D',"Marcas$fecha.pdf");
?>