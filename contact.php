<?php

//Datos que recogemos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = "jitos@jitos.dev";

$headers = 'From: ' .$email;

//Filtramos primero para ver si el email es valido
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
  mail($from, $subject, $message, $headers);

  $response = [
    'status' => 'success',
    'message' => 'He recibido su mensaje. En breve me pondré en contacto con usted'
  ];

  echo json_encode($response, JSON_FORCE_OBJECT);

} else {

  $response = [
    'status' => 'error',
    'message' => 'No se pudo enviar su mensaje. Por favor inténtelo más tarde'
  ];

  echo json_encode($response, JSON_FORCE_OBJECT);
}

?>