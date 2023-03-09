<?php
    include 'bd.php';
    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['correo']) && !isset(($_SESSION['password']))){
        header('Location: index');
    }
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM postulantes WHERE id = '$id'";
    $resultado=$conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $nombres = $row['nombres'];
    $tipoDocumento = $row['tipoDocumento'];
    $documento = $row['documento'];
    $apellidoPaterno = $row['apellidoPaterno'];
    $apellidoMaterno = $row['apellidoMaterno'];
    $fechaNacimiento = $row['fechaNacimiento'];
    $carrera = $row['carrera'];
    $modalidad = $row['modalidad'];
    $celular = $row['celular'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
    $distritoActual = $row['distritoActual'];
    $provinciaActual = $row['provinciaActual'];
    $departamentoActual = $row['departamentoActual'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css?1.4">
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
    <?php include('components/sidebar.php');?>
    <section class="homeb">
        <div class="textb">
            <h1>Inicio</h1>
            <div class="card">
                <div class="card-body">
                    <p><b>Postulante:</b> <?php echo $nombres." ".$apellidoPaterno. " ". $apellidoMaterno?></p>
                    <p><b><?php echo $tipoDocumento?>:</b> <?php echo $documento?></p>
                    <p><b>Código:</b> <?php echo $documento?></p>
                    <p><b>Fecha de nacimiento:</b> <?php echo date("d-m-Y", strtotime($fechaNacimiento))?></p>
                    <p><b>Carrera profesional:</b> <?php echo $carrera?></p>
                    <p><b>Modalidad:</b> <?php echo $modalidad?></p>
                    <p><b>Celular:</b> <?php echo $celular?></p>
                    <p><b>Domicilio actual:</b> <?php echo $direccion.', '.$distritoActual.', '.$provinciaActual.' - '.$departamentoActual?></p>
                    <p><b>Correo:</b> <?php echo $correo?></p>
                    <a style="padding:12px" class="btn btn-success btn-opcion" href="page-requisitos">Empezar</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>