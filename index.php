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

<body class="container-fluid fondobody">
    <header class="">
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-transparent col-12">
            <a class="navbar-brand" href="#">
                <img src="fotoarmonia/logoarmonia3.jpg" width="30" height="30" alt="" loading="lazy">
                
            </a>
        </nav>
    </header>
    <section>
        <div class="mt-5">
            <div class="col-md-12 text-center">
                <h1>PRODUCTO</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form class="col-md-8 mt-5" method="POST" action="registrarproducto.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">NOMBRE DEL PRODUCTO</label>
                    <input type="text" class="form-control" id="nombreproducto" name="nombreproducto1"
                        placeholder="nombre producto">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">AGREGAR IMAGEN</label>
                    <input type="text" class="form-control" id="imagenproducto" name="imagenproducto1"
                        placeholder="Imagen del Producto">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPCION</label>
                    <textarea class="form-control" id="descripcion" name="descripcion1" rows="3"></textarea>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tipoproducto" name="tipoProducto"
                        value="Accesorio">
                    <label class="form-check-label" for="inlineRadio1">Accesorio</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tipoproducto" name="tipoProducto" value="Curso">
                    <label class="form-check-label" for="inlineRadio2">Curso</label>
                </div>
                <div class="mt-3">
                    <button class="btn btn-fondo btn-outline-dark btn-lg aling-item-center " name="ingresarproducto"
                        type="submit">INGRESAR</button>
                </div>

            </form>
        </div>


    </section>












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