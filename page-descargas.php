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
    $documento = $row['documento'];
    $sqlb = "SELECT * FROM pagos WHERE dni = '$documento'";
    $resultadob=$conexion->query($sqlb);
    $rowb = $resultadob->fetch_assoc();
    if(isset($rowb)){
        $prospecto = $rowb['prospecto'];
    }
    $sqlc = "SELECT * FROM requisitos WHERE dni = '$documento' AND concepto = 'Foto'";
    $resultadoc=$conexion->query($sqlc);
    $rowc = $resultadoc->fetch_assoc();
    if(isset($rowc)){
        $foto = $rowc['archivo'];
    }
    $sqld = "SELECT * FROM vouchers WHERE dni = '$documento' AND concepto = 'Prospecto'";
    $resultadod = $conexion->query($sqld);
    $rowd = $resultadod->fetch_assoc();
    if(isset($rowd)){
        $estado = $rowd['estado'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css?1.6">
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
            <h1>Descargas</h1>
            <div class="card">
                <div class="card-body">
                    <p class="parrafo">Zona de descargas</p>
                    <div class="download">
                        <a download="Prospecto UNDC 2023" class="btn btn-success" href="assets/documentos/prospecto.pdf"><i class="bx bx-download icon"></i>Prospecto</a>   
                        <a download="Ficha de inscripción" class="btn btn-success" href="fichaInscripcion?id=<?php echo $documento?>"><i class='bx bx-download icon'></i>Ficha de inscripción</a>
                        <?php
                            if(isset($foto)){
                                if($foto != ""){
                                    echo '<a download="Carne" class="btn btn-success" href="carne?id='.$documento.'"><i class="bx bx-download icon"></i>Carné de postulante</a>';
                                }
                            }else{
                                echo '<a class="btn btn-danger"><i class="bx bx-x icon"></i>Carné de postulante</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>