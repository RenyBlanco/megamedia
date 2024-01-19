<!-- Modal Borrar Nota -->
<div class="modal fade" id="delete_<?= $nota['idnotas']; ?>" tabindex="-1" role="dialog" aria-labelledby="BorrarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="BorrarLabel">Eliminar nota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center">¿Esta seguro de Borrar el registro?</p>
                <h2 class="text-center"><?= $nota['titulo']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa-solid fa-angle-left"></i> Regresar
                </button>
                <form method="post" action="<?= FOLDER_PATH . '/Notas/eliminarNota' ?>">
                    <input name="idnota" type="hidden" value="<?= $nota['idnotas']; ?>">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-user-slash" title="Eliminar"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>