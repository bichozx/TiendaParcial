<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <title>Enarmonia</title>
</head>

<body class="fondobody">
    <?php

   include("BaseDatos.php");

   //crear objeto de la clase BaseDatos
   $transaccion = new BaseDatos();

   //definir la consulta para busacar datos
   $consultaSQL="SELECT idProducto, nombreProducto, imagenproducto, descripción, tipoProducto FROM productos WHERE 1";

   //ejecutar el metodo consultarDatos() y almacenar la respuesta en una variable
   $productos=$transaccion->consultarDatos($consultaSQL);


   //print_r($productos);
   
   ?>
    
        <header class="">
            <!-- Just an image -->
            <nav class="navbar navbar-light bg-transparent col-12">
                <a class="navbar-brand btn btn-fondo btn-outline-dark btn-lg" href="ingresoproducto.php">
                    <img src="fotoarmonia/logoarmonia3.jpg" width="30" height="30" alt="" loading="lazy"> Regresar a registro


                </a>
            </nav>
        </header>
    <main>
        <div class="mt-5 container">
            <div class="row row-cols-1 row-cols-md-2">
                <?php foreach($productos as $producto):?>

                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo($producto["imagenproducto"])?>..." class="card-img-top" alt="FOTO">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo($producto["nombreProducto"])?></h3>
                            <p class="card-text"><?php echo($producto["descripción"])?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <small class="text-muted"><?php echo($producto["tipoProducto"])?></small>
                        <div class="d-flex justify-content-end">
                            <a href="eliminarproducto.php?id=<?php echo($producto['idProducto'])?>"
                                class="p-2 bd-highlight btn-outline-dark btn-lg btn">Eliminar</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="p-2 bd-highlight btn-outline-dark btn-lg bg-transparent" data-toggle="modal"
                                data-target="#editar<?php echo($producto['idProducto'])?>">
                                Editar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editar<?php echo($producto['idProducto'])?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edición De Producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-transparent">
                                        <form action="editarproducto.php?id=<?php echo($producto['idProducto'])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto['nombreProducto'])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($producto['descripción'])?></textarea>
                                            </div>
                                            <button type="submit" class="p-2 bd-highlight btn-outline-dark btn-lg btn" name="botonEditar">Enviar</button>
                                        </form>
                                            ...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>





                </div>


                <?php endforeach?>


            </div>


        </div>>

        


    </main>
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>