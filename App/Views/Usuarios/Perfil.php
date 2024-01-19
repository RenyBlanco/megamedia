<!---- Encabezado ------>
<?php
require './App/Views/Templates/Header.php';
require './App/Views/Templates/MenuLateral.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h4 style="color: gray;"><i class="fa-solid fa-user-gear"></i> Perfil de Usuario</h4>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Home'; ?>" class="btn btn-outline-success">
                                    <i class="fa fa-reply" aria-hidden="true"></i> Regresar al inicio
                                </a>
                            </div>
                        </div>
                        <div class="card card-secondary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="informacion-tab" data-toggle="pill" href="#informacion" role="tab" aria-controls="informacion" aria-selected="true">Información</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pass-setting-tab" data-toggle="pill" href="#pass-setting" role="tab" aria-controls="pass-setting" aria-selected="false">Cambio Clave</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-two-tabContent">
                                    <div class="tab-pane fade show active" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                                        <h4 class="line-head">Información Personal</h4>
                                        <dl class="row">
                                            <dt class="col-sm-4">Nombre Completo :</dt>
                                            <dd class="col-sm-8"><?= $_SESSION['user']; ?></dd>
                                            <dt class="col-sm-4">Correo :</dt>
                                            <dd class="col-sm-8"><?= $_SESSION['email']; ?></dd>
                                        </dl>
                                    </div>
                                    <div class="tab-pane fade" id="pass-setting" role="tabpanel" aria-labelledby="pass-setting-tab">
                                        <h4 class="line-head">Cambio de Clave</h4>
                                        <form method="post" action="" id="formClave" autocomplete="off">
                                            <input type="hidden" name="txtToken" id="txtToken" value="">
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <label for="clave1">Nueva Clave</label>
                                                    <input class="form-control" type="password" name="clave1" id="clave1">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="clave2">Confirme la Clave</label>
                                                    <input class="form-control" type="password" name="clave2" id="clave2">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="row" id="mensajeError"></div>
                                            <div class="row mb-10">
                                                <div class="col-md-12">
                                                    <button class="btn btn-outline-success" type="submit">
                                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                                        Guardar Cambios
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const base_url = "<?= './'; ?>";
</script>
<?php require './App/Views/Templates/Footer.php'; ?>
<script>
    $.validator.setDefaults({
        submitHandler: function() {
            $.ajax({
                type: "POST",
                url: "../Usuarios/setPassword",
                data: {
                    "clave1": $('#clave1').val(),
                    "clave2": $('#clave2').val()
                },
                success: function() {
                    $('#mensajeError').addClass('alert alert-dismissible alert-success');
                    $('#mensajeError').html('Clave cambiada con exito!');
                    document.getElementById('formClave').reset();
                }
            });
        }
    });

    $("#formClave").validate({
        rules: {
            clave1: {
                required: true,
                minlength: 8
            },
            clave2: {
                required: true,
                minlength: 8,
                equalTo: "#clave1"
            }
        },
        messages: {
            clave1: {
                required: "Ingrese la clave",
                minlength: "La clave debe tener al menos 8 caracteres"
            },
            clave2: {
                required: "Ingrese la confirmación",
                minlength: "La clave debe tener al menos 8 caracteres",
                equalTo: "Las claves deben ser iguales"
            },
        },
        errorElement: "div",
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