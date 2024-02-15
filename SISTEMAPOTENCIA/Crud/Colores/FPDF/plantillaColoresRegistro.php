<?php
	require '../../../Librerias/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../../Banner/imagenes/bamber.png', 5, 15, 200 );
			$this->SetFont('Arial','B',15);
			$this->Cell(-90);
            $this->SetLeftMargin(30);
			$this->Cell(0,145, utf8_decode('POTENCIA EN EL TURBO'),0,0,'C');
			$this->Ln(20);
            $this->Cell(50,120, utf8_decode('REPORTE DE COLORES'),0,1,'C');
            $this->Ln(-50,50);

			$this->SetFillColor(0,0,0);
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','B',12);
			$this->Cell(30,6,'NUMERO:',0,1,'L');
			$this->Cell(30,6,'COLORES:',0,1,'L');
			$this->Cell(30,6,'MARCA:',0,1,'L');
			$this->Cell(30,6,'MODELO:',0,0,'L');
            $this->SetLeftMargin(65);
			$this->Ln(-18);

		}
		
		function Footer()
		{
            date_default_timezone_set('America/Mexico_City');
            $fecha=date('d/m/y H:i');
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
            $this->Cell(40,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
            $this->Cell(100,10, utf8_decode("Fecha de Impresión: $fecha"),0,0,'C' );
            
			
		}		
	}
?>