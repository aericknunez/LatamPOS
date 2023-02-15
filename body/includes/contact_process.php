<?php 


$destinatario = "aerick.nunez@gmail.com"; 
$asunto = 'Mensaje de ' . $_POST["name"] . ': Hibrido'; 
$cuerpo = ' 
<html> 
<head> 
   <title>' . $asunto . '</title> 
</head> 
<body> 
<h1>' . $_POST["name"] . '</h1>
<p> 
<b>Telefono: ' . $_POST["telefono"] . ' 
</p>
<p> 
<b>Asunto: ' . $_POST["subject"] . ' 
</p>
<p> 
<b>Objeto de envio: ' . $_POST["extra"] . ' 
</p>
<p> 
<b>' . $_POST["message"] . ' 
</p>Mensaje generado por ' . $_SERVER["SERVER_NAME"] . '
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ". $_POST["name"] ." <". $_POST["email"] .">\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

	if(mail($destinatario,$asunto,$cuerpo,$headers)){
		echo 'Encvado correctamente';
	} else {
		echo 'Fallo al enviar';;
	}





 ?>