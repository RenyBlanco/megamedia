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
                                <h3 style="color: gray;"><i class="fa fa-file"></i> Nueva Nota</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Notas'; ?>" class="btn btn-outline-success">
                                    <i class="fa fa-reply" aria-hidden="true"></i> Regresar al listado
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= FOLDER_PATH . '/Notas/guardarNota' ?>" id="form-nota" autocomplete="off">
                                <input type="hidden" name="idUsuario" value="<?= $_SESSION['idUsuario'] ?>">
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input class="form-control" type="text" name="titulo" required id="titulo" autofocus placeholder="Titulo">
                                </div>
                                <div class="form-group">
                                    <label for="tipo_nota">Tipo de nota</label>
                                    <select class="custom-select shadow-none" name="tipo_nota" style="width: 100%; height: 36px" required>
                                        <option value=0>Seleccione un tipo</option>
                                        <option value=1>Nota</option>
                                        <option value=2>Articulo</option>
                                        <option value=3>Noticia</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nota">Descripcion</label>
                                    <textarea id="nota" name="nota" rows="6" cols="90" required>

                                    </textarea>
                                </div>

                                <button type=" submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Guardar
                                </button>
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
        APP.validacionGeneral('form-nota');
    });
</script>
</body>

</html>