<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Products</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/index.php?model=contacts&action=read" class="brand-link">
            <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="/?model=contacts&action=read" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Contacs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/?model=contacts&action=create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Contacts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/?model=contacts&action=read" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List of Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/?model=phone&action=read" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Phones
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/?model=phone&action=create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Phone</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/?model=phone&action=read" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List of Phones</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/?model=email&action=read" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Emails
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/?model=email&action=create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Emails</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/?model=email&action=read" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List of Emails</p>
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
