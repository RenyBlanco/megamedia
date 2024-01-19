<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bloqueado</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= ASSETS.'/dist/css/adminlte.min.css' ?>">
    </head>
    <body class="hold-transition lockscreen">
        <!-- Automatic element centering -->
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <a href="#"><b>RB</b>Servicios</a>
            </div>
        <!-- User name -->
        <div class="lockscreen-name">$_SESSION['user']</div>
            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                <img src="<?= ASSETS.'/dist/img/avatar5.png' ?>" alt="Usuario">
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <form class="lockscreen-credentials" action="" method="POST" autocomplete="off">
                    <div class="input-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña">

                        <div class="input-group-append">
                        <button type="button" class="btn">
                            <i class="fas fa-arrow-right text-muted"></i>
                        </button>
                        </div>
                    </div>
                </form>
                <!-- /.lockscreen credentials -->
            </div>
            <!-- /.lockscreen-item -->
            <div class="help-block text-center">
                Ingrese la contraseña para recuperar la sesión
            </div>
            <div class="text-center">
                <a href="login.html">O ingrese como un nuevo usuario</a>
            </div>
            <div class="lockscreen-footer text-center">
                Copyright &copy; 2022 <b><a href="https://www.rbservicios.cl" class="text-black">RB Servicios SPA</a></b><br>
                Derechos reservedos
            </div>
        </div>
        <!-- /.center -->

        <!-- jQuery -->
        <script src="<?= ASSETS.'/jquery/jquery.min.js' ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= ASSETS.'/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    </body>
</html>
