<?php
if(isset($_POST['email'])) {



// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "thais182ster@gmail.com";
$email_subject = "Libro de reclamaciones";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['Nombre']) ||
!isset($_POST['Apellido_Paterno']) ||
!isset($_POST['Apellido_Materno']) ||
!isset($_POST['Dcto_de_Identidad']) ||
!isset($_POST['N_de_documento']) ||
!isset($_POST['Direccion']) ||
!isset($_POST['Email']) ||
!isset($_POST['Departamento']) ||
!isset($_POST['Provincia']) ||
!isset($_POST['Distrito']) ||
!isset($_POST['Telefono']) ||
!isset($_POST['Motivo']) ||
!isset($_POST['Fecha']) ||
!isset($_POST['Producto']) ||
!isset($_POST['Tipo_de_tarjeta']) ||
!isset($_POST['resp_via_telefonica']) ||
!isset($_POST['condiciones_datos_personales']) ||
!isset($_POST['Mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['Nombre'] . "\n";
$email_message .= "Apellido Paterno: " . $_POST['Apellido_Paterno'] . "\n";
$email_message .= "Apellido Paterno: " . $_POST['Apellido_Materno'] . "\n";
$email_message .= "Dcto de Identidad: " . $_POST['Dcto_de_Identidad'] . "\n";
$email_message .= "Nº de documento: " . $_POST['N_de_documento'] . "\n";
$email_message .= "Direción: " . $_POST['Direccion'] . "\n";
$email_message .= "E-mail: " . $_POST['Email'] . "\n";
$email_message .= "Departamento: " . $_POST['Departamento'] . "\n";
$email_message .= "Provincia: " . $_POST['Provincia'] . "\n";
$email_message .= "Distrito: " . $_POST['Distrito'] . "\n";
$email_message .= "Teléfono: " . $_POST['Telefono'] . "\n";
$email_message .= "Motivo ingresado: " . $_POST['Motivo'] . "\n";
$email_message .= "Fecha de incidencia: " . $_POST['Fecha'] . "\n";
$email_message .= "Producto: " . $_POST['Producto'] . "\n";
$email_message .= "Tipo de tarjeta afiliada: " . $_POST['Tipo_de_tarjeta'] . "\n";
$email_message .= "En caso su reclamo sea a su favor, acepta que la respuesta se dé a través de la vía telefónica: " . $_POST['resp_via_telefonica'] . "\n";
$email_message .= "Mensaje: " . $_POST['Mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>