<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('Title_Header', 'Affordable Homes')</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Trix Css -->
    <link href="{{ asset('css/trix.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css') }}" rel="stylesheet" />

    @yield('css')
</head>
<body class="theme-blue">
    <!-- Page Loader -->


    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html">Affordable Homes</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>

                                <span class="label-count">2</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="">
                                            <div class="icon-circle bg-blue">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                        <!-- Tasks -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" title="Offices Held">
                                <i class="material-icons">flag</i>
                                <span class="label-count">{{ session('logged_in_user')['count'] - 1 }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Offices</li>
                                <li class="body">
                                    <ul class="menu tasks">
                                        @for ($i = 1; $i < session('logged_in_user')['count']; $i++)
                                            <li>
                                                <a href="{{ route('change_current_office', $i) }}">
                                                    @if (session('logged_in_user')['current_office_id'] == session('logged_in_user')["office_id{$i}"])
                                                        <div class="icon-circle bg-purple">
                                                            <i class="material-icons">check</i>
                                                        </div>
                                                    @endif

                                                    <div class="menu-info">
                                                        <h4>{{session('logged_in_user')["office_name{$i}"]}} {{ session('logged_in_user')["head{$i}"] == 1?"(head)":"" }}</h4>
                                                        <p>
                                                            {{session('logged_in_user')["position_name{$i}"]}}
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endfor

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!-- #END# Tasks -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->

        <section>
                <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar">
                    <!-- User Info -->
                    <div class="user-info">
                        <div class="image">
                            <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="" />
                        </div>
                        <div class="info-container">
                            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ session('logged_in_user')['firstname'] }} {{ session('logged_in_user')['surname'] }}</div>
                            <div class="email">{{ session('logged_in_user')['current_position_name'] }}</div>
                            <div class="email">{{ session('logged_in_user')['current_office_name'] }}</div>
                            <div class="btn-group user-helper-dropdown">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li role="seperator" class="divider"></li>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                    <li><a href="" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="material-icons">input</i>{{ __('Logout') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- #User Info -->
                    <!-- Menu -->
                    <div class="menu">
                        <ul class="list">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="active">
                                <a href="">
                                    <i class="material-icons">home</i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            @yield('menu')
                        </ul>

                    </div>
                    <!-- #Menu -->
                    <!-- Footer -->
                    <div class="legal">
                        <div class="copyright">
                            &copy; 2019 <a href="javascript:void(0);">Babcock University - ADDS</a>.
                        </div>
                        <div class="version">
                            <b>Version: </b> 1.0.0
                        </div>
                    </div>
                    <!-- #Footer -->
                </aside>
                <!-- #END# Left Sidebar -->
                <!-- Right Sidebar -->
                <aside id="rightsidebar" class="right-sidebar">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                        <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                            <ul class="demo-choose-skin">
                                <li data-theme="red" class="active">
                                    <div class="red"></div>
                                    <span>Red</span>
                                </li>
                                <li data-theme="pink">
                                    <div class="pink"></div>
                                    <span>Pink</span>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                    <span>Purple</span>
                                </li>
                                <li data-theme="deep-purple">
                                    <div class="deep-purple"></div>
                                    <span>Deep Purple</span>
                                </li>
                                <li data-theme="indigo">
                                    <div class="indigo"></div>
                                    <span>Indigo</span>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                    <span>Blue</span>
                                </li>
                                <li data-theme="light-blue">
                                    <div class="light-blue"></div>
                                    <span>Light Blue</span>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                    <span>Cyan</span>
                                </li>
                                <li data-theme="teal">
                                    <div class="teal"></div>
                                    <span>Teal</span>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                    <span>Green</span>
                                </li>
                                <li data-theme="light-green">
                                    <div class="light-green"></div>
                                    <span>Light Green</span>
                                </li>
                                <li data-theme="lime">
                                    <div class="lime"></div>
                                    <span>Lime</span>
                                </li>
                                <li data-theme="yellow">
                                    <div class="yellow"></div>
                                    <span>Yellow</span>
                                </li>
                                <li data-theme="amber">
                                    <div class="amber"></div>
                                    <span>Amber</span>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                    <span>Orange</span>
                                </li>
                                <li data-theme="deep-orange">
                                    <div class="deep-orange"></div>
                                    <span>Deep Orange</span>
                                </li>
                                <li data-theme="brown">
                                    <div class="brown"></div>
                                    <span>Brown</span>
                                </li>
                                <li data-theme="grey">
                                    <div class="grey"></div>
                                    <span>Grey</span>
                                </li>
                                <li data-theme="blue-grey">
                                    <div class="blue-grey"></div>
                                    <span>Blue Grey</span>
                                </li>
                                <li data-theme="black">
                                    <div class="black"></div>
                                    <span>Black</span>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings">
                            <div class="demo-settings">
                                <p>GENERAL SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Report Panel Usage</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Email Redirect</span>
                                        <div class="switch">
                                            <label><input type="checkbox"><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                                <p>SYSTEM SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Notifications</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Auto Updates</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                                <p>ACCOUNT SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Offline</span>
                                        <div class="switch">
                                            <label><input type="checkbox"><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Location Permission</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- #END# Right Sidebar -->
            </section>

            <section class="content">
                    <div class="container-fluid">
                            <div class="block-header">
                                <h2>@yield('title')</h2>
                            </div>
                            @yield('content')

                    </div>
            </section>


    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

     <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- Morris Plugin Js -->
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Trix Js -->
    <script src="{{ asset('js/trix.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset('js/pages/forms/form-wizard.js') }}"></script>
    <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>

</body>

</html>
