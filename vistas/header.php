<?php
if (strlen(session_id()) < 1) {
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Importadora Varietuti</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!--referencias a hojas de estilo de datatables-->
    <link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">

    <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">

</head>

<!--<body class="hold-transition skin-green-light sidebar-mini">-->
<!--<body class="hold-transition skin-black-light sidebar-mini">-->

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>IT</b>Ventas</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Importadora Varietuti</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">
                                    <p>
                                        Bienvenido! <?php echo $_SESSION['nombre']; ?>
                                        <small>Sistema de gestión Importadora Varietuti</small>
                                        <small>By: Emilio G.</small>
                                    </p>
                                    
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="../ajax/usuario.php?op=salir" class="btn btn-danger btn-flat">Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <?php
                    if ($_SESSION['escritorio'] == 1) {
                        echo '<li>
                                <hr>
                                <a href="escritorio.php">
                                    <i class="fa fa-tasks"></i> <span>Escritorio</span>
                                </a>
                              </li>';
                    }
                    ?>


                    <?php
                    if ($_SESSION['almacen'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <hr>
                                    <i class="fa fa-laptop"></i>
                                    <span>Almacén</span>
                                </a>
                                <ul class="treeview">
                                    <li><a href="articulo.php"></i> Artículos</a></li>
                                    <li><a href="categoria.php"> Categorías</a></li>
                                </ul>
                            </li>';
                    }
                    ?>


                    <?php
                    if ($_SESSION['compras'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <hr>
                                    <i class="fa fa-th"></i>
                                    <span>Compras</span>
                                </a>
                                <ul class="treeview">
                                    <li><a href="ingreso.php"> Ingresos</a></li>
                                    <li><a href="proveedor.php"> Proveedores</a></li>
                                </ul>
                            </li>';
                    }
                    ?>


                    <?php
                    if ($_SESSION['ventas'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <hr>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ventas</span>
                                </a>
                                <ul class="treeview">
                                    <li><a href="venta.php">Ventas</a></li>
                                    <li><a href="cliente.php"> Clientes</a></li>
                                </ul>
                            </li>';
                    }
                    ?>



                    <?php
                    if ($_SESSION['acceso'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <hr>
                                    <i class="fa fa-folder"></i> <span>Acceso</span>
                                </a>
                                <ul class="treeview">
                                    <li><a href="usuario.php"> Usuarios</a></li>
                                    <li><a href="permiso.php"> Permisos</a></li>
                                </ul>
                            </li>';
                    }
                    ?>



                    <?php
                    /*
                    if ($_SESSION['consultac'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart"></i> <span>Consulta Compras</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="consultacompras.php"><i class="fa fa-circle-o"></i> Consulta Compras</a></li>
                                </ul>
                            </li>';
                    }
                    */
                    ?>

                    <?php
                    /*
                    if ($_SESSION['consultav'] == 1) {
                        echo '<li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart"></i> <span>Consulta Ventas</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="consultaventas.php"><i class="fa fa-circle-o"></i> Consulta Ventas</a></li>
                                </ul>
                            </li>';
                    }
                    */
                    ?>


                    <!--
                    <li>
                        <a href="#">
                            <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                            <small class="label pull-right bg-red">PDF</small>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                            <small class="label pull-right bg-yellow">IT</small>
                        </a>
                    </li>
                    -->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>