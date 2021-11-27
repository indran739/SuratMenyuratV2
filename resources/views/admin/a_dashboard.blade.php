<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Surat Menyurat</title>
    <!-- base:css -->
    <link rel="stylesheet" href="v_template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="v_template/vendors/feather/feather.css">
    <link rel="stylesheet" href="v_template/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="v_template/vendors/flag-icon-css/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="v_template/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="v_template/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="v_template/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="v_template/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="v_template/images/favicon.png" />

    <!--Icon-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">

                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item d-flex mr-4 ">
                        <a class="preview-item align-items-center justify-content-center nav-link" href="profil.html">
                            <i class="icon-head"></i> {{ Auth::user()->name }}
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-profile">
                <div class="user-image">
                    <img src="img/profile/72190343.jpg">
                </div>
                <div class="user-name">
                    {{ Auth::user()->name }}
                </div>
                <div class="user-designation">
                    {{ Auth::user()->role }}
                </div>
            </div>
            <!--Menu SideBar-->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                    <i class='bx bxs-dashboard menu-icon'></i>
                    <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class='bx bxs-envelope menu-icon'></i>
                    <span class="menu-title">Surat Masuk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class='bx bxs-paper-plane menu-icon'></i>
                    <span class="menu-title">Surat Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class='bx bxs-file-plus menu-icon'></i>
                    <span class="menu-title">Buat Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/feather-icons.html">
                    <i class='bx bxs-bookmarks menu-icon'></i>
                    <span class="menu-title">Arsip Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class='bx bxs-log-out menu-icon'></i>
                    <span class="menu-title">{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('admin')

            </div>
        </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="v_template/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="v_template/js/off-canvas.js"></script>
    <script src="v_template/js/hoverable-collapse.js"></script>
    <script src="v_template/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="v_template/vendors/chart.js/Chart.min.js"></script>
    <script src="v_template/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="v_template/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
</body>

</html>

