<?php
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/keys.php';
  require_once __DIR__ . '/helpers.php';
  $client = new Lyra\Client();
  $store = array("amount" => 2000, 
  "currency" => "USD", 
  "orderId" => uniqid("MyOrderId"),
  "customer" => array(
    "email" => "user@example.com"
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
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/logos/0001.png">
  <link rel="stylesheet" href="../assets/css/general.css?1.6">
  <link rel="stylesheet" href="../assets/css/index.css?1.0"> 
  <link rel="stylesheet" href="../assets/css/icons.css?1.2">
  <script 
   src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
   kr-public-key="<?php echo $client->getPublicKey();?>"
   kr-post-url-success="terminal.php">
  </script>
  <script 
   src="<?php echo $client->getClientEndpoint();?>/static/js/krypton-client/V4.0/ext/classic.js">
  </script>
  <link rel="stylesheet" href="style.css?1.0"> 
</head>
<body>
    <h1 class="titulo titulob">Registration</h1>
    <h2 class="subtitulo">Join our community of more than 40 technology and research professionals.</h2>
  <?php include_once '../templates/menu.php'?>
  <div class="kr-embedded" kr-form-token="<?php echo $formToken;?>">
    <div class="kr-pan input-text"></div>
    <div class="logos">
      <img src="../assets/img/etc/visa-2.svg">
      <img src="../assets/img/etc/mastercard-2.svg">
    </div>
    <div class="kr-expiry input-text"></div>
    <div class="kr-security-code input-text"></div>  
    <div class="tap"></div>
    <button class="kr-payment-button input-submit">Pay $20.00</button>
    <div class="kr-form-error"></div>
  </div>  
  <?php include_once '../templates/footer.php'?>
</body>
<script src="../assets/js/script.js"></script>
<?php include_once '../templates/script.php'?>
</html>
