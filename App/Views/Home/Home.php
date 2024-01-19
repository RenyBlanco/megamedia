<?php
include 'App/Views/Templates/Header.php';
include './App/Views/Templates/MenuLateral.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tablero</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-teal">
                        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Altas</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description"> 70% incremento en 30 días</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-cyan">
                        <span class="info-box-icon"><i class="far fa-thumbs-down"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bajas</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description"> 70% decremento en 30 días</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-blue">
                        <span class="info-box-icon"><i class="fa-solid fa-truck-moving"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Traslados</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%;  color:black;"></div>
                            </div>
                            <span class="progress-description"> 70% incremento en 30 días</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon"><i class="fa-solid fa-cart-plus"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Compras</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description"> 70% incremento en 30 días</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-orange shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">Alarma vida útil</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            The body of the card
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
                <div class="col-md-3">
                    <div class="card card-orange shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">Alarma stock mínimo</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            The body of the card
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
                <div class="col-md-3">
                    <div class="card card-orange shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">Alarma por vencimiento</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            The body of the card
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
                <div class="col-md-3">
                    <div class="card card-orange shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">Alarma </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            The body of the card
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
            <hr>

        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<?php include './App/Views/Templates/Footer.php' ?>
</body>

</html>