<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/admin/images/favicon.png">
    <title>Materialart Admin Template</title>
    <link href="/assets/admin/css/style.css" rel="stylesheet">

    @stack('css')
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Nebula</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="/assets/admin/images/logo-light-icon.png">
                            <img class="dark-logo" src="/assets/admin/images/logo-icon.png">
                        </span>
                        <span class="text">
                            <img class="light-logo" src="/assets/admin/images/logo-light-text.png">
                            <img class="dark-logo" src="/assets/admin/images/logo-text.png">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">

                <li>
                    <ul class="collapsible p-t-30">
                        <li>
                            <a href="{{ route('nebula.dashboard') }}"><i class="material-icons">repeat</i><span class="hide-menu">Back To Home</span></a>

                        </li>
                        <li class="small-cap"><span class="hide-menu">Pagina Web</span></li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">move_to_inbox</i><span class="hide-menu"> Proveedores de servicio</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{ route('nebula.proveedores') }}"><i class="material-icons">person_add</i><span class="hide-menu">Nuevo</span></a></li>
                                    <li><a href="#"><i class="fas fa-search"></i><span class="hide-menu">Ver proveedores</span></a></li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="fas fa-cogs"></i><span class="hide-menu"> Servicios y productos</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#"><i class="fas fa-plus"></i><span class="hide-menu">Agregar servicio</span></a></li>
                                    <li><a href="{{ route('nebula.productos') }}"><i class="fas fa-plus"></i><span class="hide-menu">Agregar producto</span></a></li>
                                    <li><a href="#"><i class="fas fa-search"></i><span class="hide-menu">Ver servicios y productos</span></a></li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="fas fa-file"></i><span class="hide-menu"> Extras</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#"><i class="fas fa-plus"></i><span class="hide-menu">Agregar galeria</span></a></li>
                                    <li><a href="#"><i class="fas fa-search"></i><span class="hide-menu">Ver extras</span></a></li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="fas fa-list-alt"></i><span class="hide-menu"> Secciones</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check"></i><span class="hide-menu">Acerca de nosotros</span></a></li>
                                    <li><a href="#"><i class="fas fa-check"></i><span class="hide-menu">Misión, Visión, Objetivo</span></a></li>
                                    <li><a href="#"><i class="fas fa-check"></i><span class="hide-menu">Testimoniales</span></a></li>


                                </ul>
                            </div>
                        </li>

                        <li class="small-cap"><span class="hide-menu">Información de contacto</span></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper page-header">

            @yield('content')


            <footer class="center-align m-b-30">Desarrollador por <a href="https://clustermx.com">ClusterMX</a>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="/assets/admin/js/jquery.min.js"></script>
    <script src="/assets/admin/js/materialize.min.js"></script>
    <script src="/assets/admin/js/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="/assets/admin/js/app.js"></script>
    <script src="/assets/admin/js/app.init.js"></script>
    <script src="/assets/admin/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="/assets/admin/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->

    @stack('js')
</body>

</html>
