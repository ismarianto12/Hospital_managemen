<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords"
    content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image"
    content="{{ asset('template') }}/{{ asset('template') }}/s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
    content="{{ asset('template') }}/{{ asset('template') }}/s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image"
    content="{{ asset('template') }}/s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template') }}/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css"
    type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/argon.min5438.css?v=1.2.0" type="text/css">
    <!-- Google Tag Manager -->

    <script src="{{ asset('template') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
            '{{ asset('template') }}/{{ asset('template') }}/www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  d-flex  align-items-center">
                    <a class="navbar-brand" href="dashboard.html">
                        <img src="{{ asset('template') }}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                    </a>
                    <div class=" ml-auto ">
                        <!-- Sidenav toggler -->
                        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                        <div class="collapse show" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="dashboard.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> D </span>
                                        <span class="sidenav-normal"> Dashboard </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="alternative.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> A </span>
                                        <span class="sidenav-normal"> Alternative </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-ungroup text-orange"></i>
                        <span class="nav-link-text">Data master</span>
                    </a>
                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ Url('master/obat') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> o </span>
                                    <span class="sidenav-normal"> Obat </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ Url('master/obat/jenis') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> J </span>
                                    <span class="sidenav-normal"> Jenis Obat </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="navbar-components">
                    <i class="ni ni-ui-04 text-info"></i>
                    <span class="nav-link-text">Data Gejala</span>
                </a>
                <div class="collapse" id="navbar-components">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ Url('gejala') }}" class="nav-link">
                                <span class="sidenav-mini-icon"> Gejala </span>
                                <span class="sidenav-normal"> Buttons </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Url('pasien/keluhan') }}" class="nav-link">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal"> Data Keluhan </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Jadwal Dokter</span>
            </a>
            <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ Url('dokter/jadwal') }} " class="nav-link">
                            <span class="sidenav-mini-icon"> J </span>
                            <span class="sidenav-normal"> Jadwal dokter </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Url('dokter.data') }}" class="nav-link">
                            <span class="sidenav-mini-icon"> D </span>
                            <span class="sidenav-normal"> Data Dokter </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="sidenav-mini-icon"> V </span>
                            <span class="sidenav-normal"> Validation </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="navbar-tables">
            <i class="ni ni-align-left-2 text-default"></i>
            <span class="nav-link-text">Tables</span>
        </a>
        <div class="collapse" id="navbar-tables">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="https://demos.creative-tim.com/argon-dashboard-pro/pages/tables/tables.html"
                    class="nav-link">
                    <span class="sidenav-mini-icon"> T </span>
                    <span class="sidenav-normal"> Identitas instansi </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://demos.creative-tim.com/argon-dashboard-pro/pages/tables/sortable.html"
                class="nav-link">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal"> Data Kelurahan </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="https://demos.creative-tim.com/argon-dashboard-pro/pages/tables/datatables.html"
            class="nav-link">
            <span class="sidenav-mini-icon"> D </span>
            <span class="sidenav-normal"> Data Kecamatan </span>
        </a>
    </li>
</ul>
</div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button"
    aria-expanded="false" aria-controls="navbar-maps">
    <i class="ni ni-map-big text-primary"></i>
    <span class="nav-link-text">Data Pasien</span>
</a>
<div class="collapse" id="navbar-maps">
    <ul class="nav nav-sm flex-column">
        <li class="nav-item">
            <a href="https://demos.creative-tim.com/argon-dashboard-pro/pages/maps/google.html"
            class="nav-link">
            <span class="sidenav-mini-icon"> K </span>
            <span class="sidenav-normal"> Konfirmasi </span>
        </a>
    </li>
    <li class="nav-item">
        <a href="https://demos.creative-tim.com/argon-dashboard-pro/pages/maps/vector.html"
        class="nav-link">
        <span class="sidenav-mini-icon"> V </span>
        <span class="sidenav-normal"> Belum Konfirmasi </span>
    </a>
</li>
</ul>
</div>
</li>
{{-- <li class="nav-item">
    <a class="nav-link"
    href="https://demos.creative-tim.com/argon-dashboard-pro/pages/widgets.html">
    <i class="ni ni-archive-2 text-green"></i>
    <span class="nav-link-text">Widgets</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link"
    href="https://demos.creative-tim.com/argon-dashboard-pro/pages/charts.html">
    <i class="ni ni-chart-pie-35 text-info"></i>
    <span class="nav-link-text">Charts</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link"
    href="https://demos.creative-tim.com/argon-dashboard-pro/pages/calendar.html">
    <i class="ni ni-calendar-grid-58 text-red"></i>
    <span class="nav-link-text">Calendar</span>
</a>
</li> --}}
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Nomor pendaftaran Pasien</span>
    <span class="docs-mini">D</span>
</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link"
        href="https://demos.creative-tim.com/argon-dashboard-pro/docs/getting-started/overview.html"
        target="_blank">
        <i class="ni ni-spaceship"></i>
        <span class="nav-link-text">Nomor pendaftaran</span>
    </a>
</li>
</ul>
</div>
</div>
</div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                    <!-- Sidenav toggler -->
                    <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                    data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </li>
            <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
                        notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <img alt="Image placeholder"
                                    src="{{ asset('template') }}/assets/img/theme/team-1.jpg"
                                    class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0 text-sm">{{ Auth::user()->username }}</h4>
                                        </div>
                                        <div class="text-right text-muted">
                                            <small>2 hrs ago</small>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <img alt="Image placeholder"
                                    src="{{ asset('template') }}/assets/img/theme/team-2.jpg"
                                    class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0 text-sm">{{ Auth::user()->username }}</h4>
                                        </div>
                                        <div class="text-right text-muted">
                                            <small>3 hrs ago</small>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <img alt="Image placeholder"
                                    src="{{ asset('template') }}/assets/img/theme/team-3.jpg"
                                    class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0 text-sm">{{ Auth::user()->username }}</h4>
                                        </div>
                                        <div class="text-right text-muted">
                                            <small>5 hrs ago</small>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <img alt="Image placeholder"
                                    src="{{ asset('template') }}/assets/img/theme/team-4.jpg"
                                    class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0 text-sm">John Snow</h4>
                                        </div>
                                        <div class="text-right text-muted">
                                            <small>2 hrs ago</small>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <img alt="Image placeholder"
                                    src="{{ asset('template') }}/assets/img/theme/team-5.jpg"
                                    class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="mb-0 text-sm">John Snow</h4>
                                        </div>
                                        <div class="text-right text-muted">
                                            <small>3 hrs ago</small>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View
                        all</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                </a>
                <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                            <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Calendar</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                            <i class="ni ni-email-83"></i>
                        </span>
                        <small>Email</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                            <i class="ni ni-credit-card"></i>
                        </span>
                        <small>Payments</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                            <i class="ni ni-books"></i>
                        </span>
                        <small>Reports</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                            <i class="ni ni-pin-3"></i>
                        </span>
                        <small>Maps</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                            <i class="ni ni-basket"></i>
                        </span>
                        <small>Shop</small>
                    </a>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder"
                    src="{{ asset('template') }}/assets/img/theme/team-4.jpg">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                    <span
                    class="mb-0 text-sm  font-weight-bold">{{ ucfirst(Auth::user()->username) }}</span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu  dropdown-menu-right ">
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ Url('logout') }}" class="logout dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
            </a>
        </div>
    </li>
</ul>
</div>
</div>
</nav>
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
            </div>
            <!-- Card stats -->
            {{-- <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                    <span class="h2 font-weight-bold mb-0">350,897</span>
                                </div>
                                <div class="col-auto">
                                    <div
                                    class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-active-40"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                <span class="h2 font-weight-bold mb-0">2,356</span>
                            </div>
                            <div class="col-auto">
                                <div
                                class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                            <span class="h2 font-weight-bold mb-0">924</span>
                        </div>
                        <div class="col-auto">
                            <div
                            class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                        <div
                        class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                    </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span>
            </p>
        </div>
    </div>
</div>
</div> --}}
</div>
</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @yield('content')
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com/" class="font-weight-bold ml-1"
                    target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/" class="nav-link" target="_blank">Creative
                            Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link"
                            target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com/" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link"
                            target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('template') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="{{ asset('template') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{ asset('template') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="{{ asset('template') }}/assets/js/argon.min5438.js?v=1.2.0"></script>
<!-- Demo JS - remove this in your project -->
<script src="{{ asset('template') }}/assets/js/demo.min.js"></script>
<script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
    document, 'script', '{{ asset('template') }}/{{ asset('template') }}/connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }

    $(function(){
        $('.logout').click(function(e) {
            e.preventDefault();
            // $('#judul').html('Anda yakin keluar ?');
           // $('#_mlogout').modal('show');
            if(confirm('anda akan keluar')){
                window.location.href = "{{ Url('logout') }}";
            }
        });
    });

</script>
<noscript>

    <div class="modal fade" id="_mlogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i> Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="judul"></div>
                <hr />
                <form action="{{ Url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Keluar Aplikasi</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
</body>

</html>
