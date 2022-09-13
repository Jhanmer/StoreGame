<?php

if (isset($_POST['txtUser']) && isset($_POST['txtClave'])) {
	$user = $_POST['txtUser'];
	$pass = $_POST['txtClave'];

	if($user == "" && $pass == "")
	{
		echo "Datos no definidos";
		?>
		<META http-equiv="Refresh" content="2; URL=../index.php" >
		<?php
	}
	else
	{
		require_once('../modelo/modeloGamer.php');
		$oUsuario = new cUsuario();

		$Result = $oUsuario->Login($user,$pass);
		
		while($file = mysqli_fetch_row($Result))
		{
			if ($file[0] == -1) {
				//echo "El Usuario: ".$user." no esta registrado";
				echo"<script>alert('El usuario [ ".$user." ]... no esta registrado')</script>";
				?>
				<META http-equiv="Refresh" content="1; URL=../index.php" >
				<?php
			}
			if ($file[0] == -2) {
				//echo "Clave incorrecta para el usuario: ".$user;
				echo"<script>alert('Clave incorrecta para el usuario: ".$user."')</script>";
				?>
				<META http-equiv="Refresh" content="2; URL=../index.php" >
				<?php
			}
			if ($file[0] > 0) {
				session_start();
				$_SESSION["autenticado"] = "Si";
				$_SESSION["Cargo"] = $file[6];
				echo"<script>alert('BIENVENIDO: ".$user." ')</script>";
				?>

				<META http-equiv="Refresh" content="2; URL=../index.php" >
				<?php
			}
		}
	}
}


?>