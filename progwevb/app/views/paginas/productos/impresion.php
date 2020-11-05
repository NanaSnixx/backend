<?php
    $pdf=new FPDF;
    $pdf->AddPage('L');
    $pdf->SetFont('arial','8',16);
    $pdf->Image(RUTA_URL . '/img/chihuahua.png',10,10,20);
    $pdf->SetFillColor(90,90,90);
    $pdf->SetTextColor(255);
    $pdf->SetXY(35,17.5);
    $pdf->Cell(240,10,utf8_decode('Empresas Tecnologias, S.A. de C.V'),1,1,'C',1);
    $pdf->SetY(38);
    $pdf->SetTextColor(0);
    $pdf->Cell(270,7,'Listado de productos',0,1,'C');
    $pdf->Ln(2);
    #Encabezado
    $pdf->SetFont('arial','8',12);
    $pdf->Cell(20,6,'ID_prod','LT',0,'C');
    $pdf->Cell(60,6,'Nombre Prod','LT',0,'C');
    $pdf->Cell(20,6,utf8_decode('Precio'),'LTR',1,'C');
    $pdf->SetFont('arial','',10);
    
    foreach($datos['productos'] as $key=>$productos){
    $pdf->Cell(20,5,$productos['id_prod'],'LTB',0,'C');
    $pdf->Cell(60,5,$productos['nombre_prod'],'LTB',0,'C');
    $pdf->Cell(20,5,$productos['precio'],'LTB',0,'C');
    }
    $pdf->SetY(-30);
    $pdf->Cell(260,5,'Derechos Reservados '. date('Y'),0,0,'R');
    $pdf->OutPut('productos'.time().'.pdf','I');
?>