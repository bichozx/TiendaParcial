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

<body class="container fondobody">
    <header>
      <!-- Just an image -->
        <nav class="navbar navbar-light bg-transparent">
            <a class=" col-auto ml-5 btn btn-fondo btn-outline-dark navbar-brand" href="loguinusuario.php">
            <img src="fotoarmonia/logoarmonia3.jpg" width="30" height="30" alt="" loading="lazy"> Ingresar </a>
        </nav>
        
    </header>
    
        <section class="formato">
            <form class="needs-validation mt-5" action="registrarUsuario.php" method="POST">
                <div class="form-group-row">
                    <div class="col-lg-6 mb-3 ml-5">
                        <label for="validationServer01">NOMBRE</label>
                        <input type="text" class="form-control" id="nombreusuario"  name="nombreusuario1" value="" required>
                        
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="col-lg-6 mb-3 ml-5 ">
                        <label for="validationTooltip02">APELLIDO</label>
                        <input type="text" class="form-control" id="apellidousuario" name="apellidousuario1" value="" required>
                        
                    </div>


                </div>
                <div class="form-group-row ">
                    <div class="col-lg-6 mb-3 ml-5">
                        <label for="validationTooltip02">PASSWORD</label>
                        <input type="password" class="form-control" id="passwordusuario" name="passwordusuario1" value="" required>
                        
                    </div>


                </div>




                <button class="col-auto ml-5 btn btn-fondo btn-outline-dark" id="ingresarusuario" name="ingresarusuariio1" type="submit">Registar</button>
            </form>
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