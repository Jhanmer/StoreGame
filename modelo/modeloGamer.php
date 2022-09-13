<?php

require_once('../config/conexion.php');

class cUsuario
{
	private $ListaUsuarios;

	function __construct()
	{
		$this->ListaUsuarios = array();
	}
	function ObtenerUsuarios()
	{
		/*Se inicializa los datos de conexion*/
		/*ejecutandose el contructor*/

		$cnx = new conexion();

		$cadena = $cnx->AbrirConexion();

		$Query = "select id_usuario, nombre, apellido, usuario, cargo from tb_usuarios";

		$Datos = mysqli_query($cadena,$Query);
		while ($fila = mysqli_fetch_array($Datos))
		{
			$this->ListaUsuarios[] = $fila;
		}
		$cnx->CerrarConexion($cadena);

		return $this->ListaUsuarios;
	}

	function AgregarUsuario($Data)
	{

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="call SP_InsertarUsuario('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."');";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}

	function EliminarUsuario($user_id)
	{
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query = "Delete from tb_usuarios where id_usuario = '$user_id'";

		$Result = mysqli_query($Cadena,$Query);

		return $Result;

	}

	function Login($user,$pass)
	{
		require_once('../config/conexion.php');

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query = "call SP_Login('".$user."','".$pass."')";

		$Result = mysqli_query($Cadena,$Query);

		$cnx->CerrarConexion($Cadena);

		return $Result;
	}

	function Buscar($n_nombre)
	{
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="call SP_Buscar_Nombre('".$n_nombre."');";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}

}

?>
