<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingreso</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= ASSETS . '/icheck-bootstrap/icheck-bootstrap.min.css' ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= ASSETS . '/dist/css/adminlte.min.css' ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-info">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>RB</b>Desarrollo</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingrese para iniciar sesion</p>
                <form method="POST" action="<?= FOLDER_PATH . '/Login/signin' ?>" id="formLogin" autocomplete="off">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input class="form-control" type="email" name="email" id="email" maxlength=31 placeholder="correo@dominio.com" autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input class="form-control" type="password" name="password" id="password" maxlength=13 placeholder="Contraseña">
                    </div>
                    <?php
                    if (!empty($error_message)) { ?>
                        <div class="form-group alert alert-danger">
                            <?php echo $error_message ?>
                        </div>
                    <?php
                    } ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark btn-block">Ingresar</button>
                    </div>
                </form>
                <p class="mb-1"><a href="<?= FOLDER_PATH . '/Login/olvido' ?>">Olvidé mi contraseña</a></p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= ASSETS . '/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= ASSETS . '/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- jquery-validation -->
    <script src="<?= ASSETS . '/jquery-validation/jquery.validate.min.js' ?>"></script>
    <script src="<?= ASSETS . '/jquery-validation/additional-methods.min.js' ?>"></script>
    <script src="<?= ASSETS . '/jquery-validation/localization/messages_es_AR.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= ASSETS . '/dist/js/adminlte.min.js' ?>"></script>
    <script>
        $("#formLogin").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    maxlength: 30
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 12
                }
            },
            messages: {
                email: {
                    required: "El usuario no debe estar en blanco",
                    maxlength: "el correo excede el máximo de caracteres permitidos",
                    email: "Debe ingresar un correo válido y registrado!"
                },
                password: {
                    required: "La clave es requerida",
                    minlength: "No cumple con el mínimo de caracteres",
                    maxlength: "Excede la cantidad máxima de caracteres"
                }
            },
            errorElement: 'div',
            errorClass: 'invalid-feedback',
            focusInvalid: false,
            ignore: "",
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            },
            success: function(element) {
                $(element).removeClass('is-invalid');
            },
            errorPlacement: function(error, element) {
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