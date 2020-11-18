<?php



include ('BaseDatos.php');



//recibir el id del que quiero editar
$transaccion = new BaseDatos();


//2. RECIBIR DATOS
if(isset($_POST["botonEditar"])){

        
    //3. Recibir el id que quiero editar
    $id=$_GET['id'];
    $nombre=$_POST['nombreEditar'];
    $descripcion=$_POST['descEditar'];

    //4.consulta para editar un registro
    $consultaSQL="UPDATE productos SET nombreProducto='$nombre', descripción=' $descripcion' WHERE idProducto='$id'";
    

    //5.Utilizar el metodo editar
    $transaccion ->editarDatos($consultaSQL);

    //redireccionar
    header("location:listaproductos.php"); 
    

}





?>