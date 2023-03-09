<?php
    include 'bd.php';
    $documento = $_GET['id'];
    $correo = $_GET['correo'];
    $sqlc = "SELECT * FROM postulantes WHERE documento = '$documento'";
    $resultc = mysqli_query($conexion, $sqlc);
    $rowc = mysqli_fetch_assoc($resultc);
    $password = $rowc['password'];
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = '1772622771@undc.edu.pe';                     
        $mail->Password   = 'kevinsanchez2000';                              
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                   
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->setFrom('1772622771@undc.edu.pe', 'Admision UNDC');
        $mail->addAddress($correo);   
        $mail->isHTML(true);                                  
        $mail->Subject = 'Notificacion';
        $mail->Body = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            </head>
            <body>
                <div style="width: 100%; height: 100%; background-color: #f2f2f2; padding: 20px;">
                    <div style="width: 100%; max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius:10px">
                        <div style="width: 100%; text-align: center;">
                            <img src="https://cidi.org.pe/undc/assets/img/logo.png" alt="Universidad Nacional de Cañete" style="width: 100px;">
                        </div>
                        <div style="width: 100%; text-align: center; margin-top: 20px;">
                            <h1 style="font-size: 30px; color: #000; font-weight: 600;">Credenciales para ingresar al sistema de admisión</h1>
                            <p style="font-size: 16px; color: #000; font-weight: 400;">Gracias por registrarte en nuestra plataforma, tu correo es: <b>'.$correo.'</b> y tu contraseña es: <b>'.$password.'</b></p>
                        </div>
                        <div style="width: 100%; text-align: center; margin-top: 20px;">
                            <a class="btn btn-success" href="https://admision.undc.edu.pe/inscripciones" style="display: inline-block; background-color: #029C32; color: #fff; padding: 10px 20px; text-decoration: none; font-size: 16px; font-weight: 600;">Ingresar</a>
                        </div>
                    </div>
            </body>
            </html>
        ';
        $mail->send();
        } catch (Exception $e) {
            echo "";
        }
    if(isset($_POST['submit'])){
        $documento = $_POST['documento'];
        $sql = "UPDATE `pagos` SET `pago` = 'SI' WHERE `pagos`.`dni` = '$documento'";
        $sqlb = "UPDATE `postulantes` SET `estado` = 'Activo' WHERE `postulantes`.`documento` = '$documento'";
        $result = mysqli_query($conexion, $sql);
        $resultb = mysqli_query($conexion, $sqlb);
        if($result && $resultb){
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
    <link rel="stylesheet" href="assets/css/estilos.css?2.6">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admisión | UNDC</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js?2.3"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
</head>
<body class="fondoPasarela">
    <div class="kr-embedded">
        <img class="logo" src="assets/img/logo.png">
        <h1 style="margin-bottom:10px; text-align:center">Pago exitoso</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="documento" value="<?php echo $documento?>">
            <button name="submit" type="submit" class="btn btn-success btn-opcion">Iniciar sesión</button>
        </form>
    </div> 
</body>
</html>