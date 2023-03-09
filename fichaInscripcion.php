<?php
    require('fpdf.php');
    require 'bd.php';
    $id = $_GET["id"];
    $consulta = "SELECT * FROM postulantes WHERE documento = '$id'";
    $resultado = mysqli_query($conexion, $consulta);
    class PDF extends FPDF {
        function Header() {
            $this->Image('assets/img/logo.png',92,10,25);
            $this->Cell(67);
            $this->SetFont('helvetica','B',25);
            $this->Cell(55,85,utf8_decode('Ficha de Inscripción'),0,0,'C');
            $this->Ln(12);
        }
    }
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    while($row = $resultado->fetch_assoc()){
        $pdf->Ln(45);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(191,10,utf8_decode('1. Datos personales'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Nombres'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['nombres']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Apellidos'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(73,10,utf8_decode($row['apellidoPaterno'].' '.$row['apellidoMaterno']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(45,10,utf8_decode('Tipo documento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(55,10,utf8_decode($row['tipoDocumento']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(35,10,utf8_decode('Documento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(56,10,utf8_decode($row['documento']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(25,10,utf8_decode('Celular'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(45,10,utf8_decode($row['celular']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(25,10,utf8_decode('Correo'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(96,10,utf8_decode($row['correo']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(55,10,utf8_decode('Fecha de nacimiento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $fecha = $row['fechaNacimiento'];
        $fecha = date("d-m-Y", strtotime($fecha));
        $pdf->Cell(45,10,utf8_decode($fecha),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(35,10,utf8_decode('Edad'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(56,10,utf8_decode($row['edad']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(55,10,utf8_decode('Sexo'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(45,10,utf8_decode($row['sexo']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(35,10,utf8_decode('Estado civil'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(56,10,utf8_decode($row['estadoCivil']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(191,10,utf8_decode('2. Lugar de nacimiento'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(20,10,utf8_decode('País'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['paisNacimiento']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(40,10,utf8_decode('Departamento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(71,10,utf8_decode($row['departamentoNacimiento']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(30,10,utf8_decode('Provincia'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['provinciaNacimiento']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(30,10,utf8_decode('Distrito'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(71,10,utf8_decode($row['distritoNacimiento']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(191,10,utf8_decode('3. Domicilio actual'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(30,10,utf8_decode('Dirección'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(70,10,utf8_decode($row['direccion']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(40,10,utf8_decode('Departamento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(51,10,utf8_decode($row['departamentoActual']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(30,10,utf8_decode('Provincia'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['provinciaActual']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(30,10,utf8_decode('Distrito'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(71,10,utf8_decode($row['distritoActual']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(191,10,utf8_decode('4. Datos del padre, madre o apoderado'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('DNI'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['dniApoderado']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Nombres'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(73,10,utf8_decode($row['nombresApoderado']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Ln(10);
        $pdf->Cell(89,10,utf8_decode('Apellidos'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(102,10,utf8_decode($row['apellidoPaternoApoderado'].' '.$row['apellidoMaternoApoderado']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Ln(10);
        $pdf->Cell(191,10,utf8_decode('5. Datos de la Institución Educativa de procedencia'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Colegio'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['colegio']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(40,10,utf8_decode('Departamento'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(62,10,utf8_decode($row['departamentoColegio']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Provincia'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(60,10,utf8_decode($row['provinciaColegio']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(40,10,utf8_decode('Distrito'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(62,10,utf8_decode($row['distritoColegio']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(85,10,utf8_decode('¿Has culminado tus estudios?'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(15,10,utf8_decode($row['culminoColegio']),1,0,'L');
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(70,10,utf8_decode('Año que culminó estudios'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(21,10,utf8_decode($row['anoCulminadoColegio']),1,0,'L');
        $pdf->AddPage();
        $pdf->Ln(45);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(191,10,utf8_decode('6. Modalidad y carrera profesional'),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(29,10,utf8_decode('Modalidad'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(162,10,utf8_decode($row['modalidad']),1,0,'L');
        if($row['modalidad'] == "Examen de Admisión Extraordinario"){
            $pdf->Ln(10);
            $pdf->SetFont('helvetica','B',15);
            $pdf->Cell(29,10,utf8_decode('Tipo'),1,0,'L');
            $pdf->SetFont('helvetica','',15);
            $pdf->Cell(162,10,utf8_decode($row['tipo']),1,0,'L');
        }
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        if($row['tipo'] == "Graduados y titulados" || $row['tipo'] == "Traslado externo"){
            $pdf->Cell(75,10,utf8_decode('Universidad de procedencia'),1,0,'L');
            $pdf->SetFont('helvetica','',15);
            $pdf->Cell(116,10,utf8_decode($row['universidad']),1,0,'L');
            $pdf->Ln(10);
            $pdf->SetFont('helvetica','B',15);
            $pdf->Cell(55,10,utf8_decode('Créditos aprobados'),1,0,'L');
            $pdf->SetFont('helvetica','',15);
            $pdf->Cell(136,10,utf8_decode($row['creditos']),1,0,'L');
            $pdf->Ln(10);
        }
        if($row['tipo'] == "Ley 27277 Víctimas del terrorismo"){
            $pdf->Cell(29,10,utf8_decode('RUV'),1,0,'L');
            $pdf->SetFont('helvetica','',15);
            $pdf->Cell(162,10,utf8_decode($row['ruv']),1,0,'L');
            $pdf->Ln(10);
        }
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(53,10,utf8_decode('Carrera profesional'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(138,10,utf8_decode($row['carrera']),1,0,'L');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica','B',15);
        $pdf->Cell(113,10,utf8_decode('¿Cómo se enteró del examen de admisión?'),1,0,'L');
        $pdf->SetFont('helvetica','',15);
        $pdf->Cell(78,10,utf8_decode($row['medio']),1,0,'L');
    }
    $pdf->Output();
?>