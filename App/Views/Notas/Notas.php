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
                                <strong>La Nota a registrar, Ya Existe!</strong>
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
                                <strong>La Nota ha sido Registrado!</strong>
                            </div>
                        <?php } elseif ($alert == 'modificado') { ?>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Atención!</h5>
                                <strong>La Nota ha sido Modificado!</strong>
                            </div>
                        <?php } elseif ($alert == 'eliminado') { ?>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-info"></i> Atención!</h5>
                                <strong>La Nota ha sido Eliminado!</strong>
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
                                <h3 style="color: gray;"><i class="fa fa-newspaper"></i> Notas</h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= FOLDER_PATH . '/Notas/nuevoNota' ?>" class="btn btn-outline-primary">
                                    <i class=" fa fa-plus-circle"></i> Nueva Nota
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Por</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($notas)) {
                                        foreach ($notas as $Key => $nota) { ?>
                                            <tr>
                                                <td><?= htmlentities($nota['titulo']) ?></td>
                                                <td><?= htmlentities($nota['nombre']) ?></td>
                                                <td style="text-align:center;">
                                                    <?= htmlentities($nota['fecha']); ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <form method="post" action="<?= FOLDER_PATH . '/Notas/editarNota' ?>">
                                                                <input name="idnota" type="hidden" value="<?= $nota['idnotas']; ?>">
                                                                <button type="submit" class="btn btn-warning btn-sm" title="Editar">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#delete_<?= $nota['idnotas']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" title="Borrar">
                                                                <i class="fa-regular fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php include './App/Views/Notas/Borrar.php'; ?>
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