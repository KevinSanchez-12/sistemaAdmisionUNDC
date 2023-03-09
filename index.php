<?php
    include('bd.php');
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['correo']) && isset(($_SESSION['password']))){
        header('Location: home');
    }
    if(!empty($_POST['correo']) && !empty($_POST['password'])){
        session_start();
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM postulantes WHERE correo = '$correo' AND password = '$password' AND estado = 'Activo'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_array($resultado);
        if($password == $fila['password'] && $correo == $fila['correo']){
            $_SESSION['id'] = $fila['id'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['password'] = $fila['password'];
            header("Location: home");
        } else {
            header("Location: index");
        }
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
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?2.1"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
    <link href="assets/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/alertifyjs/css/themes/default.css" rel="stylesheet" type="text/css"/>
    <script src="assets/alertifyjs/alertify.js"></script>
</head>
    <body class="login">
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
            <img class="logo" src="assets/img/logo.png">
            <h1 style="margin-bottom:20px; text-align:center">Iniciar Sesión</h1>
            <div class="input-group mb-3">
                <span class="input-group-text">Correo</span>
                <input onkeyup="return validarCamposParaLogueo()" id="correo" name="correo" type="text" class="form-control campo" placeholder="Escriba aquí">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Contraseña</span>
                <input onkeyup="return validarCamposParaLogueo()" id="password" name="password" type="password" class="form-control campo" placeholder="Escriba aquí">
                <i id="eye" style="cursor:pointer; margin:auto; padding:10px" onclick="verContrasena()" class='input-group-text fa fa-eye'></i>
            </div>
            <button disabled id="boton" type="submit" class="btn btn-success btn-opcion">Ingresar</button>
            <p class="text-inscribir" style="text-align:center">¿No tienes una cuenta? <a href="inscripcion" class="parpadeo">Inscribete</a></p>
            <a style="padding:12px; margin-top: 0px; margin-bottom:10px" class="btn btn-danger btn-opcion" href="">Videotutorial</a>
            <a style="padding:12px; margin-top: 0px; margin-bottom:0px" class="btn btn-warning btn-opcion" href="assets/documentos/manual.pdf" download="Manual de inscripción UNDC 2023">Manual de inscripción</a>

        </form>
    </body>
    <script>$( document ).ready(function() {$("#myModal").modal("toggle")});</script>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="titulo-modal">Aviso</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Inscríbase en el proceso de admisión 2023 en 3 simples pasos:</p>
                    <div class="pasos">
                        <img src="assets/img/pasos/paso1.png">
                        <img src="assets/img/pasos/paso2.png">
                        <img src="assets/img/pasos/paso3.png">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</html>
