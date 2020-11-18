<?php



include('BaseDatos.php');


//1 recibo el id que voy a eliminar por URL(GET)
$ideliminar=($_GET['id']);

//2 creo el objeto de clase BaseDatos
$transaccion = new BaseDatos();

//3crear consulta
$consultaSQl="DELETE FROM productos WHERE idProducto='$ideliminar'";

//4 ejecutar metodo para eliminarDatos
$transaccion->eliminarDatos($consultaSQl);


 
//redireccionar
header("location:listaproductos.php");   



?>