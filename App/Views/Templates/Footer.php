		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1.0.0
			</div>
			<strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Reynaldo J Blanco M</a>.</strong> Derechos Reservados.
		</footer>

		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="<?= ASSETS . '/jquery/jquery.min.js' ?>"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= ASSETS . '/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
		<!-- overlayScrollbars -->
		<script src="<?= ASSETS . '/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
		<!-- Toastr -->
		<script src="<?= ASSETS . '/toastr/toastr.min.js' ?>"></script>
		<!-- DataTables  & Plugins -->

		<script src="<?= ASSETS . '/datatables/jquery.dataTables.min.js' ?>"></script>
		<script src="<?= ASSETS . '/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
		<script src="<?= ASSETS . '/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
		<script src="<?= ASSETS . '/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>

		<!-- jquery-validation -->
		<script src="<?= ASSETS . '/jquery-validation/jquery.validate.min.js' ?>"></script>
		<script src="<?= ASSETS . '/jquery-validation/additional-methods.min.js' ?>"></script>
		<script src="<?= ASSETS . '/jquery-validation/localization/messages_es_AR.js' ?>"></script>


		<!-- AdminLTE App -->
		<script src="<?= ASSETS . '/dist/js/adminlte.min.js' ?>"></script>

		<script type="text/javascript">
			// DataTables Config
			$('#example2').DataTable({
				'paging': true,
				'lengthChange': true,
				'searching': true,
				'ordering': true,
				'info': true,
				'autoWidth': false,
				language: {
					"decimal": "",
					"emptyTable": "No hay datos",
					"info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
					"infoEmpty": "Mostrando 0 a 0 de 0 registros",
					"infoFiltered": "(Filtro de _MAX_ total registros)",
					"infoPostFix": "",
					"thousands": ",",
					"lengthMenu": "Mostrar _MENU_ registros",
					"loadingRecords": "Cargando...",
					"processing": "Procesando...",
					"search": "Buscar:",
					"zeroRecords": "No se encontraron coincidencias",
					"paginate": {
						"first": "Primero",
						"last": "Ultimo",
						"next": "Próximo",
						"previous": "Anterior"
					},
					"aria": {
						"sortAscending": ": Activar orden de columna ascendente",
						"sortDescending": ": Activar orden de columna desendente"
					}
				},
			});
		</script>

		<script type="text/javascript">
			// Validacion de entrada de campos en los form
			var APP = function() {
				return {
					validacionGeneral: function(id, reglas, mensajes) {
						const formulario = $('#' + id);
						formulario.validate({
							rules: reglas,
							messages: mensajes,
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
							},
							invalidHandler: function(event, validator) {

							},
							submitHandler: function(form) {
								return true;
							}
						});
					}
				}
			}();
		</script>