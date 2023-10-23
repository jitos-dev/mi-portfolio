<?php

//Datos que recogemos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$captcha = $_POST['captcha'];
$from = "jitos.dev";
$subject = $_POST['subject'] ." (enviado desde el portfolio)";
$message = 'Nombre: ' .$name ."\r\n";
$message .= 'Email: ' .$email ."\r\n";
$message .= 'Asunto: ' .$subject ."\r\n";
$message .= $_POST['message'];
$to = "jitos86@gmail.com";

$headers = 'From:' .$from . "\r\n";

//Filtramos primero para ver si el email es valido
if(filter_var($to, FILTER_VALIDATE_EMAIL)) {

  // Verificamos que el captcha sea válido
  if (!is_numeric($captcha) || $captcha != 4) {
    $response = [
      'status' => 'error',
      'message' => 'La suma de dos más dos no es correcta. Inténtelo de nuevo.'
    ];
  
    echo json_encode($response, JSON_FORCE_OBJECT);
  } else {
    mail($to, $subject, $message, $headers);
  
    $response = [
      'status' => 'success',
      'message' => 'He recibido su mensaje. En breve me pondré en contacto con usted'
    ];
  
    echo json_encode($response, JSON_FORCE_OBJECT);
  }

} else {

  $response = [
    'status' => 'error',
    'message' => 'No se pudo enviar su mensaje. Por favor inténtelo más tarde'
  ];

  echo json_encode($response, JSON_FORCE_OBJECT);
}
?>