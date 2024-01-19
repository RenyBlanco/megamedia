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
                                <h3 style="color: gray;"><i class="fa fa-user-plus"></i> Nuevo Usuario</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Usuarios'; ?>" class="btn btn-outline-success">
                                    <i class="fa fa-reply" aria-hidden="true"></i> Regresar al listado
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= FOLDER_PATH . '/Usuarios/guardarUsuario' ?>" id="form-usuario" autocomplete="off">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" required id="nombre" autofocus placeholder="Nombre del usuario">
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input class="form-control" type="email" name="correo" required id="correo" placeholder="tu_correo@dominio.com">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Contraseña</label>
                                    <input name="pass" required type="password" class="form-control" id="pass" placeholder="Escribe tu contraseña">
                                </div>
                                <div class="form-group">
                                    <label for="pass2">Confirma tu contraseña</label>
                                    <input name="pass2" required type="password" class="form-control" id="pass2" placeholder="Vuelve a escribir tu contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary">
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
        APP.validacionGeneral('form-usuario');
    });
</script>
</body>

</html>