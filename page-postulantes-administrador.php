<?php
    include 'bd.php';
    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['correo']) && !isset(($_SESSION['password']))){
        header('Location: administrador');
    }
    $postulantes = "SELECT * FROM postulantes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css?2.1">
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
            <h1>Postulantes</h1>
            <div class="card">
                <div class="card-body">
                    <div class="tabla" style="overflow:auto">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Acción</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Tipo de documento</th>
                                    <th scope="col">Documento</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha nacimiento</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Estado civil</th>
                                    <th scope="col">País nacimiento</th>
                                    <th scope="col">Departamento nacimiento</th>
                                    <th scope="col">Provincia nacimiento</th>
                                    <th scope="col">Distrito nacimiento</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Departamento actual</th>
                                    <th scope="col">Provincia actual</th>
                                    <th scope="col">Distrito actual</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">DNI apoderado</th>
                                    <th scope="col">Nombres apoderado</th>
                                    <th scope="col">Apellidos apoderado</th>
                                    <th scope="col">Celular apoderado</th>
                                    <th scope="col">Colegio</th>
                                    <th scope="col">Departamento colegio</th>
                                    <th scope="col">Provincia colegio</th>
                                    <th scope="col">Distrito colegio</th>
                                    <th scope="col">Culmino colegio</th>
                                    <th scope="col">Año que culminó colegio</th>
                                    <th scope="col">Modalidad</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Universidad</th>
                                    <th scope="col">Créditos</th>
                                    <th scope="col">RUV</th>
                                    <th scope="col">Carrera</th>
                                    <th scope="col">Medio</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $resultado= mysqli_query($conexion, $postulantes);
                                while($row=mysqli_fetch_assoc($resultado)){ ?>
                                    <tr>
                                        <td><?php echo $row["id"];?></td>
                                        <td>
                                            <div class="botones-edit">
                                                <a class="btn btn-warning" href="editar?id=<?php echo $row["documento"];?>" style="padding-top:10px"><i class='bx bxs-edit'></i></a>
                                                <a class="btn btn-primary" download="Reporte" href="reporte?id=<?php echo $row["documento"];?>" style="padding-top:10px"><i class='bx bxs-download'></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <?php 
                                                if($row["estado"] == "Activo"){
                                                    echo '<span class="badge text-bg-success">Activo</span>';
                                                }else{
                                                    echo '<span class="badge text-bg-danger">Inactivo</span>';
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $row["nombres"];?></td>
                                        <td><?php echo $row["apellidoPaterno"]." ".$row["apellidoMaterno"];?></td>
                                        <td><?php echo $row["tipoDocumento"];?></td>
                                        <td><?php echo $row["documento"];?></td>
                                        <td><?php echo $row["celular"];?></td>
                                        <td><?php echo $row["correo"];?></td>
                                        <td><?php echo date("d-m-Y", strtotime($row["fechaNacimiento"]))?></td>
                                        <td><?php echo $row["edad"];?></td>
                                        <td><?php echo $row["sexo"];?></td>
                                        <td><?php echo $row["estadoCivil"];?></td>
                                        <td><?php echo $row["paisNacimiento"];?></td>
                                        <td><?php echo $row["departamentoNacimiento"];?></td>
                                        <td><?php echo $row["provinciaNacimiento"];?></td>
                                        <td><?php echo $row["distritoNacimiento"];?></td>
                                        <td><?php echo $row["direccion"];?></td>
                                        <td><?php echo $row["departamentoActual"];?></td>
                                        <td><?php echo $row["provinciaActual"];?></td>
                                        <td><?php echo $row["distritoActual"];?></td>
                                        <td><?php echo $row["telefono"];?></td>
                                        <td><?php echo $row["dniApoderado"];?></td>
                                        <td><?php echo $row["nombresApoderado"];?></td>
                                        <td><?php echo $row["apellidoPaternoApoderado"]." ".$row["apellidoMaternoApoderado"];?></td>
                                        <td><?php echo $row["celularApoderado"];?></td>
                                        <td><?php echo $row["colegio"];?></td>
                                        <td><?php echo $row["departamentoColegio"];?></td>
                                        <td><?php echo $row["provinciaColegio"];?></td>
                                        <td><?php echo $row["distritoColegio"];?></td>
                                        <td><?php echo $row["culminoColegio"];?></td>
                                        <td><?php echo $row["anoCulminadoColegio"];?></td>
                                        <td><?php echo $row["modalidad"];?></td>
                                        <td><?php echo $row["tipo"];?></td>
                                        <td><?php echo $row["universidad"];?></td>
                                        <td><?php echo $row["creditos"];?></td>
                                        <td><?php echo $row["ruv"];?></td>
                                        <td><?php echo $row["carrera"];?></td>
                                        <td><?php echo $row["medio"];?></td>
                                    </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>