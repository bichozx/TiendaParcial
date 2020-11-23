<?php

session_start();

include("BaseDatos.php");

$nombre = $_POST['nombreloguin'];
$password2 = $_POST['passwordloguin'];


//crear objeto de la clase BaseDatos
$transaccion = new BaseDatos();

//definir la consulta para busacar datos
$consultaSQL= "SELECT nombre, password FROM usuario WHERE nombre= '$nombre' AND password= '$password2'";

//ejecutar el metodo consultarDatos() y almacenar la respuesta en una variable
$usuariob=$transaccion->consultarDatos($consultaSQL);



if (count($usuariob) > 0 ) {
    $_SESSION['loguin1'] = 'administrador';
    echo 'bienvenido a Enarmonia Tienda';
    //redireccionar
    header("location:ingresoproducto.php");
    
}else{
     echo 'intenta de nuevo';
}