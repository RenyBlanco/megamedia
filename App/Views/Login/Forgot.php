<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Olvido contraseña</title>

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
                <p class="login-box-msg">Olvidó su contraseña ? Ingrese el correo para recuperarla.</p>
                <form action="" method="post" id="frmForgot">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" maxlemght=31 placeholder="ejemplo@dominio.com">
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-block">Solicitar nueva contraseña</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="Login.php"><i class="fa fa-angle-left fa-fw"></i> Regresar</a>
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
        <!-- jquery-validation -->
		<script src="<?= ASSETS.'/jquery-validation/jquery.validate.min.js' ?>" ></script>
		<script src="<?= ASSETS.'/jquery-validation/additional-methods.min.js' ?>" ></script>
		<script src="<?= ASSETS.'/jquery-validation/localization/messages_es_AR.js' ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= ASSETS.'/dist/js/adminlte.min.js' ?>"></script>
        <script>
            $("#frmForgot").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                        maxlength: 30
                    }
                },
                messages: {
                    email: {
                        required : "El correo no debe estar en blanco",
                        maxlength: "el correo excede el máximo de caracteres permitidos",
                        email: "Debe ingresar un correo válido y registrado!"
                    }
                },
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                focusInvalid: false,
                ignore: "",
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element) {
                    $(element).removeClass('is-invalid');
                },
                success: function (element) {
                    $(element).removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {
                    if (element.closest('.bootsrap-select').length > 0) {
                        element.closest('.bootsrap-select').find('.bs-placeholder').after(error);
                    } else if ($(element).is('select') && element.hasClass('select2-hidden-accessible')) {
                        element.next().after(error);
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        </script>
    </body>
</html>
