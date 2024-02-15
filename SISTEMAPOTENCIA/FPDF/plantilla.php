<?php
	require '../Librerias/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../Banner/imagenes/bamber.png', 45, 15, 200 );
			$this->SetFont('Arial','B',15);
			$this->Cell(80);
			$this->Cell(80,50, utf8_decode('Potencia en el Turbo'),0,0,'C');
			$this->Ln(10);
            $this->Cell(240,50, utf8_decode('LISTADO ACTUALIZADO DE MARCAS'),0,1,'C');
            $this->Ln(-10);

			$this->SetFillColor(0,0,0);
			$this->SetTextColor(255,255,255);
			$this->SetFont('Arial','B',12);
			$this->Cell(10,6,'NO',1,0,'C',1);
			$this->Cell(20,6,'Número',1,0,'C',1);
			$this->Cell(40,6,'Marca',1,0,'C',1);
			$this->Cell(30,6,'Color',1,0,'C',1);
			$this->Cell(110,6,'Carroceria',1,0,'C',1);
	
		}
		
		function Footer()
		{
            date_default_timezone_set('America/Mexico_City');
            $fecha=date('d/m/y H:i');
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
            $this->Cell(-70,10, utf8_decode("Fecha de Impresión: $fecha"),0,0,'C' );
            
		}		
	}
?>