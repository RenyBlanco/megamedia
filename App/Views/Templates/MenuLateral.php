<!-- Sidebar Menu -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= ASSETS . '/dist/img/mega2.jpg' ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Megamedia</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= FOLDER_PATH . '/Home' ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tablero</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= FOLDER_PATH . '/Usuarios' ?>" class="nav-link">
                        <i class="nav-icon fas fa-users-between-lines"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= FOLDER_PATH . '/Notas' ?>" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Notas</p>
                    </a>
                </li>

                <li class="nav-header">REPORTES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Reportes <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Métricas</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>