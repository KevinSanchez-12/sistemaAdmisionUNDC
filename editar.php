<?php
    include 'bd.php';
    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['correo']) && !isset(($_SESSION['password']))){
        header('Location: administrador');
    }
    $documento = $_GET['id'];
    $paises = "SELECT * FROM paises";
    $anos = "SELECT * FROM anos";
    $modalidadsql = "SELECT * FROM modalidad";
    $sql = "SELECT * FROM postulantes WHERE documento = '$documento'";
    $carreras = "SELECT * FROM carreras";
    $medios = "SELECT * FROM medios";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($result);
    $estado = $row['estado'];
    $nombres = $row['nombres'];
    $apellidoPaterno = $row['apellidoPaterno'];
    $apellidoMaterno = $row['apellidoMaterno'];
    $tipoDocumento = $row['tipoDocumento'];
    $documento = $row['documento'];
    $fechaNacimiento = $row['fechaNacimiento'];
    $edad = $row['edad'];
    $sexo = $row['sexo'];
    $estadoCivil = $row['estadoCivil'];
    $paisNacimiento = $row['paisNacimiento'];
    $departamentoNacimiento = $row['departamentoNacimiento'];
    $provinciaNacimiento = $row['provinciaNacimiento'];
    $distritoNacimiento = $row['distritoNacimiento'];
    $direccion = $row['direccion'];
    $departamentoActual = $row['departamentoActual'];
    $provinciaActual = $row['provinciaActual'];
    $distritoActual = $row['distritoActual'];
    $celular = $row['celular'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $dniApoderado = $row['dniApoderado'];
    $apellidoPaternoApoderado = $row['apellidoPaternoApoderado'];
    $apellidoMaternoApoderado = $row['apellidoMaternoApoderado'];
    $nombresApoderado = $row['nombresApoderado'];
    $celularApoderado = $row['celularApoderado'];
    $colegio = $row['colegio'];
    $departamentoColegio = $row['departamentoColegio'];
    $provinciaColegio = $row['provinciaColegio'];
    $distritoColegio = $row['distritoColegio'];
    $culminoColegio = $row['culminoColegio'];
    $anoCulminadoColegio = $row['anoCulminadoColegio'];
    $modalidad = $row['modalidad'];
    $tipo = $row['tipo'];
    $universidad = $row['universidad'];
    $creditos = $row['creditos'];
    $ruv = $row['ruv'];
    $carrera = $row['carrera'];
    $medio = $row['medio'];
    $password = $row['password'];
    if(isset($_POST['submit'])){
        $apellidoPaternoB = $_POST['apellidoPaterno'];
        $apellidoMaternoB = $_POST['apellidoMaterno'];
        $nombresB = $_POST['nombres'];
        $tipoDocumentoB = $_POST['tipoDocumento'];
        $documentoB = $_POST['documento'];
        $fechaNacimientoB = $_POST['fechaNacimiento'];
        $edadB = $_POST['edad'];
        $sexoB = $_POST['sexo'];
        $estadoCivilB = $_POST['estadoCivil'];
        $paisNacimientoB = $_POST['paisNacimiento'];
        $departamentoNacimientoB = $_POST['departamentoNacimiento'];
        $provinciaNacimientoB = $_POST['provinciaNacimiento'];
        $distritoNacimientoB = $_POST['distritoNacimiento'];
        $direccionB = $_POST['direccion'];
        $departamentoActualB = $_POST['departamentoActual'];
        $provinciaActualB = $_POST['provinciaActual'];
        $distritoActualB = $_POST['distritoActual'];
        $celularB = $_POST['celular'];
        $telefonoB = $_POST['telefono'];
        $correoB = $_POST['correo'];
        $dniApoderadoB = $_POST['dniApoderado'];
        $apellidoPaternoApoderadoB = $_POST['apellidoPaternoApoderado'];
        $apellidoMaternoApoderadoB = $_POST['apellidoMaternoApoderado'];
        $nombresApoderadoB = $_POST['nombresApoderado'];
        $celularApoderadoB = $_POST['celularApoderado'];
        $colegioB = $_POST['colegio'];
        $departamentoColegioB = $_POST['departamentoColegio'];
        $provinciaColegioB = $_POST['provinciaColegio'];
        $distritoColegioB = $_POST['distritoColegio'];
        $culminoColegioB = $_POST['culminoColegio'];
        $anoCulminadoColegioB = $_POST['anoCulminadoColegio'];
        $modalidadB = $_POST['modalidad'];
        $tipoB = $_POST['tipo'];
        $universidadB = $_POST['universidad'];
        $creditosB = $_POST['creditos'];
        $ruvB = $_POST['ruv'];
        $carreraB = $_POST['carrera'];
        $medioB = $_POST['medio'];
        $passwordB = $_POST['password'];
        $sql2 = "UPDATE postulantes SET apellidoPaterno='$apellidoPaternoB', apellidoMaterno='$apellidoMaternoB', nombres='$nombresB', tipoDocumento='$tipoDocumentoB', documento='$documentoB', fechaNacimiento='$fechaNacimientoB', edad='$edadB', sexo='$sexoB', estadoCivil='$estadoCivilB', paisNacimiento='$paisNacimientoB', departamentoNacimiento='$departamentoNacimientoB', provinciaNacimiento='$provinciaNacimientoB', distritoNacimiento='$distritoNacimientoB', direccion='$direccionB', departamentoActual='$departamentoActualB', provinciaActual='$provinciaActualB', distritoActual='$distritoActualB', celular='$celularB', telefono='$telefonoB', correo='$correoB', dniApoderado='$dniApoderadoB', apellidoPaternoApoderado='$apellidoPaternoApoderadoB', apellidoMaternoApoderado='$apellidoMaternoApoderadoB', nombresApoderado='$nombresApoderadoB', celularApoderado='$celularApoderadoB', colegio='$colegioB', departamentoColegio='$departamentoColegioB', provinciaColegio='$provinciaColegioB', distritoColegio='$distritoColegioB', culminoColegio='$culminoColegioB', anoCulminadoColegio='$anoCulminadoColegioB', modalidad='$modalidadB', tipo='$tipoB', universidad='$universidadB', creditos='$creditosB', ruv='$ruvB', carrera='$carreraB', medio='$medioB', password='$passwordB' WHERE documento ='$documentoB'";
        $result = mysqli_query($conexion, $sql2);
        header("Location: page-postulantes-administrador");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css?2.4">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admisión | UNDC</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?1.9"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('components/sidebar-administrador.php');?>
    <section class="homeb">
        <div class="textb">
            <h1>Editar</h1>
            <div class="card">
                <div class="card-body">
                    <form class="max-container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <p class="parrafo">Actualice los siguientes campos</p>
                        <p class="subtitulo">1. Datos personales</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Estado</span>
                                <select class="form-control" name="estado">
                                    <option value="<?php echo $estado?>" selected hidden><?php echo $estado?></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Apellido paterno</span>
                                <input value="<?php echo $apellidoPaterno?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="apellidoPaterno" name="apellidoPaterno" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Apellido materno</span>
                                <input value="<?php echo $apellidoMaterno?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="apellidoMaterno" name="apellidoMaterno" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Nombres</span>
                                <input value="<?php echo $nombres?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="nombres" name="nombres" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Tipo documento</span>
                                <select onchange="return validarInscripcion()" id="tipoDocumento" name="tipoDocumento" class="form-control">
                                    <?php
                                        if($tipoDocumento == "DNI"){
                                            echo "<option value='DNI' selected>DNI</option>";
                                            echo "<option value='Carnet de extranjería'>Carnet de extranjería</option>";
                                        }else{
                                            echo "<option value='DNI'>DNI</option>";
                                            echo "<option value='Carnet de extranjería' selected>Carnet de extranjería</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Documento</span>
                                <input value="<?php echo $documento?>" onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="documento" name="documento" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Fecha de nacimiento</span>
                                <input value="<?php echo $fechaNacimiento?>" onchange="return validarInscripcion(), calcularEdad()" id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Edad</span>
                                <input value="<?php echo $edad?>" id="edad" name="edad" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Sexo</span>
                                <select onchange="return validarInscripcion()" id="sexo" name="sexo" class="form-control">
                                    <?php
                                        if($sexo == "Masculino"){
                                            echo "<option value='Masculino' selected>Masculino</option>";
                                            echo "<option value='Femenino'>Femenino</option>";
                                        }else{
                                            echo "<option value='Masculino'>Masculino</option>";
                                            echo "<option value='Femenino' selected>Femenino</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Estado civil</span>
                                <select onchange="return validarInscripcion()" id="estadoCivil" name="estadoCivil" class="form-control">
                                    <option value="<?php echo $estadoCivil?>" hidden selected><?php echo $estadoCivil?></option>
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
                                <span class="input-group-text">País</span>
                                <select onchange="return validarInscripcion()" id="paisNacimiento" name="paisNacimiento" class="form-control">
                                    <option value="<?php echo $paisNacimiento?>" hidden selected><?php echo $paisNacimiento?></option>
                                    <?php $resultado= mysqli_query($conexion, $paises);
                                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                                        <option value="<?php echo $row["nombre"];?>"><?php echo $row["nombre"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Departamento</span>
                                <input value="<?php echo $departamentoNacimiento?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="departamentoNacimiento" name="departamentoNacimiento" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Provincia</span>
                                <input value="<?php echo $provinciaNacimiento?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="provinciaNacimiento" name="provinciaNacimiento" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Distrito</span>
                                <input value="<?php echo $distritoNacimiento?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="distritoNacimiento" name="distritoNacimiento" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                        </div>
                        <p class="subtitulo">3. Domicilio actual</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Dirección</span>
                                <input value="<?php echo $direccion?>" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="direccion" name="direccion" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Departamento</span>
                                <input value="<?php echo $departamentoActual?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="departamentoActual" name="departamentoActual" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Provincia</span>
                                <input value="<?php echo $provinciaActual?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="provinciaActual" name="provinciaActual" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Distrito</span>
                                <input value="<?php echo $distritoActual?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="distritoActual" name="distritoActual" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                        </div>
                        <p class="subtitulo">4. Datos de contacto</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Celular</span>
                                <input value="<?php echo $celular?>" onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="celular" name="celular" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Teléfono fijo</span>
                                <input value="<?php echo $telefono?>" onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="telefono" name="telefono" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Correo</span>
                                <input value="<?php echo $correo?>" onkeyup="return convertirTodoAminusculas()"  onchange="return validarInscripcion()" id="correo" name="correo" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                        </div>
                        <p class="subtitulo">5. Datos del padre, madre o apoderado</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">DNI</span>
                                <input value="<?php echo $dniApoderado?>" onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="dniApoderado" name="dniApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Apellido Paterno</span>
                                <input value="<?php echo $apellidoPaternoApoderado?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="apellidoPaternoApoderado" name="apellidoPaternoApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Apellido Materno</span>
                                <input value="<?php echo $apellidoMaternoApoderado?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="apellidoMaternoApoderado" name="apellidoMaternoApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Nombres</span>
                                <input value="<?php echo $nombresApoderado?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="nombresApoderado" name="nombresApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Celular</span>
                                <input value="<?php echo $celularApoderado?>" onkeypress="return soloNumeros(event)" onchange="return validarInscripcion()" id="celularApoderado" name="celularApoderado" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                        </div>
                        <p class="subtitulo">6. Datos de la Institución Educativa de procedencia</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Colegio</span>
                                <input value="<?php echo $colegio?>" onchange="return validarInscripcion()" id="colegio" name="colegio" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Departamento</span>
                                <input value="<?php echo $departamentoColegio?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="departamentoColegio" name="departamentoColegio" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Provincia</span>
                                <input value="<?php echo $provinciaColegio?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="provinciaColegio" name="provinciaColegio" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Distrito</span>
                                <input value="<?php echo $distritoColegio?>" onkeypress="return soloLetras(event)" onkeyup="return convertirAOracion()" onchange="return validarInscripcion()" id="distritoColegio" name="distritoColegio" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">¿Has culminado tus estudios?</span>
                                <select onchange="return validarInscripcion(), validarCulminarEstudios()" id="culminoColegio" name="culminoColegio" class="form-control">
                                    <option value="<?php echo $culminoColegio?>" hidden selected><?php echo $culminoColegio?></option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Año que concluyó sus estudios</span>
                                <select onchange="return validarInscripcion()" id="anoCulminadoColegio" name="anoCulminadoColegio" class="form-control">
                                    <option value="<?php echo $anoCulminadoColegio?>" hidden selected><?php echo $anoCulminadoColegio?></option>
                                    <?php $resultado= mysqli_query($conexion, $anos);
                                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                                        <option value="<?php echo $row["valor"];?>"><?php echo $row["valor"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <p class="subtitulo">7. Modalidad y carrera profesional</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Modalidad</span>
                                <select onchange="return validarInscripcion(), validarModalidad()" id="modalidad" name="modalidad" class="form-control">
                                    <option value="<?php echo $modalidad?>" hidden selected><?php echo $modalidad?></option>
                                    <?php $resultado= mysqli_query($conexion, $modalidadsql);
                                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                                        <option value="<?php echo $row["nombre"];?>"><?php echo $row["nombre"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Tipo</span>
                                <select onchange="return validarTipo()" id="tipo" name="tipo" class="form-control">
                                    <option value="<?php echo $tipo?>" hidden selected><?php echo $tipo?></option>
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
                            <div class="input-group">
                                <span class="input-group-text">Universidad de procedencia</span>
                                <input value="<?php echo $universidad?>" id="universidad" name="universidad" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Créditos aprobados</span>
                                <input value="<?php echo $creditos?>" onkeypress="return soloNumeros(event)" id="creditos" name="creditos" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">RUV</span>
                                <input value="<?php echo $ruv?>" onkeypress="return soloNumeros(event)" id="ruv" name="ruv" type="text" class="form-control" placeholder="Escriba aquí">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Carrera profesional</span>
                                <select onchange="return validarInscripcion()" id="carrera" name="carrera" class="form-control">
                                    <option value="<?php echo $carrera?>" hidden selected><?php echo $carrera?></option>
                                    <?php $resultado= mysqli_query($conexion, $carreras);
                                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                                        <option value="<?php echo $row["nombre"];?>"><?php echo $row["nombre"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <p class="subtitulo">8. ¿Cómo se enteró del examen de admisión?</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Medio</span>
                                <select onchange="return validarInscripcion()" id="medio" name="medio" class="form-control">
                                    <option value="<?php echo $medio?>" hidden selected><?php echo $medio?></option>
                                    <?php $resultado= mysqli_query($conexion, $medios);
                                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                                        <option value="<?php echo $row["nombre"];?>"><?php echo $row["nombre"];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <p class="subtitulo">9. Generar contraseña</p>
                        <div class="campos">
                            <div class="input-group">
                                <span class="input-group-text">Contraseña</span>
                                <input value="<?php echo $password?>" onchange="return validarInscripcion()" id="password" name="password" type="password" class="form-control campo" placeholder="Escriba aquí">
                                <i id="eye" style="cursor:pointer; margin:auto; padding:10px" onclick="verContrasena()" class='input-group-text fa fa-eye'></i>
                            </div>
                        </div>
                        <br>
                        <button name="submit" type="submit" class="btn btn-success btn-opcion">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>