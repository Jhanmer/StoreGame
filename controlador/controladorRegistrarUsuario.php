<?php

//guardamos los datos el post
/* validar que exista los datos del post*/

$Data[0] = $_POST["txtNom"];
$Data[1] = $_POST["txtApe"];
$Data[2] = $_POST["txtCorreo"];
$Data[3] = $_POST["txtUser"];
$Data[4] = $_POST["txtClave"];

require_once('../modelo/modeloGamer.php');
$oUsuario = new cUsuario();

$Result =$oUsuario->AgregarUsuario($Data);

if($Result == 1){
	?>
	<h2>Se Registro Correctamente</h2>
	<META http-equiv="Refresh" CONTENT="2; 
	URL=../index.php">
	<?php
}
else{
	?>
	<h2>Error</h2>
	<?php echo mysqli_errno($Cadena);
}
?>