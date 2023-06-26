<!DOCTYPE html>
<html>

<head>
    <link rel="Website Icon" type="ipg" href="{{ url('public/img/icon_website.jpg') }}">
    <title>Store List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <div class="container" style="max-width: 100%">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark navTop">
                <div class="Logo_web col-md-6">
                    <a href="{{ url('home') }}">
                        <img class="img-fluid" style="width: 25%;"
                            src="{{ url('public/img/logo_fastfood-removebg-preview.png') }}" alt="Logo">
                    </a>

                </div>

                <div class="nav_menu col-md-6 d-flex justify-content-end">
                    <!-- Topbar -->
                    <button class="navbar-toggler rounded-0  " type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation ">
                        <i class="bi bi-list text-dark"></i>
                    </button>
                    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow"
                        style="height: 50px">

                        <!-- Sidebar Toggle (Topbar) -->

                        <!-- Topbar Search -->
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown"
                                    role="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-bell fs-5"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown"
                                    role="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-chat-dots fs-5"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                            </li>



                            <!-- Nav Item - User Information -->

                            <!-- Dropdown - User Information -->
                            <div class="container ">

                                <div class="dropdown">
                                    <a class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <i class="bi bi-person-circle fs-5"></i>
                                    </a>
                                    <ul class="dropdown-menu pb-0" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-3"></i>
                                                ProFile</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill me-3"></i>
                                                Settings</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-door-open me-3"></i>
                                                Activity Log</a></li>
                                        <li>
                                            <form method="POST" class="dropdown-item"
                                                style="border-top: 1px solid darkgray" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-none ps-0 text-dark"><i
                                                        class="bi bi-box-arrow-right me-3 "></i>Đăng xuất</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->
                </div>
            </nav>
        </header>

        <main class="container mt-4" style="max-width: 100%">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light mb-4 navMenu">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <div class="list-group menuQuanLy">
                                <a href="{{ url('stores') }}" class=" item_menu " style="text-decoration: none"><i class="bi bi-shop me-3"></i> Quản
                                    lý cửa hàng </a>
                            </div>

                            <div class="list-group menuQuanLy">
                                <a href="{{ url('products') }}" class="item_menu " style="text-decoration: none">  <i class="bi bi-egg-fried me-3"></i>Quản
                                    lý món ăn</a>
                            </div>

                            <div class="list-group menuQuanLy">
                                <a href="{{ url('customers') }}" class="   item_menu "
                                    style="text-decoration: none"><i class="bi bi-person-circle me-3"></i> Quản lý khách hàng </a>
                            </div>

                            <div class="list-group menuQuanLy">
                                <a href="{{ url('orders') }}" class="  item_menu "
                                    style="text-decoration: none"><i class="bi bi-cart-check me-3"></i> Quản lý đơn hàng </a>
                            </div>
                            <div class="list-group menuQuanLy">
                                <a href="{{ url('home') }}" class="  item_menu "
                                    style="text-decoration: none"><i class="bi bi-bar-chart me-3"></i> Biểu Đồ </a>
                            </div>
                        </ul>
                    </div>
                </nav>
                <div id="content-wrapper" class="d-flex flex-column bg-secondary-subtle">

                    <!-- Main Content -->
                    <div id="content">

                        <div class="container-fluid mt-4 mb-3">
                            <!-- Page Heading -->



                            @yield('content')
                            <!-- Begin Page Content -->



                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>

    <div class="container mt-3" style="max-width: 100%">
        <footer>
            <div class="main-footer bg-white">
                <div class="main-footer-bottom">
                    <div class="container scroltop-to-bottom">
                        <div class="row">
                            <!-- chia col md -->
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                                <div class="footer-col footer-block">
                                    <h4 class="footer-title">Giới thiệu</h4>
                                    <div class="footer-content">
                                        <p>Chúng tôi mong muốn trở thành nhà cung cấp dịch vụ thức ăn nhanh,
                                            hướng đến trở thành một mô hình chuẩn mực và tiên
                                            phong trong lĩnh vực ăn uống tại thị trường Việt Nam.</p>
                                        <!-- chen logo + icon -->
                                        <div class="logo-footer">
                                            <img src="{{ url('public/img/logo-fastfood.jpg') }}" class="d-block w-50"
                                                alt="Card image cap" />
                                        </div>
                                        <div class="social-list">
                                            <a href="{{ url('home') }}" target="_blank" rel="noreferrer"
                                                class="bi bi-facebook" aria-label="Facebook"></a>
                                            <a href="{{ url('home') }}" target="_blank" rel="noreferrer"
                                                class="bi bi-google" aria-label="Google"></a>
                                            <a href="{{ url('home') }}" target="_blank" rel="noreferrer"
                                                class="bi bi-twitter" aria-label="Twitter"></a>
                                            <a href="{{ url('home') }}" target="_blank" rel="noreferrer"
                                                class="bi bi-youtube" aria-label="Youtube"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                                <div class="footer-col footer-block">
                                    <h4 class="footer-title">Thông tin liên hệ</h4>
                                    <div class="footer-content toggle-footer">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span> Địa chỉ: </span>
                                                Tầng 4, tòa nhà Flemington, số 182, đường Lê Đại Hành, phường
                                                15, quận 11, Tp. Hồ Chí Minh.
                                            </li>
                                            <li>
                                                <span> Điện thoại: </span>
                                                1900.636.099
                                            </li>
                                            <li>
                                                <span> Fax: </span>
                                                1900.636.099
                                            </li>
                                            <li>
                                                <span> Email: </span>
                                                fastfood@gmail.com
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                                <div class="footer-col footer-link">
                                    <h4 class="footer-title">PHÁP LÝ & CÂU HỎI</h4>
                                    <div class="footer-content toggle-footer">
                                        <ul class="list-unstyled">
                                            <li class="item">
                                                <a hrel="" title="Tìm kiếm">Tìm kiếm</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Giới thiệu">Giới thiệu</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Chính sách đổi trả">Chính sách đổi
                                                    trả</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Chính sách bảo mật">Chính sách bảo
                                                    mật</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Điều khoản dịch vụ">Điều khoản dịch
                                                    vụ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                                <div class="footer-col footer-link">
                                    <h4 class="footer-title">Thông tin</h4>
                                    <div class="footer-content toggle-footer">
                                        <ul class="list-unstyled">
                                            <li class="item">
                                                <a hrel="" title="Trang Chủ">Trang Chủ</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Giới thiệu">Giới thiệu</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Dự án">Sản Phẩm</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Chi tiết dự án">Chi tiết Sản Phẩmbh</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Blog">Blog</a>
                                            </li>
                                            <li class="item">
                                                <a hrel="" title="Liên hệ">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-footer--copyright" style="text-align: center;">
                    <div class="container">
                        <div class="main-footer--border">
                            <p class="copyright">
                                Copyright © 2022
                                <a href="{{ url('home') }}" style="text-decoration: none"> NextCompany</a>
                                .
                                <a target="_blank" href="{{ url('home') }}" style="text-decoration: none">By Fast
                                    Food</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
