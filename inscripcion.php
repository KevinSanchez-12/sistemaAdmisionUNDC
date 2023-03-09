<?php
    include 'bd.php';
    $paises = 'SELECT * FROM paises';
    $anos = 'SELECT * FROM anos';
    $modalidad = 'SELECT * FROM modalidad';
    $carreras = 'SELECT * FROM carreras';
    $medios = 'SELECT * FROM medios';
    $colegios = 'SELECT CEN_EDU, D_DPTO, D_PROV, D_DIST FROM colegios WHERE D_ESTADO = "Activa"';
    if (isset($_POST['submit'])) {
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $nombres = $_POST['nombres'];
        $tipoDocumento = $_POST['tipoDocumento'];
        $documento = $_POST['documento'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $estadoCivil = $_POST['estadoCivil'];
        $paisNacimiento = $_POST['paisNacimiento'];
        $departamentoNacimiento = explode('-',  $_POST['departamentoNacimientoSelect'])[1].''.$_POST['departamentoNacimientoInput'];
        $provinciaNacimiento = explode('-',  $_POST['provinciaNacimientoSelect'])[1].''.$_POST['provinciaNacimientoInput'];
        $distritoNacimiento = explode('-',  $_POST['distritoNacimientoSelect'])[1].''.$_POST['distritoNacimientoInput'];
        $direccion = $_POST['direccion'];
        $paisActual = $_POST['paisActual'];
        $departamentoActual = explode('-',  $_POST['departamentoActualSelect'])[1].''.$_POST['departamentoActualInput'];
        $provinciaActual = explode('-',  $_POST['provinciaActualSelect'])[1].''.$_POST['provinciaActualInput'];
        $distritoActual = explode('-',  $_POST['distritoActualSelect'])[1].''.$_POST['distritoActualInput'];
        $celular = $_POST['celular'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $dniApoderado = $_POST['dniApoderado'];
        $apellidoPaternoApoderado = $_POST['apellidoPaternoApoderado'];
        $apellidoMaternoApoderado = $_POST['apellidoMaternoApoderado'];
        $nombresApoderado = $_POST['nombresApoderado'];
        $celularApoderado = $_POST['celularApoderado'];
        $colegio = explode('#',  $_POST['colegio'])[0];
        $departamentoColegio = $_POST['departamentoColegio'];
        $provinciaColegio = $_POST['provinciaColegio'];
        $distritoColegio = $_POST['distritoColegio'];
        $culminoColegio = $_POST['culminoColegio'];
        $anoCulminadoColegio = $_POST['anoCulminadoColegio'];
        $modalidad = $_POST['modalidad'];
        $tipo = $_POST['tipo'];
        $universidad = $_POST['universidad'];
        $creditos = $_POST['creditos'];
        $ruv = $_POST['ruv'];
        $carrera = $_POST['carrera'];
        $medio = $_POST['medio'];
        $password = $_POST['password'];
        /* $sql = $conexion->query(
            "SELECT * FROM postulantes WHERE documento = '$documento'"
        );
        $row = $sql->fetch_assoc();
        if (isset($row['documento'])) {
            header('Location: terminal');
            die();
        } else {
            $sql2 = "INSERT INTO postulantes (estado, apellidoPaterno, apellidoMaterno, nombres, tipoDocumento, documento, fechaNacimiento, edad, sexo, estadoCivil, paisNacimiento, departamentoNacimiento, provinciaNacimiento, distritoNacimiento, direccion, paisActual,departamentoActual, provinciaActual, distritoActual, celular, telefono, correo, dniApoderado, apellidoPaternoApoderado, apellidoMaternoApoderado, nombresApoderado, celularApoderado, colegio, departamentoColegio, provinciaColegio, distritoColegio, culminoColegio, anoCulminadoColegio, modalidad, tipo, universidad, creditos, ruv, carrera, medio, password) VALUES ('Inactivo', '$apellidoPaterno', '$apellidoMaterno', '$nombres', '$tipoDocumento', '$documento', '$fechaNacimiento', '$edad', '$sexo', '$estadoCivil', '$paisNacimiento', '$departamentoNacimiento', '$provinciaNacimiento', '$distritoNacimiento', '$direccion', '$paisActual','$departamentoActual', '$provinciaActual', '$distritoActual', '$celular', '$telefono', '$correo', '$dniApoderado', '$apellidoPaternoApoderado', '$apellidoMaternoApoderado', '$nombresApoderado', '$celularApoderado', '$colegio', '$departamentoColegio', '$provinciaColegio', '$distritoColegio', '$culminoColegio', '$anoCulminadoColegio', '$modalidad', '$tipo', '$universidad', '$creditos', '$ruv', '$carrera', '$medio', '$password')";
            $result = mysqli_query($conexion, $sql2);
            header("Location: pagos?id=$documento&correo=$correo&modalidad=$modalidad");
        } */
        $sql2 = "INSERT INTO postulantes (estado, apellidoPaterno, apellidoMaterno, nombres, tipoDocumento, documento, fechaNacimiento, edad, sexo, estadoCivil, paisNacimiento, departamentoNacimiento, provinciaNacimiento, distritoNacimiento, direccion, paisActual,departamentoActual, provinciaActual, distritoActual, celular, telefono, correo, dniApoderado, apellidoPaternoApoderado, apellidoMaternoApoderado, nombresApoderado, celularApoderado, colegio, departamentoColegio, provinciaColegio, distritoColegio, culminoColegio, anoCulminadoColegio, modalidad, tipo, universidad, creditos, ruv, carrera, medio, password) VALUES ('Inactivo', '$apellidoPaterno', '$apellidoMaterno', '$nombres', '$tipoDocumento', '$documento', '$fechaNacimiento', '$edad', '$sexo', '$estadoCivil', '$paisNacimiento', '$departamentoNacimiento', '$provinciaNacimiento', '$distritoNacimiento', '$direccion', '$paisActual','$departamentoActual', '$provinciaActual', '$distritoActual', '$celular', '$telefono', '$correo', '$dniApoderado', '$apellidoPaternoApoderado', '$apellidoMaternoApoderado', '$nombresApoderado', '$celularApoderado', '$colegio', '$departamentoColegio', '$provinciaColegio', '$distritoColegio', '$culminoColegio', '$anoCulminadoColegio', '$modalidad', '$tipo', '$universidad', '$creditos', '$ruv', '$carrera', '$medio', '$password')";
        $result = mysqli_query($conexion, $sql2);
        header("Location: pagos?id=$documento&correo=$correo&modalidad=$modalidad");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css?1.4">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admisión | UNDC</title>
    <script src="assets/js/jquery.js?1.2"></script>
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?2.6"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
    <link href="assets/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/alertifyjs/css/themes/default.css" rel="stylesheet" type="text/css"/>
    <script src="assets/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</head>
<body>
    <form onsubmit="return validarRegistro()" class="max-container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
        <h1 class="titulo"><span>Paso 1</span>: Inscripción</h1>
        <p class="parrafo">Complete los siguientes campos</p>
        <p class="subtitulo">1. Datos personales</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Tipo documento<span id="tipoDocumentoX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion(), validarTipoDocumento()" id="tipoDocumento" name="tipoDocumento" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="DNI">DNI</option>
                    <option value="Carnet de extranjería">Carnet de extranjería</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Documento<span id="documentoX" class="asterisco">*</span></span>
                <input onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="documento" name="documento" type="text" class="form-control" placeholder="Escriba aquí">
                <button style="display:none; align-items:center" class="btn btn btn-success" type="button" id="buscar">Buscar</button>
            </div>
            <div class="input-group">
                <span class="input-group-text">Apellido paterno<span id="apellidoPaternoX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onchange="return validarInscripcion()" id="apellidoPaterno" name="apellidoPaterno" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Apellido materno<span id="apellidoMaternoX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onchange="return validarInscripcion()" id="apellidoMaterno" name="apellidoMaterno" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Nombres<span id="nombresX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onchange="return validarInscripcion()" id="nombres" name="nombres" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Fecha de nacimiento<span id="fechaNacimientoX" class="asterisco">*</span></span>
                <input onchange="return validarInscripcion(), calcularEdad()" id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control">
            </div>
            <div class="input-group">
                <span class="input-group-text">Edad</span>
                <input id="edad" name="edad" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Sexo<span id="sexoX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" id="sexo" name="sexo" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Estado civil<span id="estadoCivilX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" id="estadoCivil" name="estadoCivil" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Conviviente">Conviviente</option>
                    <option value="Viudo">Viudo</option>
                </select>
            </div>
        </div>
        <p class="subtitulo">2. Lugar de nacimiento</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">País<span id="paisNacimientoX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion(), validarPais()" id="paisNacimiento" name="paisNacimiento" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Perú">Perú</option>
                    <?php
                    $resultado = mysqli_query($conexion, $paises);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row['nombre']?>"><?php echo $row['nombre']?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Departamento<span id="departamentoNacimientoX" class="asterisco">*</span></span>
                <select onchange="return validarDepartamentoNacimiento(), validarInscripcion()" disabled id="departamentoNacimientoSelect" name="departamentoNacimientoSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="departamentoNacimientoInput" name="departamentoNacimientoInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Provincia<span id="provinciaNacimientoX" class="asterisco">*</span></span>
                <select onchange="return validarProvinciaNacimiento(), validarInscripcion()" disabled id="provinciaNacimientoSelect" name="provinciaNacimientoSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="provinciaNacimientoInput" name="provinciaNacimientoInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Distrito<span id="distritoNacimientoX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" disabled id="distritoNacimientoSelect" name="distritoNacimientoSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="distritoNacimientoInput" name="distritoNacimientoInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
        </div>
        <p class="subtitulo">3. Domicilio actual</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Dirección<span id="direccionX" class="asterisco">*</span></span>
                <input onkeypress="return validarInscripcion()" id="direccion" name="direccion" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">País<span id="paisActualX" class="asterisco">*</span></span>
                <select onchange="return validarPaisActual(), validarInscripcion()" id="paisActual" name="paisActual" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Perú">Perú</option>
                    <?php
                    $resultado = mysqli_query($conexion, $paises);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row[
                            'nombre'
                        ]; ?>"><?php echo $row['nombre']; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Departamento<span id="departamentoActualX" class="asterisco">*</span></span>
                <select disabled onchange="return validarDepartamentoActual(), validarInscripcion()" id="departamentoActualSelect" name="departamentoActualSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="departamentoActualInput" name="departamentoActualInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Provincia<span id="provinciaActualX" class="asterisco">*</span></span>
                <select disabled onchange="return validarProvinciaActual(), validarInscripcion()" id="provinciaActualSelect" name="provinciaActualSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="provinciaActualInput" name="provinciaActualInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Distrito<span id="distritoActualX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" disabled id="distritoActualSelect" name="distritoActualSelect" class="form-control">
                    <option selected disabled>Seleccione</option>
                </select>
                <input style="display:none" onkeypress="return soloLetras(event), validarInscripcion()" onkeyup="return convertirAOracion()" id="distritoActualInput" name="distritoActualInput" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
        </div>
        <p class="subtitulo">4. Datos de contacto</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Celular<span id="celularX" class="asterisco">*</span></span>
                <input onkeypress="return soloNumeros(event), validarInscripcion()" id="celular" name="celular" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Teléfono fijo</span>
                <input onkeypress="return soloNumeros(event), validarInscripcion()" id="telefono" name="telefono" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Correo<span id="correoX" class="asterisco">*</span></span>
                <input onkeyup="return convertirTodoAminusculas()" onkeypress="return validarInscripcion()" id="correo" name="correo" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
        </div>
        <p class="subtitulo">5. Datos del padre, madre o apoderado</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">DNI<span id="dniApoderadoX" class="asterisco">*</span></span>
                <input onkeypress="return soloNumeros(event), validarInscripcion()" id="dniApoderado" name="dniApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                <button style="display:flex; align-items:center" class="btn btn btn-success" type="button" id="buscarApoderado">Buscar</button>
            </div>
            <div class="input-group">
                <span class="input-group-text">Apellidos y Nombres<span id="apellidoPaternoApoderadoX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onchange="return validarInscripcion()" id="apellidoPaternoApoderado" name="apellidoPaternoApoderado" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Celular<span id="celularApoderadoX" class="asterisco">*</span></span>
                <input onkeypress="return soloNumeros(event), validarInscripcion()" id="celularApoderado" name="celularApoderado" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
        </div>
        <p class="subtitulo">6. Datos de la Institución Educativa de procedencia</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Colegio<span id="colegioX" class="asterisco">*</span></span>
                <select onchange="return validarColegio(), validarInscripcion()" class="selectpicker form-control" id="colegio" name="colegio" data-live-search="true">
                    <option disabled selected>Seleccione</option>
                    <?php
                        $resultado = mysqli_query($conexion, $colegios);
                        while ($row = mysqli_fetch_assoc($resultado)) { ?>
                            <option value="<?php echo $row['CEN_EDU']."#".$row['D_DPTO']."#".$row['D_PROV']."#".$row['D_DIST'];?>"><?php echo $row['CEN_EDU']." - ".$row['D_PROV'];?></option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Departamento<span id="departamentoColegioX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="departamentoColegio" name="departamentoColegio" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Provincia<span id="provinciaColegioX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="provinciaColegio" name="provinciaColegio" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Distrito<span id="distritoColegioX" class="asterisco">*</span></span>
                <input onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="distritoColegio" name="distritoColegio" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">¿Has culminado tus estudios?<span id="culminoColegioX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion(), validarCulminarEstudios()" id="culminoColegio" name="culminoColegio" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Año que concluyó sus estudios</span>
                <select disabled onchange="return validarInscripcion()" id="anoCulminadoColegio" name="anoCulminadoColegio" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <?php
                    $resultado = mysqli_query($conexion, $anos);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row[
                            'valor'
                        ]; ?>"><?php echo $row['valor']; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <p class="subtitulo">7. Modalidad y carrera profesional</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Modalidad<span id="modalidadX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion(), validarModalidad()" id="modalidad" name="modalidad" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <?php
                    $resultado = mysqli_query($conexion, $modalidad);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row[
                            'nombre'
                        ]; ?>"><?php echo $row['nombre']; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Tipo</span>
                <select disabled onchange="return validarTipo()" id="tipo" name="tipo" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Primeros puestos">Primeros puestos</option>
                    <option value="Graduados y titulados">Graduados y titulados</option>
                    <option value="Traslado externo">Traslado externo</option>
                    <option value="Traslado interno">Traslado interno</option>
                    <option value="Ley 29973 Personas con discapacidad">Ley 29973 Personas con discapacidad</option>
                    <option value="Ley 28036 Deportistas calificados">Ley 28036 Deportistas calificados</option>
                    <option value="Ley 27277 Víctimas del terrorismo">Ley 27277 Víctimas del terrorismo</option>
                    <option value="Centro PRE (ingresantes)">Centro PRE (ingresantes)</option>
                </select>
            </div>
            <div style="display:none" id="campoA" class="input-group">
                <span class="input-group-text">Universidad de procedencia</span>
                <input id="universidad" name="universidad" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div style="display:none" id="campoB" class="input-group">
                <span class="input-group-text">Créditos aprobados</span>
                <input onkeypress="return soloNumeros(event)" id="creditos" name="creditos" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div style="display:none" id="campoC" class="input-group">
                <span class="input-group-text">RUV</span>
                <input onkeypress="return soloNumeros(event)" id="ruv" name="ruv" type="text" class="form-control" placeholder="Escriba aquí">
            </div>
            <div class="input-group">
                <span class="input-group-text">Carrera profesional<span id="carreraX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" id="carrera" name="carrera" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <?php
                    $resultado = mysqli_query($conexion, $carreras);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row[
                            'nombre'
                        ]; ?>"><?php echo $row['nombre']; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <p class="subtitulo">8. ¿Cómo se enteró del examen de admisión?</p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Medio<span id="medioX" class="asterisco">*</span></span>
                <select onchange="return validarInscripcion()" id="medio" name="medio" class="form-control">
                    <option value="" disabled selected>Seleccione</option>
                    <?php
                    $resultado = mysqli_query($conexion, $medios);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <option value="<?php echo $row[
                            'nombre'
                        ]; ?>"><?php echo $row['nombre']; ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <p class="subtitulo">9. Crear una contraseña <span style="color:red; font-weight:400">(</span><span style="color:red; font-weight:400">recordar para iniciar sesión</span><span style="color:red; font-weight:400">)</span></p>
        <div class="campos">
            <div class="input-group">
                <span class="input-group-text">Contraseña<span id="passwordX" class="asterisco">*</span></span>
                <input onkeypress="return validarInscripcion(), validarContrasena()" maxlength="9" id="password" name="password" type="password" class="form-control campo" placeholder="Escriba aquí">
                <i id="eye" style="cursor:pointer; margin:auto; padding:10px" onclick="verContrasena()" class='input-group-text fa fa-eye'></i>
            </div>
        </div>
        <div id="mensajePassword" style="margin-bottom:2px; margin-top:20px; display:none" class="alert alert-danger" role="alert"></div>
        <button disabled id="boton" name="submit" type="submit" class="btn btn-success btn-opcion">Inscribirme</button>
    </form>
    <script>
        $("#buscar").click(function(){
        var dni=$("#documento").val();
        $.ajax({           
        type:"POST",
        url: "consulta-dni.php",
        data: 'dni='+dni,
        dataType: 'json',
        success: function(data) {
            $("#nombres").val(data.nombres.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()));
            $("#apellidoPaterno").val(data.apellidoPaterno.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()));
            $("#apellidoMaterno").val(data.apellidoMaterno.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()));
            documentoX = document.getElementById("documentoX").style.display = "none";
            apellidoPaternoX = document.getElementById("apellidoPaternoX").style.display = "none";
            apellidoMaternoX = document.getElementById("apellidoMaternoX").style.display = "none";
            nombresX = document.getElementById("nombresX").style.display = "none";
        }, error: function(data) {
            if(data.status == 200){
                alertify.error("Escriba sus apellidos y nombres");
            }
        }
        });
        })
        $("#buscarApoderado").click(function(){
        var dni=$("#dniApoderado").val();
        $.ajax({
        type:"POST",
        url: "consulta-dni.php",
        data: 'dni='+dni,
        dataType: 'json',
        success: function(data) {
            $("#apellidoPaternoApoderado").val(data.apellidoPaterno.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()) + " " + data.apellidoMaterno.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()) + " " + data.nombres.toLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase()));
            apellidoPaternoApoderadoX = document.getElementById("apellidoPaternoApoderadoX").style.display = "none";
        }, error: function(data) {
            if(data.status == 200){
                alertify.error("Escriba sus apellidos y nombres");
            }
        }
        })
        })
    </script>
    <script>$( document ).ready(function() {$("#myModal").modal("toggle")});</script>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="titulo-modal">Declaración Jurada</h3>
                </div>
                <div class="modal-body">
                    <div class="checboxs">
                        <div class="item">
                            <div class="input">
                                <input onchange="return validarDeclaracionJurada()" class="form-check-input campoModalA" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Declaro bajo juramento que toda información consignada es verdadera.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="input">
                                <input onchange="return validarDeclaracionJurada()" class="form-check-input campoModalB" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Declaro bajo juramento no haber sido condenado por delito de terrorismo o apología al terrorismo en situación de consentida y ejecutoriada.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="input">
                                <input onchange="return validarDeclaracionJurada()" class="form-check-input campoModalC" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Declaro bajo juramento que al ingresar debo presentar los vouchers de pagos acorde a la modalidad de ingreso escogida.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="input">
                                <input onchange="return validarDeclaracionJurada()" class="form-check-input campoModalD" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Declaro bajo juramento conocer el reglamento, los requisitos y condiciones establecidos en el proceso de admisión 2023.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="input">
                                <input onchange="return validarDeclaracionJurada()" class="form-check-input campoModalE" type="checkbox">
                            </div>
                            <div class="content">
                                <p>Declaro bajo juramento que al ingresar debo presentar el voucher de pago por derecho de constancia de ingreso <b>S/50.70</b> y el certificado de estudios.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button disabled type="button" class="btn btn-success" id="aceptar" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
