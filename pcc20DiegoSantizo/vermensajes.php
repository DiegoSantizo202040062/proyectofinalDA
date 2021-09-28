<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Bootswatch CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">

    <!-- CSS CSS -->
    <link rel="stylesheet" href="marco.css">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Ver Mensajes</title>
</head>

<body>
    <header>
        
        <div class="container">
            <button class="btn btn--14" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="background-color: skyblue;">
                MENÚ
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        Bienvenido, aca encontraras enlaces para redirigirte a las paginas.
                    </div>
                    <br>
                    <a href="index.html" role="button" class="btn btn--15">Inicio</a><br>
                    <a href="productos.php" role="button" class="btn btn--16">Servicios</a><br>
                    <a href="tiendas.php" role="button" class="btn btn--17">Tiendas</a><br>
                    <a href="contactenos.php" role="button" class="btn btn--18">Contacetenos</a>
                </div>
            </div>
        </div>
        <center>

    </header>

    <br><br>


    <h3>Inicio de Sesion</h3>

    <br>

    <center>
        <div class="image">
            <img src="img/titulo.png" width="600" height="400">

            <br>

            <div class="container">

                <form action="validar.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" placeholder="&#128100;" class="form-control" aria-describedby="usuari" name="user" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" placeholder="&#128273;" class="form-control" name="pass">
                    </div>
                    <br><br>
                    <center>
                        <input type="submit" value="enviar" class="btn btn-info">
                    </center>
                </form>

            </div>
        </div>
    </center>

    <br><br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

<footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container text-start">
            PBX: 4279-9750 - Direccion: 65 ave. 23-23 Zona 12
        </div>
        <div class="container text-end">
            Carnet: 2020-40062 Nombre: Diego Andres Santizo Alvarado
        </div>
    </nav>
</footer>

</html>