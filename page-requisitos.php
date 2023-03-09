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
    $modalidad = $row['modalidad'];
    if(isset($_POST['botonA'])){
        $dni = $_POST['documento'];
        $concepto = "Requisitos según modalidad";
        $archivoA = $_FILES['archivoA']['name'];
        $sqlA = "INSERT INTO requisitos (dni, concepto, archivo, observacion) VALUES ('$dni', '$concepto', '$archivoA', 'Pendiente de revisión')";
        $queryA = mysqli_query($conexion, $sqlA);
        if($queryA){
            $carpetaA = "assets/requisitos/";
            opendir($carpetaA);
            $destinoA = $carpetaA.$_FILES['archivoA']['name'];
            if(!file_exists($destinoA)){
                copy($_FILES['archivoA']['tmp_name'], $destinoA);
            }
            $nombreA = $_FILES['archivoA']['name'];
            header("Location: page-requisitos");
        }
    }
    if(isset($_POST['botonB'])){
        $dni = $_POST['documento'];
        $concepto = "DNI o C.E";
        $archivoB = $_FILES['archivoB']['name'];
        $sqlB = "INSERT INTO requisitos (dni, concepto, archivo, observacion) VALUES ('$dni', '$concepto', '$archivoB', 'Pendiente de revisión')";
        $queryB = mysqli_query($conexion, $sqlB);
        if($queryB){
            $carpetaB = "assets/requisitos/";
            opendir($carpetaB);
            $destinoB = $carpetaB.$_FILES['archivoB']['name'];
            if(!file_exists($destinoB)){
                copy($_FILES['archivoB']['tmp_name'], $destinoB);
            }
            $nombreB = $_FILES['archivoB']['name'];
            header("Location: page-requisitos");
        }
    }
    if(isset($_POST['botonC'])){
        $dni = $_POST['documento'];
        $concepto = "Foto";
        $archivoC = $_FILES['archivoC']['name'];
        $sqlC = "INSERT INTO requisitos (dni, concepto, archivo, observacion) VALUES ('$dni', '$concepto', '$archivoC', 'Pendiente de revisión')";
        $queryC = mysqli_query($conexion, $sqlC);
        if($queryC){
            $carpetaC = "assets/requisitos/";
            opendir($carpetaC);
            $destinoC = $carpetaC.$_FILES['archivoC']['name'];
            if(!file_exists($destinoC)){
                copy($_FILES['archivoC']['tmp_name'], $destinoC);
            }
            $nombreC = $_FILES['archivoC']['name'];
            header("Location: page-requisitos");
        }
    }
    $archivoSqlA = "SELECT * FROM requisitos WHERE dni = '$documento' AND concepto = 'Requisitos según modalidad'";
    $resultadoA = mysqli_query($conexion, $archivoSqlA);
    $rowA = $resultadoA->fetch_assoc();
    if(isset($rowA)){
        $archivoRowA = $rowA['archivo'];
        $observacionRowA = $rowA['observacion'];
    }
    $archivoSqlB = "SELECT * FROM requisitos WHERE dni = '$documento' AND concepto = 'DNI o C.E'";
    $resultadoB = mysqli_query($conexion, $archivoSqlB);
    $rowB = $resultadoB->fetch_assoc();
    if(isset($rowB)){
        $archivoRowB = $rowB['archivo'];
        $observacionRowB = $rowB['observacion'];
    }
    $archivoSqlC = "SELECT * FROM requisitos WHERE dni = '$documento' AND concepto = 'Foto'";
    $resultadoC = mysqli_query($conexion, $archivoSqlC);
    $rowC = $resultadoC->fetch_assoc();
    if(isset($rowC)){
        $archivoRowC = $rowC['archivo'];
        $observacionRowC = $rowC['observacion'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css?1.8">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admisión | UNDC</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?2.1"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('components/sidebar.php');?>
    <section class="homeb">
        <div class="textb">
            <h1 class="titulo"><span>Paso 3</span>: Requisitos</h1>
            <div class="card">
                <div class="card-body">
                    <p class="parrafo">Suba los requisitos para completar su proceso de admisión 2023</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Formato</th>
                                <th>Subir archivo</th>
                                <th>Acción/Estado</th>
                                <th>Observación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="extraordinario" style="display:none">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <td>Requisitos según modalidad</td>
                                    <input type="hidden" name="documento" value="<?php echo $documento?>">
                                    <td><span class="badge text-bg-danger">RAR o ZIP</span></td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowA)){
                                                echo '<span>'.$archivoRowA.'</span>';
                                            }else{
                                                echo '<input accept=".zip, .rar" onchange="return validarSubirRequisitoA()" id="archivoA" name="archivoA" type="file" class="form-control">';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowA)){
                                                echo '<button disabled type="button" class="btn btn-success">Enviado</button>';
                                            }else{
                                                echo '<button id="botonA" name="botonA" disabled type="submit" class="btn btn-success">Enviar</button>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($observacionRowA)){
                                                echo $observacionRowA;
                                            }
                                        ?>
                                    </td>
                                </form>
                            </tr>
                            <?php
                                if($modalidad == 'Examen de Admisión Extraordinario'){
                                    echo '<script>document.getElementById("extraordinario").style.display = "table-row";</script>';
                                }
                            ?>
                            <tr>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <td>DNI o C.E</td>
                                    <input type="hidden" name="documento" value="<?php echo $documento?>">
                                    <td><span class="badge text-bg-danger">PDF, JPG</span></td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowB)){
                                                echo '<span>'.$archivoRowB.'</span>';
                                            }else{
                                                echo '<input accept=".pdf, .jpg" onchange="return validarSubirRequisitoB()" id="archivoB" name="archivoB" type="file" class="form-control">';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowB)){
                                                echo '<button disabled type="button" class="btn btn-success">Enviado</button>';
                                            }else{
                                                echo '<button id="botonB" name="botonB" disabled type="submit" class="btn btn-success">Enviar</button>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($observacionRowB)){
                                                echo $observacionRowB;
                                            }
                                        ?>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <td>Foto</td>
                                    <input type="hidden" name="documento" value="<?php echo $documento?>">
                                    <td><span class="badge text-bg-danger">JPG, PNG</span></td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowC)){
                                                echo '<span>'.$archivoRowC.'</span>';
                                            }else{
                                                echo '<input accept=".jpg, .png" onchange="return validarSubirRequisitoC()" id="archivoC" name="archivoC" type="file" class="form-control">';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($archivoRowC)){
                                                echo '<button disabled type="button" class="btn btn-success">Enviado</button>';
                                            }else{
                                                echo '<button id="botonC" name="botonC" disabled type="submit" class="btn btn-success">Enviar</button>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if(isset($observacionRowC)){
                                                echo $observacionRowC;
                                            }
                                        ?>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <?php
                    if($modalidad == "Examen de Admisión Extraordinario"){
                        if(isset($archivoRowA) && isset($archivoRowB) && isset($archivoRowC)){
                            echo '<a style="padding:12px" href="page-pagos" class="btn btn-success">Siguiente</a>';
                        }else{
                            echo '<button disabled style="padding:12px" type="button" class="btn btn-success">Siguiente</button>';
                        }
                    }else{
                        if(isset($archivoRowB) && isset($archivoRowC)){
                            echo '<a style="padding:12px" href="page-pagos" class="btn btn-success">Siguiente</a>';
                        }else{
                            echo '<button disabled style="padding:12px" type="button" class="btn btn-success">Siguiente</button>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>