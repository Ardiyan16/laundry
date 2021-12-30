<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - {{ $title }}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ ('admin/apple-icon.png') }}">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ url('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">


    <link rel="stylesheet" href="{{ url('admin/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('admin/images/tefa.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="#"><img src="{{ url('admin/images/logo_laundry3.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar"></i>Penjadwalan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="{{ url('/t_penjadwalan') }}">Tambah Penjadwalan</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ url('/penjadwalan') }}">Data Penjadwalan</a></li>
                            <li><i class="fa fa-history"></i><a href="">Riwayat Penjadwalan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Karyawan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="{{ url('/t_pegawai') }}">Tambah Karyawan</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ url('/pegawai') }}">Data Karyawan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/rangkaian') }}"><i class="menu-icon fa fa-bar-chart"></i>Rangkaian Tanam </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <h5>Admin</h5>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ url('admin/images/admin.jpg') }}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ url('/logoutadmin') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            @yield('adminlayout')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ url('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/main.js')  }}"></script>


    <script src="{{ url('admin/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/dashboard.js')  }}"></script>
    <script src="{{ url('admin/assets/js/widgets.js')  }}"></script>
    <script src="{{ url('admin/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ url('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

    <script src="{{ url('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ url('admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>