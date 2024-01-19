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
                    <h1>Bienvenidos</h1>
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
                        <span class="info-box-icon"><i class="fa-regular fa-note-sticky"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Notas</span>
                            <span class="info-box-number">100</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-cyan">
                        <span class="info-box-icon"><i class="fa-solid fa-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Articulos</span>
                            <span class="info-box-number">10</span>

                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-blue">
                        <span class="info-box-icon"><i class="fa-regular fa-newspaper"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Noticias</span>
                            <span class="info-box-number">25</span>

                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->

            </div> <!-- /.row -->
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XK-kQW_Y7pY?si=cE3iAAm8B7z9rX5S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <hr>

        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<?php include './App/Views/Templates/Footer.php' ?>
</body>

</html>