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
                                <h3 style="color: gray;"><i class="fa-solid fa-pen-to-square"></i> Editar Nota</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Notas'; ?>" class="btn btn-outline-success">
                                    <i class="fa fa-reply" aria-hidden="true"></i> Regresar al listado
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= FOLDER_PATH . '/Notas/actualizarNota' ?>" id="editaNota" autocomplete="off">
                                <input name="idnota" type="hidden" value="<?= $nota->idnotas; ?>">
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input class="form-control" type="text" name="titulo" id="titulo" value="<?= $nota->titulo; ?>" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="tipo_nota">Tipo de Nota</label>
                                    <select class="custom-select shadow-none" name="tipo_nota" style="width: 100%; height: 36px" required>
                                        <option <?= $nota->tipo_nota == 1 ? "selected" : "" ?> value=1>Nota</option>
                                        <option <?= $nota->tipo_nota == 2 ? "selected" : "" ?> value=2>Articulo</option>
                                        <option <?= $nota->tipo_nota == 3 ? "selected" : "" ?> value=3>Noticia</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nota">Descripcion</label>
                                    <textarea id="nota" name="nota" rows="6" cols="90" required>
                                    <?php echo $nota->nota; ?>
                                    </textarea>
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
        $("#editaNota").validate({
            rules: {
                titulo: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                titulo: {
                    required: "Por favor ingrese el titulo",
                    minlength: "El Item debe tener al menos 10 caracteres"
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
    });
</script>
</body>

</html>