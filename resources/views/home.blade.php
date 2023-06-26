@extends('layout')
@section('content')
    <!-- Content Row -->
    <div class="row">

            <!-- Area Chart -->
            <div class="dropdown">
                <a class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                    <i class="bi bi-bar-chart"></i> Menu Biểu Đồ
                </a>
                <ul class="dropdown-menu pb-0" aria-labelledby="dropdownMenuButton">

                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                                style="background-color: lightgreen;">
                                <h6 class="m-0 font-weight-bold text-primary contentbd">
                                    <a href="#orderChartSection" class="chart-link" data-chart="#myChart">Biểu Đồ Đơn Hàng</a>
                                </h6>
                            </div>
                            <!-- Card Body -->
        
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                                style="background-color: lightgreen;">
                                <h6 class="m-0 font-weight-bold text-primary contentbd">
                                    <a href="#productChartSection" class="chart-link" data-chart="#productChart">Biểu Đồ Sản Phẩm Bán Chạy</a>
                                </h6>
                            </div>
                            <!-- Card Body -->
        
                        </div>
                    </div>
                </ul>
            </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                CÁC CỬA HÀNG HIỆN CÓ </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$storeCount}} <i class="bi bi-shop"></i></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                SỐ SẢN PHẨM HIỆN CÓ</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$productCount}} <i class="bi bi-boxes"></i></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SỐ ĐƠN HÀNG 
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$orderCount}} <i class="bi bi-basket"></i></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                TỔNG DOANH THU</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($totalAmount, 0, '.', ',') }} VNĐ </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->




    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    style="background-color: lightgreen;">
                    <h6 class="m-0 font-weight-bold text-primary contentbd">Biểu Đồ Đơn Hàng</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart"></canvas>

                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    style="background-color: lightgreen;">
                    <h6 class="m-0 font-weight-bold text-primary contentbd">Biểu Đồ Sản Phẩm Bán Chạy</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="productChart"></canvas>

                    </div>
                </div>
            </div>
        </div>



        <!-- Pie Chart -->
    </div>

    <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- End of Footer -->

    </div>
    <!-- End of ContentWrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        function displayChart(stores, totals) {
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: stores,
                    datasets: [{
                        label: 'Tổng Doanh Thu Từng Cửa Hàng',
                        data: totals,
                        backgroundColor: 'rgb(39, 128, 196)',

                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    barPercentage: 0.5,
                    maintainAspectRatio: false, // Tắt tỷ lệ giữa chiều rộng và chiều cao của biểu đồ
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1000000 // Điều chỉnh độ đơn vị trục y tùy theo giá trị thực tế
                            }
                        }
                    }
                }
            });
        }

        function productChart(products, total1) {
            var ctx = document.getElementById('productChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: products,
                    datasets: [{
                        label: 'Số Lượng Sản Phẩm Đã Bán',
                        data: total1,
                        backgroundColor: 'rgb(3, 252, 111)',

                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    barPercentage: 0.5,
                    maintainAspectRatio: false, // Tắt tỷ lệ giữa chiều rộng và chiều cao của biểu đồ
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1000000 // Điều chỉnh độ đơn vị trục y tùy theo giá trị thực tế
                            }
                        }
                    }
                }
            });
        }
    </script>
    <script>
        // biểu đồ 1
        var stores = [];
        var totals = [];

        @foreach ($storeData as $item)
            stores.push("{{ $item->store_name }}");
            totals.push({{ $item->total_amount }});
        @endforeach

        // Gọi hàm hiển thị biểu đồ
        displayChart(stores, totals);


        // biểu đồ 2
        var products = [];
        var total1 = [];

        @foreach ($orderItemData as $item)
            products.push("{{ $item->product_name }}");
            total1.push({{ $item->total_quantity }});
        @endforeach

        // Gọi hàm hiển thị biểu đồ
        productChart(products, total1);
    </script>


<script>
    // Xử lý sự kiện khi nhấp vào link của biểu đồ
    document.addEventListener('DOMContentLoaded', function() {
        const chartLinks = document.querySelectorAll('.chart-link');
        chartLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const chartId = this.dataset.chart;
                const chartSection = document.querySelector(chartId);
                chartSection.scrollIntoView({ behavior: 'smooth' });
            });
        });
    });
</script>
    </body>

    </html>
@endsection
