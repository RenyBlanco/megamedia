<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recuperar Contraseña</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?= ASSETS.'/icheck-bootstrap/icheck-bootstrap.min.css' ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= ASSETS.'/dist/css/adminlte.min.css' ?>" >
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-danger">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>RB</b>Servicios</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Está a un paso, recupere su contraseña ahora.</p>
                    <form action="login.php" method="post">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Confirme Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger btn-block">Cambiar contraseña</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-3 mb-1">
                        <a href="login.php">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?= ASSETS.'/jquery/jquery.min.js' ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= ASSETS.'/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= ASSETS.'/dist/js/adminlte.min.js' ?>"></script>
    </body>
</html>
