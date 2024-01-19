<?php
defined('BASEPATH') || exit('No se permite acceso directo');
require './App/Views/Templates/Header.php';
include './App/Views/Templates/MenuLateral.php';
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>404 Error</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Página no encontrada.</h3>

        <p>
          No pudimos encontrar la página solicitada.
        </p>

        <p><a class="btn btn-primary" href="javascript:window.history.back();">Regresar</a></p>
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require './App/Views/Templates/Footer.php'; ?>