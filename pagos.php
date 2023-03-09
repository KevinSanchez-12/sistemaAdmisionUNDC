<?php
include 'bd.php';
$dni = $_GET['id'];
$correo = $_GET['correo'];
$modalidad = $_GET['modalidad'];
if (isset($_POST['btnPagar'])) {
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $inputA = 50;
    $inputC = $_POST['inputC'];
    $inputD = $_POST['inputD'];
    $inputF = $_POST['inputF'];
    $inputG = $_POST['inputG'];
    $inputH = $_POST['inputH'];
    $inputI = $_POST['inputI'];
    $inputJ = $_POST['inputJ'];
    $inputK = $_POST['inputK'];
    $inputL = $_POST['inputL'];
    $inputM = $_POST['inputM'];
    $inputN = $_POST['inputN'];
    $inputO = $_POST['inputO'];
    $inputP = $_POST['inputP'];
    $inputQ = $_POST['inputQ'];
    $inputR = $_POST['inputR'];
    $inputS = $_POST['inputS'];
    $inputT = $_POST['inputT'];
    $sql = "INSERT INTO pagos (pago, dni, prospecto, ordinarioEstatal, ordinarioParticular, extraPPE, extraPPP, extraDE, extraDP, extraDCE, extraDCP, extraGU, extraGPNP, extraTI, extraTEN, extraTEI, centroPre, duplicado, constancia, recargo) VALUES ('NO', '$documento', '$inputA', '$inputC', '$inputD', '$inputF', '$inputG', '$inputH', '$inputI', '$inputJ', '$inputK', '$inputL', '$inputM', '$inputN', '$inputO', '$inputP', '$inputT', '$inputQ', '$inputR', '$inputS')";
    $result = mysqli_query($conexion, $sql);
    $datos = [
        'documento' => $documento,
        'correo' => $correo,
        'inputA' => 50,
        'inputC' => $inputC ?? 0,
        'inputD' => $inputD ?? 0,
        'inputF' => $inputF ?? 0,
        'inputG' => $inputG ?? 0,
        'inputH' => $inputH ?? 0,
        'inputI' => $inputI ?? 0,
        'inputJ' => $inputJ ?? 0,
        'inputK' => $inputK ?? 0,
        'inputL' => $inputL ?? 0,
        'inputM' => $inputM ?? 0,
        'inputN' => $inputN ?? 0,
        'inputO' => $inputO ?? 0,
        'inputP' => $inputP ?? 0,
        'inputQ' => $inputQ ?? 0,
        'inputR' => $inputR ?? 0,
        'inputS' => $inputS ?? 0,
        'inputT' => $inputT ?? 0,
    ];
    header("Location: pasarela.php?data=".json_encode($datos));
}
if(isset($_POST['pagoA'])) {
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $codigoA = $_POST['codigoA'];
    $voucherA = $_FILES['voucherA']['name'];
    $fechaA = $_POST['fechaA'];
    $codigosVoucher = $conexion->query("SELECT codigo FROM vouchers WHERE codigo = '$codigoA'");
    $resultCodigosVoucher = $codigosVoucher->fetch_assoc();
    if(isset($resultCodigosVoucher['codigo'])) {
        header("Location:error");
    }else{
        $sqlA = "INSERT INTO vouchers (dni, concepto, codigo, voucher, fechaPago, detalles, estado) VALUES ('$documento', 'Prospecto y derecho de examen', '$codigoA', '$voucherA', '$fechaA', '', 'Enviado')";
        $resultA = mysqli_query($conexion, $sqlA);
        if($resultA) {
            $carpetaA = "assets/vouchers/";
            opendir($carpetaA);
            $destinoA= $carpetaA.$_FILES['voucherA']['name'];
            if(!file_exists ($destinoA)){
                copy($_FILES['voucherA']['tmp_name'], $destinoA);
            }
            $nombreA = $_FILES['voucherA']['name'];
        }
        header("Location: verificacion?correo=$correo");
    }
}
if(isset($_POST['pagoB'])) {
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $codigoB = $_POST['codigoB'];
    $voucherB = $_FILES['voucherB']['name'];
    $fechaB = $_POST['fechaB'];
    $codigosVoucher = $conexion->query("SELECT codigo FROM vouchers WHERE codigo = '$codigoB'");
    $resultCodigosVoucher = $codigosVoucher->fetch_assoc();
    if(isset($resultCodigosVoucher['codigo'])) {
        header("Location:error");
    }else{
        $sqlB = "INSERT INTO vouchers (dni, concepto, codigo, voucher, fechaPago, detalles, estado) VALUES ('$documento', 'Prospecto', '$codigoB', '$voucherB', '$fechaB', '', 'Enviado')";
        $resultB = mysqli_query($conexion, $sqlB);
        if($resultB) {
            $carpetaB = "assets/vouchers/";
            opendir($carpetaB);
            $destinoB= $carpetaB.$_FILES['voucherB']['name'];
            if(!file_exists ($destinoB)){
                copy($_FILES['voucherB']['tmp_name'], $destinoB);
            }
            $nombreB = $_FILES['voucherB']['name'];
        }
        header("Location: verificacion?correo=$correo");
    }
}
if(isset($_POST['pagoC'])) {
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $codigoC = $_POST['codigoC'];
    $voucherC = $_FILES['voucherC']['name'];
    $fechaC = $_POST['fechaC'];
    $codigosVoucher = $conexion->query("SELECT codigo FROM vouchers WHERE codigo = '$codigoC'");
    $resultCodigosVoucher = $codigosVoucher->fetch_assoc();
    if(isset($resultCodigosVoucher['codigo'])) {
        header("Location:error");
    }else{
        $sqlC = "INSERT INTO vouchers (dni, concepto, codigo, voucher, fechaPago, detalles, estado) VALUES ('$documento', 'Derecho de examen', '$codigoC', '$voucherC', '$fechaC', '', 'Enviado')";
        $resultC = mysqli_query($conexion, $sqlC);
        if($resultC) {
            $carpetaC = "assets/vouchers/";
            opendir($carpetaC);
            $destinoC= $carpetaC.$_FILES['voucherC']['name'];
            if(!file_exists ($destinoC)){
                copy($_FILES['voucherC']['tmp_name'], $destinoC);
            }
            $nombreC = $_FILES['voucherC']['name'];
        }
        header("Location: verificacion?correo=$correo");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css?1.6">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admisión | UNDC</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?2.6"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="max-container">
        <h1 class="titulo"><span>Paso 2</span>: Pagos</h1>
        <p class="parrafo">Escoga el método de pago que desea utilizar</p>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pago con tarjeta <img height="25px" style="margin-left:10px" src="assets/img/visa-4.svg"></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Subir voucher (transferencias, ventanilla o agente)</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div style="margin-top:20px !important" class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <p>Seleccione los pagos a realizar:</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <input name="documento" value="<?php echo $dni?>" type="hidden">  
                    <input name="correo" value="<?php echo $correo?>" type="hidden">    
                    <div class="checboxs">
                        <div class="item">
                            <div class="input">
                                <input name="inputA" value="50" id="inputA" class="form-check-input" type="checkbox" checked disabled>
                            </div>
                            <div class="content">
                                <p>Prospecto de admisión 2023<span style="margin-left:10px" class="badge text-bg-success">S/50.00</span></p>
                            </div>
                        </div>
                        <section style="display:none" id="box-ordinario">
                            <div style="margin-left:17px" class="item">
                                <div class="input">
                                    <input class="form-check-input" type="hidden">
                                </div>
                                <div class="content">
                                    <p>Derecho de examen de admisión ordinario</p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputC" value="200" id="inputC" class="form-check-input ordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>I.E Estatal y parroquial<span style="margin-left:10px" class="badge text-bg-success">S/200.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputD" value="250" id="inputD" class="form-check-input ordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>I.E Particular<span style="margin-left:10px" class="badge text-bg-success">S/250.00</span></p>
                                </div>
                            </div>
                        </section>
                        <section style="display:none" id="box-extraordinario">
                            <div style="margin-left:17px" class="item">
                                <div class="input">
                                    <input class="form-check-input" type="hidden">
                                </div>
                                <div class="content">
                                    <p>Derecho de examen de admisión extraordinario</p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputF" value="200" id="inputF" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Primeros puestos - estatal<span style="margin-left:10px" class="badge text-bg-success">S/200.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputG" value="250" id="inputG" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Primeros puestos - particular<span style="margin-left:10px" class="badge text-bg-success">S/250.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputH" value="200" id="inputH" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Discapacitados - estatal<span style="margin-left:10px" class="badge text-bg-success">S/200.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputI" value="250" id="inputI" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Discapacitados - particular<span style="margin-left:10px" class="badge text-bg-success">S/250.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputJ" value="200" id="inputJ" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Deportistas calificados - estatal<span style="margin-left:10px" class="badge text-bg-success">S/200.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputK" value="250" id="inputK" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Deportistas calificados - particular<span style="margin-left:10px" class="badge text-bg-success">S/250.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputL" value="500" id="inputL" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Graduados y titulados de otras universidades<span style="margin-left:10px" class="badge text-bg-success">S/500.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputM" value="500" id="inputM" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Graduados y titulados de las FF.AA y PNP<span style="margin-left:10px" class="badge text-bg-success">S/500.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputN" value="100" id="inputN" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Traslado interno<span style="margin-left:10px" class="badge text-bg-success">S/100.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputO" value="300" id="inputO" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Traslado externo nacional<span style="margin-left:10px" class="badge text-bg-success">S/300.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputP" value="550" id="inputP" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Traslado externo internacional<span style="margin-left:10px" class="badge text-bg-success">S/550.00</span></p>
                                </div>
                            </div>
                            <div style="margin-left:27px" class="item">
                                <div class="input">
                                    <input onchange="return calcularTotalAPagar()" name="inputT" value="0" id="inputT" class="form-check-input extraordinario" type="checkbox">
                                </div>
                                <div class="content">
                                    <p>Centro PRE (Ingresantes)<span style="margin-left:10px" class="badge text-bg-success">S/0.00</span></p>
                                </div>
                            </div>
                        </section>
                        <div class="item" style="display:none">
                            <div class="input">
                                <input onchange="return calcularTotalAPagar()" name="inputQ" value="20" id="inputQ" class="form-check-input" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Duplicado de carné de postulante<span style="margin-left:10px" class="badge text-bg-success">S/20.00</span></p>
                            </div>
                        </div>
                        <div class="item" style="display:none">
                            <div class="input">
                                <input onchange="return calcularTotalAPagar()" name="inputR" value="50.70" id="inputR" class="form-check-input" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Constancia de ingreso<span style="margin-left:10px" class="badge text-bg-success">S/50.70</span></p>
                            </div>
                        </div>
                        <div class="item" id="rezagados" style="display:none">
                            <div class="input">
                                <input onchange="return calcularTotalAPagar()" name="inputS" value="30" id="inputS" class="form-check-input" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Recargo por inscripción de rezagados<span style="margin-left:10px" class="badge text-bg-success">S/30.00</span></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        if($modalidad == "Examen de Admisión Ordinario"){
                            echo '<script>document.getElementById("box-ordinario").style.display = "block";</script>';
                        }else{
                            echo '<script>document.getElementById("box-extraordinario").style.display = "block";</script>';
                        }
                        $fecha_actual = date("Y-m-d");
                        if($fecha_actual >= "2023-02-28"){
                            echo '<script>document.getElementById("rezagados").style.display = "flex";</script>';
                        }
                    ?>
                    <div style="margin-bottom:0px" class="alert alert-danger" role="alert">
                        Se realizará un cobro adicional de <b>4.5%</b> al total por pago con tarjeta VISA o MASTERCARD
                    </div>
                    <button id="btnPagar" name="btnPagar" type="submit" class="btn btn-success btn-opcion">Ir a pagar <span style="font-weight:700" id="totalPago"></span></button>
                </form>
            </div>
            <div style="margin-top:20px !important" class="tab-pane fade show" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                Pago por conceptos juntos (prospecto y derecho de examen) - 1 voucher
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body" style="overflow:auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Código de pago</th>
                                            <th>Subir voucher</th>
                                            <th>Formato</th>
                                            <th>Fecha de pago</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">                                           
                                            <input name="documento" value="<?php echo $dni?>" type="hidden">
                                            <input name="correo" value="<?php echo $correo?>" type="hidden">    
                                            <tr>
                                                <td>Prospecto y derecho de examen</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherA()" id="codigoA" name="codigoA" type="text" class="form-control" placeholder="Escriba aquí">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherA()" id="voucherA" name="voucherA" accept=".pdf, .jpg" type="file" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-bg-danger">PDF, JPG</span>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherA()" id="fechaA" name="fechaA" type="date" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input disabled name="pagoA" id="pagoA" type="submit" class="btn btn-success" value="Enviar">
                                                </td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Pago por conceptos separados (prospecto o derecho de examen) - 2 vouchers
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="overflow:auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Código de pago</th>
                                            <th>Subir voucher</th>
                                            <th>Formato</th>
                                            <th>Fecha de pago</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">                                            
                                            <input name="documento" value="<?php echo $dni?>" type="hidden">  
                                            <input name="correo" value="<?php echo $correo?>" type="hidden">    
                                            <tr>
                                                <td>Prospecto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherB()" id="codigoB" name="codigoB" type="text" class="form-control" placeholder="Escriba aquí">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherB()" id="voucherB" name="voucherB" accept=".pdf, .jpg" type="file" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-bg-danger">PDF, JPG</span>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherB()" id="fechaB" name="fechaB" type="date" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input disabled id="pagoB" name="pagoB" type="submit" class="btn btn-success" value="Enviar">
                                                </td>
                                            </tr>
                                        </form>
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">                                           
                                            <input name="documento" value="<?php echo $dni?>" type="hidden">   
                                            <input name="correo" value="<?php echo $correo?>" type="hidden">   
                                            <tr>
                                                <td>Derecho de examen</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherC()" id="codigoC" name="codigoC" type="text" class="form-control" placeholder="Escriba aquí">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherC()" id="voucherC" name="voucherC" accept=".pdf, .jpg" type="file" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-bg-danger">PDF, JPG</span>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input onchange="return validarSubirVoucherC()" id="fechaC" name="fechaC" type="date" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input disabled id="pagoC" name="pagoC" type="submit" class="btn btn-success" value="Enviar">
                                                </td>
                                            </tr>
                                        </form>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <p>¿No sabe cuál es el código de su voucher? <span data-bs-toggle="modal" data-bs-target="#myModalb" style="cursor:pointer" class="badge text-bg-success">Haga clic aquí</span></p>
            </div>
    </div>
    <script>
        function calcularTotalAPagar(){
            totalPago = document.getElementById('totalPago');
            obj = document.getElementsByClassName('form-check-input');
            totalChecks = obj.length;
            totalSumado  = 0;
            comision = 0.045;
            for( i=0; i<totalChecks; i++){ 
                if( obj[i].checked == true ){
                    valor = obj[i].value.split('-');        
                    totalSumado = totalSumado + parseInt(valor[0],10);
                }
            }
            return totalPago.innerHTML = "S/".concat((totalSumado + (totalSumado*comision)).toFixed(2));
        }
        calcularTotalAPagar();
        var checkboxes = document.getElementsByClassName('ordinario');
        var checkboxArray = [...checkboxes];
        checkboxArray.forEach((item) => {
            item.addEventListener('change', (event) => {
                if (event.target.checked) {
                    checkboxArray.forEach((item) => {
                        if (item !== event.target) {
                            item.checked = false;
                            calcularTotalAPagar();
                        }
                    });
                }
            });
        });
        var checkboxesb = document.getElementsByClassName('extraordinario');
        var checkboxArrayb = [...checkboxesb];
        checkboxArrayb.forEach((item) => {
            item.addEventListener('change', (event) => {
                if (event.target.checked) {
                    checkboxArrayb.forEach((item) => {
                        if (item !== event.target) {
                            item.checked = false;
                            calcularTotalAPagar();
                        }
                    });
                }
            });
        });
    </script>
    <script>$( document ).ready(function() {$("#myModal").modal("toggle")});</script>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="titulo-modal">Advertencia</h3>
                </div>
                <div class="modal-body">
                    Para completar la inscripción es <b>obligatorio</b> realizar el pago del prospecto de admisión 2023, después de pagar se enviará un correo con las creedenciales para iniciar sesión. Finalmente complete el <b>paso 3</b> y descargue el prospecto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="aceptar" data-bs-dismiss="modal">De acuerdo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModalb" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="titulo-modal">Vouchers</h3>
                </div>
                <div class="modal-body">
                    <p>Modelo agente</p>
                    <img style="margin:auto; display:flex; height:250px" src="assets/img/modelo-agente.png">
                    <hr>
                    <p>Modelo ventanilla</p>
                    <img style="margin:auto; display:flex; height:250px" src="assets/img/modelo-ventanilla.png">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="aceptar" data-bs-dismiss="modal">De acuerdo</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
