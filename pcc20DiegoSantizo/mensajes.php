<?php include('bd.php'); ?>
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
    <title>Mensajes</title>
</head>

<body>
    <header>

        <div class="btn-group w-100">
            <button type="button" class="btn btn-warning btn-block"><a href="index.html">Inicio</a></button>
            <button type="button" class="btn btn-info btn-block"><a href="tiendas.php">Tiendas</a></button>
            <button type="button" class="btn btn-danger btn-block"><a href="contactenos.php">Contactenos</a></button>
        </div>

    </header>

    <br><br>


    <h3>Mensajes Recibidos</h3>

    <br>

    <center>

            <br>

            <center>
                <div class="col-8">
                    <table class="table table-outline-danger table-striped">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Nombres
                                </th>
                                <th scope="col">
                                    Apellidos
                                </th>
                                <th scope="col">
                                    Telefono
                                </th>
                                <th scope="col">
                                    Correo
                                </th>
                                <th scope="col">
                                    Mensaje
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $query = "SELECT * FROM mensajes";
                            $resultado = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($resultado)) {
                        ?>

                            <tr>
                                <td><?php echo $row ['nombres'] ?></td>
                                <td><?php echo $row ['apellidos'] ?></td>
                                <td><?php echo $row ['telefono'] ?></td>
                                <td><?php echo $row ['correo'] ?></td>
                                <td><?php echo $row ['mensaje'] ?></td>
                            </tr>
                            <?php } ?>            
                        </tbody>
                    </table>
                </div>
        </div>
    </center>

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