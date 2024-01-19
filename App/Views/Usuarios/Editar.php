<!---- Encabezado ------>
<?php require './App/Views/Templates/Header.php'; ?>
<?php require './App/Views/Templates/MenuLateral.php'; ?>

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
                                <h3 style="color: gray;"><i class="fa-solid fa-user-pen"></i> Edita Usuario</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Usuarios'; ?>" class="btn btn-outline-success">
                                    <i class="fa fa-reply" aria-hidden="true"></i> Regresar al listado
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= FOLDER_PATH . '/Usuarios/actualizarUsuario' ?>" id="editaUsuario" autocomplete="off">
                                <input name="id" type="hidden" value="<?= $usuario->idusuarios; ?>">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $usuario->nombre; ?>" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input class="form-control" type="email" name="correo" id="correo" value="<?= $usuario->correo; ?>" required>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i>
                                    Guardar</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require './App/Views/Templates/Footer.php'; ?>
<script>
    $(document).ready(function() {
        $("#editaUsuario").validate({
            rules: {
                nombre: {
                    required: true,
                    minlength: 8
                },
                correo: {
                    required: true,
                    email: true
                }
            },
            messages: {
                nombre: {
                    required: "Por favor ingrese el nombre",
                    minlength: "El Item debe tener al menos 8 caracteres"
                },
                correo: "Por favor ingrese un correo válido"
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
    });
</script>
</body>

</html>