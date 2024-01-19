<?php require './App/Views/Templates/Header.php'; ?>
<?php require './App/Views/Templates/MenuLateral.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <?php
                    if (!empty($_GET['alert'])) {
                        $alert = $_GET['alert'];
                        if ($alert == 'error2') { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                                <strong>Error en envio de Datos.</strong>
                            </div>
                        <?php } elseif ($alert == 'errorE') { ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> Atención!</h5>
                                <strong>El usuario a registrar, Ya Existe!</strong>
                            </div>
                        <?php } elseif ($alert == 'error1') { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                                <strong>Error al registrar</strong>
                            </div>
                        <?php } elseif ($alert == 'registrado') { ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Atención!</h5>
                                <strong>El usuario ha sido Registrado!</strong>
                            </div>
                        <?php } elseif ($alert == 'modificado') { ?>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Atención!</h5>
                                <strong>El usuario ha sido Modificado!</strong>
                            </div>
                        <?php } elseif ($alert == 'eliminado') { ?>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Atención!</h5>
                                <strong>El usuario ha sido Eliminado!</strong>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h3 style="color: gray;"><i class="fa fa-users"></i> Usuarios</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Usuarios/nuevoUsuario' ?>" class="btn btn-outline-primary 
                                    <i class=" fa fa-plus-circle"></i> Nuevo Usuario
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($usuarios)) {
                                        foreach ($usuarios as $Key => $usuario) {
                                            if (!$usuario['estado']) {
                                                $activo = '<span class="badge badge-danger">Eliminado</span>';
                                            } else {
                                                $activo = '<span class="badge badge-success">Activo</span>';
                                            } ?>
                                            <tr>
                                                <td><?= htmlentities($usuario['nombre']) ?></td>
                                                <td><?= htmlentities($usuario['correo']) ?></td>
                                                <td style="text-align:center;">
                                                    <?= $activo; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <form method="post" action="<?= FOLDER_PATH . '/Usuarios/editarUsuario' ?>">
                                                                <input name="id" type="hidden" value="<?= $usuario['idusuarios']; ?>">
                                                                <button type="submit" class="btn btn-warning btn-sm" title="Editar">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#delete_<?= $usuario['idusuarios']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" title="Borrar">
                                                                <i class="fa-regular fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php include './App/Views/Usuarios/Borrar.php'; ?>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<?php require './App/Views/Templates/Footer.php'; ?>
</body>

</html>