<?php
$to = $_REQUEST['email'];
$mail = $_REQUEST['mensaje'];

//Titulo
$titulo = $_REQUEST['asunto'];
//Enviamos el mensaje a tu direccion email
$bool = mail($to, $titulo,$mail);
if($bool){
	echo "Mensaje enviado";
}else{
	echo "Mensaje no enviado";
}
header('Location: enviado.html');
?>