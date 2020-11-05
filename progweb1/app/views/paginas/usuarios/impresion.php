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
    $pdf->Cell(270,7,'Listado de usuarios',0,1,'C');
    $pdf->Ln(2);
    #Encabezado
    $pdf->SetFont('arial','8',12);
    $pdf->Cell(10,5,'ID','LT',0,'C');
    $pdf->Cell(30,5,'R.F.C','LT',0,'C');
    $pdf->Cell(60,5,'Nombre','LT',0,'C');
    $pdf->Cell(80,5,'Correo','LT',0,'C');
    $pdf->Cell(80,5,utf8_decode('Direccion'),'LT',0,'C');
    $pdf->Cell(20,5,utf8_decode('Telefono'),'LTR',1,'C');
    $pdf->SetFont('arial','',10);
    
    foreach($datos['usuarios'] as $key=>$usuario){
    $pdf->Cell(10,5,$usuario['id'],'LTB',0,'C');
    $pdf->Cell(30,5,$usuario['rfc'],'LTB',0,'C');
    $pdf->Cell(60,5,$usuario['nombre'],'LTB',0,'C');
    $pdf->Cell(80,5,$usuario['correo'],'LTB',0,'C');
    $pdf->Cell(80,5,$usuario['direccion'],'LTB',0,'C');
    $pdf->Cell(20,5,$usuario['telefono'],'LTBR',1,'C');
    }
    $pdf->SetY(-30);
    $pdf->Cell(260,5,'Derechos Reservados '. date('Y'),0,0,'R');
    $pdf->OutPut('usuarios'.time().'.pdf','I');
?>