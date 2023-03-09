<?php
    $data = $_GET['data'];
    $data = json_decode($data, JSON_PRETTY_PRINT);
    $documento = $data['documento'];
    $correo = $data['correo'];
    $inputA = $data['inputA'];
    $inputC = $data['inputC'];
    $inputD = $data['inputD'];
    $inputF = $data['inputF'];
    $inputG = $data['inputG'];
    $inputH = $data['inputH'];
    $inputI = $data['inputI'];
    $inputJ = $data['inputJ'];
    $inputK = $data['inputK'];
    $inputL = $data['inputL'];
    $inputM = $data['inputM'];
    $inputN = $data['inputN'];
    $inputO = $data['inputO'];
    $inputP = $data['inputP'];
    $inputQ = $data['inputQ'];
    $inputR = $data['inputR'];
    $inputS = $data['inputS'];
    $inputT = $data['inputT'];
    $suma = $inputA + $inputC + $inputD + $inputF + $inputG + $inputH + $inputI + $inputJ + $inputK + $inputL + $inputM + $inputN + $inputO + $inputP + $inputQ + $inputR + $inputS + $inputT;
    $suma = $suma + ($suma * 0.045);
    $suma = number_format($suma, 2, '.', '');
    $separador = explode('.', $suma);
    $suma = $separador[0] . $separador[1];
    if($suma == 0){
        $suma = 10;
    }
    require_once __DIR__ . '/pasarela/vendor/autoload.php';
    require_once __DIR__ . '/pasarela/keys.php';
    require_once __DIR__ . '/pasarela/helpers.php';
    $client = new Lyra\Client();
    $store = array(
        "amount" => $suma, 
        "currency" => "PEN", 
        "orderId" => uniqid($documento),
        "customer" => array(
            "email" => $correo
        ));
        $response = $client->post("V4/Charge/CreatePayment", $store);
        if ($response['status'] != 'SUCCESS') {
            display_error($response);
            $error = $response['answer'];
            throw new Exception("error " . $error['errorCode'] . ": " . $error['errorMessage'] );
        }
    $formToken = $response["answer"]["formToken"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css?1.0">
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
    <script src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
    kr-public-key="<?php echo $client->getPublicKey();?>"
    kr-post-url-success="page-pagocorrecto.php?id=<?php echo $documento?>">
    </script>
    <script 
    src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/ext/classic.js">
    </script>
</head>
<body class="fondoPasarela">
    <div class="kr-embedded" kr-form-token="<?php echo $formToken;?>">
        <img class="logo" src="assets/img/logo.png">
        <div class="images">
            <img src="assets/img/1.png">
            <img src="assets/img/2.png">
            <img src="assets/img/3.png">
            <img src="assets/img/4.png">
            <img src="assets/img/5.png">
            <img src="assets/img/6.png">
        </div>
        <p style="color:red; font-weight:700; text-align:center">Aceptamos todas las tarjetas</p>
        <div class="input-group mb-3">
          <div class="kr-pan form-control"></div> 
            <span style="height:40px" class="input-group-text"><i class='bx bxs-credit-card'></i></span>
        </div>
        <div class="input-group mb-3">
            <div class="kr-expiry form-control"></div>
            <span style="height:40px" class="input-group-text"><i class='bx bx-calendar' ></i></span>
        </div>
        <div class="input-group mb-3">
            <div class="kr-security-code form-control"></div>  
            <span style="height:40px" class="input-group-text"><i class='bx bxs-lock-alt'></i></span>
        </div>  
        <button type="submit" class="kr-payment-button"></button>
        <div class="kr-form-error"></div>
    </div> 
</body>
</html>