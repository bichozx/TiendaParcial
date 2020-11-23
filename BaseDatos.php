<?php

class BaseDatos{


    //atributos ->son variables
    public $usuarioBD = "root";
    public $passwordBD = "";

    //constructor
    public function __contruct(){}


    //metodos
    public function conectarBD(){

        try {
            
        $datosBD = "mysql:host=localhost;dbname=armonia";
        $conexionBD = new PDO($datosBD, $this->usuarioBD);
        //echo ('exito');
        return($conexionBD);

        } catch (PDOException $error){

            echo ($error->getMessage());
            //throw $th;
        }

        
    }


    public function agregarDatos($consultaSQL){

      //establecer una conexion
      $conexionBD=$this->conectarBD();

      //preparar consulta
      $insertarDatos = $conexionBD->prepare($consultaSQL);

      //ejecutar consulta
      $resultado = $insertarDatos->execute();


      //verificar resultado
      if($resultado){

        echo 'producto agregado';

      }else{

        echo 'error';
      }


    }


    public function consultarDatos($consultaSQL){

      //establecer una conexion
      $conexionBD=$this->conectarBD();

      //preparar consulta
      $consultarDatos = $conexionBD->prepare($consultaSQL);

      //establecer metodo de consulta
      $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

      //ejecutar consulta
      $consultarDatos->execute();

      //retornar los datos consultados
      return($consultarDatos->fetchAll());





    }

    public function eliminarDatos($consultaSQL){

      //establecer una conexion
      $conexionBD=$this->conectarBD();

      //preparar consulta
      $eliminarDatos = $conexionBD->prepare($consultaSQL);

      //ejecutar consulta
      $resultado = $eliminarDatos->execute();

      if($resultado){

        echo ('usuario eliminado');

      }else{

        echo ('error');
      }

    }


    public function editarDatos($consultaSQL){

      //establecer conexion
      $conexionBD=$this->conectarBD();

      //preparar consulta
      $editarDatos = $conexionBD->prepare($consultaSQL);

      //ejecutar consulta
      $resultado = $editarDatos->execute();

      if($resultado){

        echo 'producto editado';


      }else{

        echo 'error';
      }

    }

    public function ingresarUsuario($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consulta
    $ingresarUsuario = $conexionBD->prepare($consultaSQL);

    //ejecutar consulta
    $resultado = $ingresarUsuario->execute();

    //verificar resultado
    if($resultado){

        echo 'Bienvenido';

      }else{

        echo 'error';
      }
    }


    
     





};




?>