<?php

include  ('BaseDatos.php');

if (isset($_POST['ingresarproducto'])) {

    
    ///recibo los datos del formulario
    $nombre = $_POST['nombreproducto1'];
    $imagen= $_POST['imagenproducto1'];
    $descripcion = $_POST['descripcion1'];
    $tipoproducto = $_POST['tipoProducto'];

    echo $nombre;
    echo  "</br>$descripcion";
    echo "</br>$tipoproducto";
    # code...

    //copia o objeto de la clase BD
    $transaccion = new BaseDatos();
    
    //crear consulta
    $consultaSQL= "INSERT INTO productos(nombreProducto, imagenproducto, descripción, tipoProducto) VALUES ('$nombre', '$imagen', '$descripcion', '$tipoproducto')";

     
    //llamo el metodo la clase BD agregarDatos()
    $transaccion->agregarDatos( $consultaSQL);

    //redireccionar
    header("location:listaproductos.php");




}



?>