<?php

include  ('BaseDatos.php');


if(isset($_POST['ingresarusuariio1'])){

    //recibir datos del usuario
    $nombre= $_POST['nombreusuario1'];
    $apellido= $_POST['apellidousuario1'];
    $password= $_POST['passwordusuario1'];


    echo $nombre;
    echo  "</br>$apellido";
    echo "</br>$password";

    //copia objeto de la clase Bd
    $transaccion = new BaseDatos();


    //crear la consulta
    $consultaSQL= "INSERT INTO usuario (nombre , apellido, password) VALUES ('$nombre','$apellido','$password')";

    //llamo al metodo
    $transaccion->ingresarUsuario($consultaSQL);

    //redireccionar
    header("location:listaproductos.php");












}






?>