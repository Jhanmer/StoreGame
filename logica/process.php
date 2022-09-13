
<?php 
session_start();
include "../config/conexion.php";
if(!empty($_POST)){
	$Cnx = new Conexion();
	$cadena = $Cnx->AbrirConexion();

	$Query = " call SP_InsertarCliente(\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[email]\",\"$_POST[calle]\",\"$_POST[ciudad]\",
	\"$_POST[depa]\",\"$_POST[cp]\",\"$_POST[pais]\",\"$_POST[tele]\",\"$_POST[tarjeta]\",\"$_POST[cvv]\",
	\"$_POST[fechaCadu]\",NOW())";
	//value
	//(\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[email]\",\"$_POST[calle]\",\"$_POST[ciudad]\",
	//\"$_POST[depa]\",\"$_POST[cp]\",\"$_POST[pais]\",\"$_POST[tele]\",\"$_POST[tarjeta]\",\"$_POST[cvv]\",
	//\"$_POST[fechaCadu]\",NOW())";	

	$q1 = mysqli_query($cadena,$Query);
	if($q1){
		$Query = "select max(1) from G_Cliente";
		$resultado = mysqli_query($cadena, $Query);
		if($data = mysqli_fetch_row($resultado))
			$cart_id = $data[0];
			
			foreach($_SESSION["cart"] as $c){
				$Query = "insert into G_Carrito(idProducto,idCliente,cantidad) value($c[product_id],$cart_id,$c[q])";
				$q1 = mysqli_query($cadena, $Query);
			}
			$Cnx->CerrarConexion($cadena);
			unset($_SESSION["cart"]);
		}
}

	print "<script>alert('Venta procesada exitosamente');window.location='../index.php';</script>";
	?>